<?php
/* =Custom Functions
-------------------------------------------------------------- */
/* add copyright year [yyyy-yyyy] */
function theme_copyright($year = 'auto') {
  if(intval($year) == 'auto'){ $year = date('Y'); }
  if(intval($year) == date('Y')){ echo intval($year); }
  if(intval($year) < date('Y')){ echo intval($year) . '&#8211;' . date('Y'); }
  if(intval($year) > date('Y')){ echo date('Y'); }
}
/* escape HTML entities in <code> tags */
function theme_code_esc_html($content) {
  return preg_replace_callback(
    '#(<code.*?>)(.*?)(</code>)#imsu',
    create_function(
      '$i',
      'return $i[1].esc_html($i[2]).$i[3];'
    ),
    $content
  );
}
/* Google WebFont */
function theme_google_webfonts() {
  echo '<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ \'Noto+Sans:400,400italic,700,700italic:latin,latin-ext\' ] }
  };
  (function() {
    var wf = document.createElement(\'script\');
    wf.src = \'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js\';
    wf.type = \'text/javascript\';
    wf.async = \'true\';
    var s = document.getElementsByTagName(\'script\')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>' . "\n";
}
/* =CSS Functions
-------------------------------------------------------------- */
/* load bootstrap.min.css before style.css */
function theme_style() {
  /* enqueue Bootstrap CSS via a CDN */
  wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', '', null, 'all');
  /* remove style.css */
  wp_deregister_style('twentytwelve-style');
  /* register/enqueue style.css with Bootstrap dependency */
  wp_enqueue_style('twentytwelve-style', get_stylesheet_directory_uri() . '/style.css', 'bootstrap-css', null, all);
}
/* remove the Open Sans font */
function theme_remove_open_sans() {
  wp_deregister_style( 'twentytwelve-fonts' );
}
/* =JavaScript Functions
-------------------------------------------------------------- */
/* load jquery.min.js, bootstrap.min.js via a CDN and remove jQuery Migrate */
function theme_javascript() {
  /* load jQuery via a CDN unless logged in as an administrator */
  if (!is_admin()) {
    /* remove local jQuery JavaScript */
    wp_deregister_script('jquery-core');
    /* register/enqueue jQuery JavaScript via a CDN in the <head> */
    wp_enqueue_script('jquery-core', 'https://code.jquery.com/jquery-1.12.0.min.js', '', null, false);
    /* remove jQuery Migrate */
    wp_deregister_script('jquery-migrate');
  }
  /* register/enqueue Bootstrap JavaScript via a CDN with jQuery dependency before </body> */
  wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', 'jquery-core', null, true);
  /* register/enqueue navigation.js with jQuery dependency before </body> */
  wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/navigation.js', 'jquery-core', null, true );
  /* register/enqueue Google Code Prettify JavaScript via a CDN before </body> */
  wp_enqueue_script('google-code_prettify', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js', '', null, true);
}

/* include Google Analytics */
function theme_google_analytics() {
  include_once($_SERVER["DOCUMENT_ROOT"]."/static/analyticstracking.php");
}
/* echo scroll changes */
function theme_scroll_changes() {
echo '<script type="text/javascript">
  (function ($) {
    $(document).on(\'ready\', function() {
      $(window).on(\'resize\', function() {
        var mainbottom = $(\'hgroup\').offset().top + $(\'hgroup\').height();
        $(window).on(\'scroll\',function(){
          var stop = Math.round($(window).scrollTop());
          if (stop > mainbottom) {
            $(\'.main-navigation\').addClass(\'past-hgroup\');
            $(\'#main\').addClass(\'past-hgroup\');
          } else {
            $(\'.main-navigation\').removeClass(\'past-hgroup\');
            $(\'#main\').removeClass(\'past-hgroup\');
          }
        });
      }).trigger(\'resize\');
    });
  }(jQuery));
  </script>' . "\n";
}
/* =Filters and Actions
-------------------------------------------------------------- */
/* NOTE: default priority = 10 */

add_filter( 'the_content', 'theme_code_esc_html' );

add_action( 'wp_enqueue_scripts', 'theme_style' );
add_action( 'wp_enqueue_scripts', 'theme_remove_open_sans', 11 );

add_action( 'wp_enqueue_scripts', 'theme_javascript' );

add_action( 'wp_footer', 'theme_google_webfonts' );
add_action( 'wp_footer', 'theme_google_analytics' );
add_action( 'wp_footer', 'theme_scroll_changes', 20 );
?>