<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="wc-single-header">
    <?php
    if (is_singular()):
      the_title('<h1 class="wc-single-title">', '</h1>');
    else:
      the_title('<h2 class="wc-single-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;
    ?>

    <div class="wc-single-post-meta">


      <div class="wc-single-post-date">
        <div class="wc-single__store">
          <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Ellipse28.png"
            class="wc-single__store-img" />
          <p class="wc-single__store-name">Rede Drogal</p>
        </div>
        <span class="wc-single-date">
          <?php echo get_the_date('M, d'); ?>
        </span>
      </div>

      <span class="wc-single-post-category">
        <?php
        $categories = get_the_category();
        if (!empty($categories)) {
          echo esc_html($categories[0]->name);
        }
        ?>
      </span>
    </div>
  </header><!-- .entry-header -->

  <?php _s_post_thumbnail(); ?>

  <div class="wc-single-content">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __('Continue reading<span class="screen-reader-text"> "%s"</span>', '_s'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post(get_the_title())
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', '_s'),
        'after' => '</div>',
      )
    );
    ?>
  </div><!-- .entry-content -->
  
</article><!-- #post-<?php the_ID(); ?> -->