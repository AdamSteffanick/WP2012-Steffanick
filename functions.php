<?php
/* =Overwritten Functions
-------------------------------------------------------------- */
/* WP2012-S entry meta */
function twentytwelve_entry_meta() {
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

  // Translators: used between list items, there is a space after the comma.
  $tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

  // Translators: 1 is category and 2 is tag.

    if ( $tag_list ) {
      $utility_text = __(
        '<ul class="fa-ul">
          <li><span class="fa-li fa fa-folder-open" aria-hidden="true"></span><span>%1$s</span></li>
          <li><span class="fa-li fa fa-hashtag" aria-hidden="true"></span><span>%2$s</span></li>
        </ul>'
      , 'twentytwelve');
    } elseif ( $categories_list ) {
      $utility_text = __(
        '<ul class="fa-ul">
          <li><span class="fa-li fa fa-folder-open" aria-hidden="true"></span><span>%1$s</span></li>
        </ul>'
      , 'twentytwelve');
    } else {
      $utility_text = __('', 'twentytwelve');
    }

  printf(
    $utility_text,
    $categories_list,
    $tag_list,
    $permalink
  );
}
/* =Custom Functions and Hacks
-------------------------------------------------------------- */
/* add copyright year [yyyy-yyyy] */
function theme_copyright($year = 'auto') {
  if(intval($year) == 'auto'){ $year = date('Y'); }
  if(intval($year) == date('Y')){ echo intval($year); }
  if(intval($year) < date('Y')){ echo intval($year) . '–' . date('Y'); }
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
/* change schema.org search URL generated by Yoast SEO for use with Google Custom Search Engine, a Multisite Network, and SSL */
function theme_change_json_ld_search_url() {
  return network_home_url('/', 'https') . 'search/?q={search_term_string}';
}
/* remove unused WordPress features */
function theme_cleaner() {
  /* remove WordPress generator meta tag */
  remove_action('wp_head', 'wp_generator');
  add_filter('the_generator', '__return_false');
  /* remove Windows Live Writer support */
  remove_action('wp_head', 'wlwmanifest_link');
  /* remove RSD support */
  remove_action('wp_head', 'rsd_link');
  /* remove WordPress shortlink support */
  remove_action('wp_head', 'wp_shortlink_wp_head');
}
/* remove WordPress XMLRPC support */ //https://github.com/Wordpress-Development/bye-bye-pingback/blob/master/bye-bye-pingback.php
function theme_remove_xmlrpc() {
  /* Remove pingback from head (link rel="pingback") */
  if (!is_admin()) {
    function link_rel_buffer_callback($buffer) {
      $buffer = preg_replace('/(<link.*?rel=("|\')pingback("|\').*?href=("|\')(.*?)("|\')(.*?)?\/?>|<link.*?href=("|\')(.*?)("|\').*?rel=("|\')pingback("|\')(.*?)?\/?>)/i', '', $buffer);
      return $buffer;
    }
    function link_rel_buffer_start() {
      ob_start("link_rel_buffer_callback");
    }
    function link_rel_buffer_end() {
      ob_flush();
    }
    add_action('template_redirect', 'link_rel_buffer_start', -1);
    add_action('get_header', 'link_rel_buffer_start');
    add_action('wp_head', 'link_rel_buffer_end', 999);
  }
  /* Hijack pingback_url for get_bloginfo (<link rel="pingback" />) */
  add_filter('bloginfo_url', function($output, $property){
    return ($property == 'pingback_url') ? null : $output;
  }, 11, 2);
  add_filter( 'xmlrpc_enabled', '__return_false' ); // https://github.com/WordPress/WordPress/blob/77e365efbf2e499e2ed11d29c101ea466cf1ceed/wp-includes/class-wp-xmlrpc-server.php#L255
  add_filter( 'pre_update_option_enable_xmlrpc', '__return_false' );
  add_filter( 'pre_option_enable_xmlrpc', '__return_zero' ); // https://github.com/WordPress/WordPress/blob/77e365efbf2e499e2ed11d29c101ea466cf1ceed/wp-includes/class-wp-xmlrpc-server.php#L241
  add_filter( 'pings_open', '__return_false', 10, 2 );
  add_filter( 'rewrite_rules_array', function( $rules ) {
    foreach( $rules as $rule => $rewrite ) {
      if( preg_match( '/trackback\/\?\$$/i', $rule ) ) {
        unset( $rules[$rule] );
      }
    }
    return $rules;
  });
  /* Disable X-Pingback HTTP Header */
  add_filter('wp_headers', function($headers, $wp_query){
    if(isset($headers['X-Pingback'])){
      unset($headers['X-Pingback']);
    }
    return $headers;
  }, 11, 2);
  /* XML-RCP Methods */ // https://github.com/WordPress/WordPress/blob/77e365efbf2e499e2ed11d29c101ea466cf1ceed/wp-includes/class-wp-xmlrpc-server.php#L170
  add_filter( 'xmlrpc_methods', function($methods){
    unset( $methods['pingback.ping'] );
    unset( $methods['pingback.extensions.getPingbacks'] );
    unset( $methods['wp.getUsersBlogs'] ); // Block brute force discovery of existing users
    unset( $methods['system.multicall'] );
    unset( $methods['system.listMethods'] );
    unset( $methods['system.getCapabilities'] );
    return $methods;
  });
}
/* remove WordPress emoji features */ //https://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
function theme_remove_emoji() {
  /* all actions related to emojis */
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  /* remove TinyMCE emoji */
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  /* remove emoji DNS prefetch */
  add_filter( 'emoji_svg_url', '__return_false' );
}
/* remove WordPress Gutenberg features */ //https://stackoverflow.com/questions/52277629/remove-gutenberg-css
function theme_remove_gutenberg() {
  /* all actions related to Gutenberg */
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}
function theme_remove_gutenberg_2012() {
  /* all actions related to Gutenberg for Twentytwelve */
  wp_deregister_style('twentytwelve-block-style');
  wp_deregister_style('twentytwelve-block-editor-style');
}
/* remove support for older versions of Internet Explorer */
function theme_remove_old_ie_support() {
  /* remove ie.css */
  wp_deregister_style('twentytwelve-ie');
}
/* remove ID attribute from stylesheets */
function theme_remove_style_id($link) {
  return preg_replace("/id='.*-css'/", '', $link);
}
/* =CSS Functions
-------------------------------------------------------------- */
/* load bootstrap.css and prettify.css before style.css */
function theme_style() {
  /* register/enqueue Font Awesome and the v4-shim CSS */
  wp_enqueue_style('fontawesome', 'https://www.steffanick.com/static/modules/fontawesome/5.8.2/css/all.css', '', null, 'all');
  wp_enqueue_style('fontawesome_v4-shim', 'https://www.steffanick.com/static/modules/fontawesome/5.8.2/css/v4-shims.css', '', null, 'all');
  /* enqueue Bootstrap CSS */
  wp_enqueue_style('bootstrap', 'https://www.steffanick.com/static/modules/bootstrap/3.4.1/css/bootstrap.css', '', null, 'all');
  /* register/enqueue Google Code Prettify CSS with Bootstrap dependency */
  wp_enqueue_style('google-code_prettify', 'https://www.steffanick.com/static/modules/prettify/b5fa4d1/prettify.css', 'bootstrap', null, 'all');
  /* remove style.css */
  wp_deregister_style('twentytwelve-style');
  /* register/enqueue style.css with Google Code Prettify dependency */
  wp_enqueue_style('twentytwelve-style', network_home_url('/', 'https') . 'wordpress/wp-content/themes/' . strtolower(wp_get_theme()) .'/style.css', 'google-code_prettify', null, all);
}
/* remove the Open Sans font */
function theme_remove_open_sans() {
  wp_deregister_style('twentytwelve-fonts');
}
/* add classes to Gravatar */
function theme_add_gravatar_class($class) {
  $class = str_replace("class='avatar", "class='avatar media-object", $class);
  return $class;
}
/* =JavaScript Functions
-------------------------------------------------------------- */
/* load jQuery, Bootstrap, navigation.js, scroll-affix.js and Google Code Prettify; remove jQuery Migrate */
function theme_javascript() {
  /* load jQuery via a CDN unless logged in as an administrator */
  if (!is_admin()) {
    /* remove local jQuery JavaScript */
    wp_deregister_script('jquery-core');
    /* register/enqueue jQuery slim JavaScript before </body> */
    wp_enqueue_script('jquery-core', 'https://www.steffanick.com/static/modules/jquery/jquery-3.4.1.slim.js', '', null, true);
    /* remove jQuery Migrate */
    wp_deregister_script('jquery-migrate');
    /* remove wp-embed.min.js */
    wp_deregister_script('wp-embed');
  }
  /* register/enqueue Bootstrap JavaScript with jQuery dependency before </body> */
  wp_enqueue_script('bootstrap', 'https://www.steffanick.com/static/modules/bootstrap/3.4.1/js/bootstrap.js', 'jquery-core', null, true);
  /* register/enqueue navigation.js with jQuery dependency before </body> */
  wp_enqueue_script('twentytwelve-navigation', network_home_url('/', 'https') . 'wordpress/wp-content/themes/twentytwelve/js/navigation.js', 'jquery-core', null, true);
  /* register/enqueue scroll-affix.js with jQuery dependency before </body> */
  wp_enqueue_script('scroll-affix', network_home_url('/', 'https') . 'wordpress/wp-content/themes/' . strtolower(wp_get_theme()) .'/js/scroll-affix.js', 'jquery-core', null, true);
  /* register/enqueue prettyprint.js with jQuery dependency before </body> */
  wp_enqueue_script('prettyprint', 'https://www.steffanick.com/static/modules/prettify/prettyprint.js', 'jquery-core', null, true);
  /* register/enqueue Google Code Prettify JavaScript with prettyprint.js dependency before </body> */
  wp_enqueue_script('google-code_prettify', 'https://www.steffanick.com/static/modules/prettify/b5fa4d1/prettify.js', 'prettyprint', null, true);
  wp_enqueue_script('google-code_prettify-xq', 'https://www.steffanick.com/static/modules/prettify/b5fa4d1/lang-xq.js', 'google-code_prettify', null, true);
}
/* include Google Analytics */
function theme_google_analytics() {
  include_once($_SERVER["DOCUMENT_ROOT"]."/static/analyticstracking.php");
}
/* =Filters and Actions
-------------------------------------------------------------- */
/* NOTE: default priority = 10 */

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_filter('the_content', 'theme_code_esc_html', 1);
add_filter('wpseo_json_ld_search_url', 'theme_change_json_ld_search_url');
add_filter('style_loader_tag' , 'theme_remove_style_id');
add_filter('get_avatar' , 'theme_add_gravatar_class');
add_filter('wp_calculate_image_srcset_meta', '__return_null'); //http://wordpress.stackexchange.com/questions/211375/how-do-i-disable-responsive-images-in-wp-4-4

add_action('wp_enqueue_scripts', 'theme_style');
add_action('wp_enqueue_scripts', 'theme_remove_open_sans', 11);
add_action('wp_enqueue_scripts', 'theme_remove_old_ie_support', 11);
add_action('wp_enqueue_scripts', 'theme_javascript');

add_action('init', 'theme_remove_emoji' );

add_filter('use_block_editor_for_post_type', '__return_false');
add_action('wp_print_styles', 'theme_remove_gutenberg');
add_action('wp_enqueue_scripts', 'theme_remove_gutenberg_2012', 11);

add_action('after_setup_theme', 'theme_cleaner');
add_action('after_setup_theme', 'theme_remove_xmlrpc');

remove_action( 'wp_head', 'wp_resource_hints', 2 ); //remove WP 4.9+ DNS Prefetching
add_action('wp_footer', 'theme_google_analytics');
?>