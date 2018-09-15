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
              <li><a href="/">ホーム</a></li>
              <li <?php if (get_post_type() == 'contact' OR is_page('contact')) echo 'class="current-menu-item"' ; ?>><a href="<?php echo site_url('/contact'); ?>">コンタクト</a></li>
              <li <?php if (get_post_type() == 'recruitment' OR is_page('recruitment')) echo 'class="current-menu-item"' ; ?>><a href="<?php echo site_url('/recruitment'); ?>">リクルート</a></li>
              <li <?php if (get_post_type() == 'burmese-lessons' OR is_page('burmese-lessons')) echo 'class="current-menu-item"' ; ?>><a href="<?php echo site_url('/burmese-lessons'); ?>">ミャンマー語レッスン</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
