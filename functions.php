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
			google: {
				families: [ \'Noto+Sans::latin\' ]
			}
		};
		(function() {
			var wf = document.createElement(\'script\');
			wf.src = (\'https:\' == document.location.protocol ? \'https\' : \'http\') +
			\'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js\';
			wf.type = \'text/javascript\';
			wf.async = \'true\';
			var s = document.getElementsByTagName(\'script\')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>' . "\n";
}
function theme_google_analytics() {
	include_once($_SERVER["DOCUMENT_ROOT"]."/static/analyticstracking.php");
	echo '' . "\n";
}
add_action( 'wp_head', 'theme_google_apikey' );
add_action( 'wp_head', 'theme_google_webfonts' );
add_action( 'wp_head', 'theme_google_analytics' );
?>