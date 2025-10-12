<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/base.css">

  <?php if (is_front_page() || is_home()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
  <?php endif; ?>

  <?php if (is_category()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css">
  <?php endif; ?>

  <?php if (is_search()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css">
  <?php endif; ?>

  <?php if (is_single()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/post.css">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header id="masthead" class="site-header">
      <div class="wc-header--flex">
        <div class="wc-header-hamburguer">
          <button>
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_627_327)">
                <path
                  d="M23.2217 11.1002H1.22168C0.669395 11.1002 0.22168 11.548 0.22168 12.1002C0.22168 12.6525 0.669395 13.1002 1.22168 13.1002H23.2217C23.774 13.1002 24.2217 12.6525 24.2217 12.1002C24.2217 11.548 23.774 11.1002 23.2217 11.1002Z"
                  fill="white" />
                <path
                  d="M23.2217 4.10085H1.22168C0.669395 4.10085 0.22168 4.54856 0.22168 5.10084C0.22168 5.65313 0.669395 6.10084 1.22168 6.10084H23.2217C23.774 6.10084 24.2217 5.65313 24.2217 5.10084C24.2217 4.54856 23.774 4.10085 23.2217 4.10085Z"
                  fill="white" />
                <path
                  d="M23.2217 18.1005H1.22168C0.669395 18.1005 0.22168 18.5483 0.22168 19.1005C0.22168 19.6528 0.669395 20.1006 1.22168 20.1006H23.2217C23.774 20.1006 24.2217 19.6528 24.2217 19.1005C24.2217 18.5483 23.774 18.1005 23.2217 18.1005Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_627_327">
                  <rect width="24" height="24" fill="white" transform="translate(0.22168 0.10054)" />
                </clipPath>
              </defs>
            </svg>

          </button>
        </div>
        <div class="site-branding">
          <?php
          the_custom_logo();
          if (is_front_page() && is_home()):
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
          else:
            ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                rel="home"><?php bloginfo('name'); ?></a></p>
          <?php endif; ?>
        </div><!-- .site-branding -->
      </div>

      <div class="wc-header-flex">
        <nav class="wc-header-nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id' => 'primary-menu',
            )
          );
          ?>
        </nav><!-- #site-navigation -->

        <div class="wc-header-search">
          <?php dynamic_sidebar('busca'); ?>
        </div>
      </div>
    </header><!-- #masthead -->

    <div class="wc-menu-mobile">
      <div class="wc-menu-mobile-nav__container">
        <span>Navegação</span>

        <nav class="wc-menu-nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-2',
              'menu_id' => 'menu-navegacao',
            )
          );
          ?>
        </nav>

        <span>Categorias</span>

        <nav class="wc-menu-nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-3',
              'menu_id' => 'menu-navegacao',
            )
          );
          ?>
        </nav>
      </div>
    </div>