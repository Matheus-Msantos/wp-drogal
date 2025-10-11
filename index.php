<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 * TEMPLATE NAME: Home
 */

get_header();
?>

<?php

$group_field_banners = get_field('banners');
$banner_main_desk = $group_field_banners['banner_princial_desk'];
$banner_main_mob = $group_field_banners['banner_princial_mob'];

$group_filed_highlights = get_field('destaques');
$banner_highlights_big = $group_filed_highlights['banner_destaque_grande'];
$banner_highlights_left = $group_filed_highlights['banner_destaque_direita'];
$banner_highlights_right = $group_filed_highlights['banner_destaque_esqueda'];

?>

<main class="wc-home">

  <section class="wc-home-banner-main">
    <?php if ($banner_main_desk): ?>
      <img src="<?= $banner_main_desk ?>" class="wc-home-banner-main__desk" />
    <?php endif ?>
    <?php if ($banner_main_mob): ?>
      <img src="<?= $banner_main_mob ?>" class="wc-home-banner-main__mob" />
    <?php endif ?>
  </section>
  <div class="wc-home__conteiner">
    <section class="wc-home-post-lestest">
      <h2 class="wc-home-post-lestest__title">Assuntos do momento</h2>

      <?php
      // Query dos 3 últimos posts
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $latest_posts = new WP_Query($args);

      if ($latest_posts->have_posts()):
        $count = 0;
        echo '<div class="wc-home-post-lestest__grid">';
        while ($latest_posts->have_posts()):
          $latest_posts->the_post();
          $count++;
          $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $cats = get_the_category();
          $cat_name = !empty($cats) ? esc_html($cats[0]->name) : '';
          $date = get_the_date('M, d'); // Ex: Mar, 22
          $excerpt = wp_trim_words(get_the_excerpt(), 20, '...');
          ?>

          <?php if ($count === 1): ?>
            <!-- Primeiro post - destaque (100%) -->
            <a href="<?php the_permalink(); ?>" class="wc-home-post-lestest__item wc-home-post-lestest__item--featured"
              style="background-image: url('<?php echo esc_url($thumb); ?>');">
              <div class="wc-home-post-lestest__overlay">
                <h3 class="wc-home-post-lestest__title-post"><?php the_title(); ?></h3>
                <p class="wc-home-post-lestest__excerpt"><?php echo $excerpt; ?></p>
                <div class="wc-home-post-lestest__flex">
                  <div class="wc-home-post-lestest__flex-date">
                    <div class="wc-home-post-lestest__store">
                      <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Ellipse28.png"
                        class="wc-home-post-lestest__store-img" />
                      <p class="wc-home-post-lestest__store-name">Rede Drogal</p>
                    </div>
                    <span class="wc-home-post-lestest__date"><?php echo esc_html($date); ?></span>
                  </div>

                  <span class="wc-home-post-lestest__cat"><?php echo $cat_name; ?></span>
                </div>
              </div>
            </a>

            <div class="wc-home-post-lestest__row">
            <?php else: ?>
              <!-- Segundo e terceiro posts (50%) -->
              <a href="<?php the_permalink(); ?>"
                class="wc-home-post-lestest__item wc-home-post-lestest__item--small wc-home-post-item">
                <div class="wc-home-post-item">
                  <?php if ($thumb): ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </div>
                <div class="wc-home-post-item__content">
                  <div class="wc-home-post-item__flex">
                    <span class="wc-home-post-item__cat"><?php echo $cat_name; ?></span>
                    <span class="wc-home-post-item__date"><?php echo esc_html($date); ?></span>
                  </div>
                  <h3 class="wc-home-post-item__title-post"><?php the_title(); ?></h3>
                  <p class="wc-home-post-item__excerpt"><?php echo $excerpt; ?></p>
                </div>
              </a>
            <?php endif; ?>

          <?php endwhile;
        echo '</div></div>'; // fecha row e grid
        wp_reset_postdata();
      endif;
      ?>
    </section>

    <section class="wc-home-category">
      <h2>Sobre qual assunto você gostaria de ler hoje?</h2>

      <?php
      $args = array(
        'post_type' => 'carrossel_categoria',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC'
      );
      $categorias = new WP_Query($args);

      if ($categorias->have_posts()):
        echo '<ul class="wc-category-list">';
        while ($categorias->have_posts()):
          $categorias->the_post();
          $link = get_post_meta(get_the_ID(), '_wc_categoria_link', true);
          $imagem = get_the_post_thumbnail_url(get_the_ID(), 'medium');
          ?>
          <li class="wc-category-item">
            <a href="<?php echo esc_url($link ?: '#'); ?>">
              <?php if ($imagem): ?>
                <img src="<?php echo esc_url($imagem); ?>" alt="<?php the_title_attribute(); ?>" class="wc-category-image" />
              <?php else: ?>
                <div class="wc-category-image placeholder"></div>
              <?php endif; ?>
              <span class="wc-category-title"><?php the_title(); ?></span>
            </a>
          </li>
          <?php
        endwhile;
        echo '</ul>';
        wp_reset_postdata();
      else:
        echo '<p>Nenhuma categoria cadastrada ainda.</p>';
      endif;
      ?>
    </section>

    <section class="wc-home-highlights">
      <h2>Confira essas novidades ❤️</h2>

      <?php if ($banner_highlights_big): ?>
        <img src="<?= $banner_highlights_big ?>" class="wc-home-highlights__banner-big" />
      <?php endif; ?>

      <div class="wc-home-highlights__flex">
        <?php if ($banner_highlights_left): ?>
          <img src="<?= $banner_highlights_left ?>" class="wc-home-highlights__banner-small" />
        <?php endif; ?>

        <?php if ($banner_highlights_right): ?>
          <img src="<?= $banner_highlights_right ?>" class="wc-home-highlights__banner-small" />
        <?php endif; ?>
      </div>
    </section>

    <section class="wc-category-item">
      <h2 class="wc-category-item__title">Mais conteúdos recentes</h2>

      <?php
      // Query para pegar o 4º e 5º posts mais recentes
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 3, // pula os 3 primeiros
      );

      $more_posts = new WP_Query($args);

      if ($more_posts->have_posts()):
        echo '<div class="wc-category-item__grid">';
        while ($more_posts->have_posts()):
          $more_posts->the_post();
          $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $cats = get_the_category();
          $cat_name = !empty($cats) ? esc_html($cats[0]->name) : '';
          $date = get_the_date('M, d');
          $excerpt = wp_trim_words(get_the_excerpt(), 20, '...');
          ?>

          <a href="<?php the_permalink(); ?>"
            class="wc-home-post-lestest__item wc-home-post-lestest__item--small wc-home-post-item">
            <div class="wc-home-post-item">
              <?php if ($thumb): ?>
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </div>
            <div class="wc-home-post-item__content">
              <div class="wc-home-post-item__flex">
                <span class="wc-home-post-item__cat"><?php echo $cat_name; ?></span>
                <span class="wc-home-post-item__date"><?php echo esc_html($date); ?></span>
              </div>
              <h3 class="wc-home-post-item__title-post"><?php the_title(); ?></h3>
              <p class="wc-home-post-item__excerpt"><?php echo $excerpt; ?></p>
            </div>
          </a>

          <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
      endif;
      ?>
    </section>

  </div>

</main><!-- #main -->

<?php
get_footer();
