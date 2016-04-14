<?php
function theme_copyright($year = 'auto') {
  if(intval($year) == 'auto'){ $year = date('Y'); }
  if(intval($year) == date('Y')){ echo intval($year); }
  if(intval($year) < date('Y')){ echo intval($year) . '&#8211;' . date('Y'); }
  if(intval($year) > date('Y')){ echo date('Y'); }
}
function theme_google_apikey() {
  echo '<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAKEWwp97y-1K7E7cflJxsThSTNpMh0S8BPVhWd-YCqcVx8rMKGxQhtrSfnS-FxOzCdS4XvViAXBVtHQ"></script>' . "\n";
}
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
function theme_google_analytics() {
  include_once($_SERVER["DOCUMENT_ROOT"]."/static/analyticstracking.php");
  echo '' . "\n";
}
function theme_scroll_changes() {
echo '<script type="text/javascript">
  (function ($) {
    $(document).on(\'ready\', function() {
      $(window).on(\'resize\', function() {
        var mainbottom = $(\'hgroup\').offset().top + $(\'hgroup\').height();
        $(window).on(\'scroll\',function(){
          stop = Math.round($(window).scrollTop());
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
function theme_dequeue_fonts() {
  wp_dequeue_style( 'twentytwelve-fonts' );
}
function theme_cdn_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', 'https://code.jquery.com/jquery-1.12.3.min.js', true, null, true);
    wp_enqueue_script('jquery-core');
    wp_deregister_script('jquery-migrate');
    wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.4.0.min.js', true, null, true);
    wp_enqueue_script('jquery-migrate');
  }
}
function theme_remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}
function theme_cse() {
echo '<script type="text/javascript">
  (function ($) {
    var cse = \'<gcse:searchbox-only enableAutoComplete="true" resultsUrl="https://www.steffanick.com/search/"></gcse:searchbox-only>\'
    $(document).on(\'ready\', function() {
      $( "#gs-search-cse" ).click(function() {
        $.getScript( "https://www.steffanick.com/static/modules/cse/cse.js" )
        .done(function() {
          $( "#gs-search" ).html(cse);
          setTimeout(function() { $(\'input[name="search"]\').focus() }, 200);
        });
      });
    });
  }(jQuery));
  </script>' . "\n";
}
function theme_cdn_bootstrap() {
  wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', true, null, true);
  wp_enqueue_script('bootstrap-js');
}
function theme_cdn_google_code_prettify() {
  wp_register_script('google-code_prettify', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js', true, null, true);
  wp_enqueue_script('google-code_prettify');
}
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
add_filter( 'style_loader_src', 'theme_remove_cssjs_ver', 30, 2 );
add_filter( 'script_loader_src', 'theme_remove_cssjs_ver', 30, 2 );
add_filter( 'the_content', 'theme_code_esc_html' );

add_action( 'wp_enqueue_scripts', 'theme_cdn_jquery' );
add_action( 'wp_enqueue_scripts', 'theme_dequeue_fonts', 11 );
add_action( 'wp_enqueue_scripts', 'theme_cdn_bootstrap', 20 );
add_action( 'wp_enqueue_scripts', 'theme_cdn_google_code_prettify', 25 );
//add_action( 'wp_footer', 'theme_google_apikey' );
add_action( 'wp_footer', 'theme_google_webfonts' );
add_action( 'wp_footer', 'theme_google_analytics' );
add_action( 'wp_footer', 'theme_scroll_changes', 20 );
add_action( 'wp_footer', 'theme_cse', 20 );
?>