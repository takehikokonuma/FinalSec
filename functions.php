<?php

function wordcrews_files() {
  wp_enqueue_script('main-wordcrews-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('wordcrews_main_styles', get_stylesheet_uri(), NULL);
  wp_enqueue_script("bootstrap_js", "//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js");
  wp_enqueue_style("bootstrap_css", "//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
  wp_enqueue_style('main-style', get_stylesheet_uri() );


}

add_action('wp_enqueue_scripts', 'wordcrews_files');

/* これで、タグにタイトルが表示される*/
function wordcrews_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wordcrews_features');

function wordcrews_adjust_queries($query) {
 if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
   $today = date('Ymd');
   $query->set('meta_key', 'event_date');
   $query->set('orderby', 'meta_value_num');
   $query->set('order', 'ASC');
   $query->set('meta_query', array(
     array(
       'key' => 'event_date',
       'compare' => '>=',
       'value' => $today,
       'type' => 'numeric'
     )
   ));
 }
}
add_action('pre_get_posts', 'wordcrews_adjust_queries');
