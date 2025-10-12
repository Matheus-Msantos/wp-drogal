<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>


<main class="wc-category-post-lestest">
  <h2 class="wc-category-post-lestest__title">
    <?php
    /* translators: %s: search query. */
    printf(esc_html__('Search Results for: %s', '_s'), '<span>' . get_search_query() . '</span>');
    ?>
  </h2>


  <div class="wc-categoria-search">
    <?php dynamic_sidebar('busca_categoria'); ?>
  </div>

  <div id="wc-post-list" class="wc-category-post__grid">
    <?php
    // Primeira carga (6 posts)
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => 1,
      'cat' => get_queried_object_id(),
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post();

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
      wp_reset_postdata();
    endif;
    ?>
  </div>

</main>