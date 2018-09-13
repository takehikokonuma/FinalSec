<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/add/font-awesome/css/font-awesome.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Wordcrews</strong></a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">

  <!--  WPモードでヘッダーをいじりたい時はここをいじる
          <?php
          wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          ));
          ?>
        -->
          <ul class="min-list group">
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 13) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">サービス</a></li>
              <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ; ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
