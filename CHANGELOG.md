# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [0.11.2] - 2019-05-24
### Added
* `@font-face` rules for Noto Sans, Noto Sans Bold, Noto Sans Italic, & Noto Sans Bold Italic → [style.css]
* `@font-face` `font-display` rules for Geneva, FreeSerif, Noto Mono, Noto Sans, & Noto Serif → [style.css]
* [Font Awesome] brands.js, fontawesome.js, solid.js, & v4-shim JS → `theme_javascript()` ([functions.php])

### Changed
* `.widget-area .textwidget li` `margin-left` → `0` ([style.css])
* [Font Awesome] → 5.8.2 ([functions.php])
* [Font Awesome] using CSS → using JS ([functions.php])
* [Google Code Prettify] → b5fa4d1 ([functions.php])
* [jQuery] → 3.4.1 slim ([functions.php])

### Removed
* [Bootstrap] CDN ([functions.php])
* [Google Code Prettify] CDN ([functions.php])
* Noto Sans ([functions.php])
* prettyprint.js
* [jQuery] CDN ([functions.php])
* `theme_add_style_property()` ([functions.php])
* `theme_webfonts()` ([functions.php])
* [Web Font Loader] ([functions.php])
* webfonts.js
* [WordPress] DNS Prefetching ([functions.php])

## [0.11.1] - 2019-05-02
### Added
* `theme_remove_gutenberg_2012()` ([functions.php])

## [0.11.0] - 2019-05-01
### Added
* `theme_remove_gutenberg()` ([functions.php])

### Changed
* [Bootstrap] CSS → 3.4.1 ([functions.php])
* [Bootstrap] JS → 3.4.1 ([functions.php])
* [jQuery] → 3.4.0 ([functions.php])
* [WordPress] Twenty Twelve → 2.9 ([style.css])

### Removed
* [WordPress] Gutenberg features ([functions.php])

## [0.10.2] - 2018-06-13
### Added
* `@font-face` rules for FreeSerif → [style.css]
* FreeSerif → webfonts.js

### Changed
* `.ipa` style `"Noto Serif", "Times New Roman", "Noto Sans Symbols", "Geneva"` → `"Noto Serif", "FreeSerif", "Geneva"` ([style.css])

### Removed
* `@font-face` rules for Noto Sans Symbols → [style.css]
* Noto Sans Symbols → webfonts.js

## [0.10.1] - 2018-06-08
### Added
* prettyprint.js
* [Google Code Prettify] prettify.min.css CDN ([functions.php])
* [Google Code Prettify] lang-xq.min.js CDN ([functions.php])
* [Google Code Prettify] prettify.min.js CDN ([functions.php])

### Changed
* [Bootstrap] CDN → [CDNJS] ([functions.php])
* [Font Awesome] CDN → [CDNJS] ([functions.php])
* [Google Code Prettify] → r298 ([functions.php])
* [Google Code Prettify] CDN → [CDNJS] ([functions.php])
* [jQuery] CDN → [CDNJS] ([functions.php])
* [Web Font Loader] → 1.6.28 ([functions.php])
* [Web Font Loader] CDN → [CDNJS] ([functions.php])

### Removed
* [Google Code Prettify] run_prettify.js ([functions.php])

## [0.10.0] - 2018-06-05
### Added
* `theme_remove_xmlrpc()` ([functions.php])

### Changed
* [Bootstrap] CSS URI ([functions.php])
* [Bootstrap] JS URI ([functions.php])
* [Font Awesome] CSS URI ([functions.php])
* [jQuery] → 3.3.1 ([functions.php])
* [WordPress] Twenty Twelve → 2.5 ([style.css])

### Removed
* [WordPress] XMLRPC support ([functions.php])

## [0.9.1] - 2017-10-09
### Added
* `@font-face` rules for Geneva, Noto Mono, Noto Sans Symbols, & Noto Serif → [style.css]
* Geneva → webfonts.js
* Noto Mono → webfonts.js
* Noto Sans Symbols → webfonts.js

### Changed
* [Google Fonts] Noto Serif → Noto Serif webfonts.js

## [0.9.0] - 2017-10-06
### Added
* `.ipa` style ([style.css])
* [Google Fonts] Noto Serif → webfonts.js
* [International Phonetic Alphabet] symbols support ([functions.php], [style.css], & webfonts.js)
* `theme_remove_emoji()` ([functions.php])
* [Web Font Loader] 1.6.26 JS CDN ([functions.php])
* webfonts.js

### Changed
* [jQuery] → 3.2.1 ([functions.php])
* [WordPress] Twenty Twelve → 2.3 ([style.css])

### Fixed
* [WordPress] `wpautop()` closing `<p>` elements ([functions.php])

### Removed
* [WordPress] emoji features ([functions.php])

## [0.8.4] - 2017-03-25
### Added
* blog archives recent entries ([archives.php])
* blog entry featured image → link to blog entry ([content.php])
* blog entry title → blog entry featured image `alt` & `title` attributes ([content.php])
* [schema.org] `image` microdata → blog entry featured image ([content.php])
* `the_post_thumbnail()` [mod_pagespeed] optimization → blog entry featured image ([content.php])

### Changed
* blog archives lists → [Bootstrap] panels ([archives.php])
* blog archives tag cloud → tag list ([archives.php])
* blog entries → [Bootstrap] panels ([content.php])
* blog entry featured image → below `.entry-header` ([content.php])
* blog entry featured image → conditional ([content.php])
* byline & dateline → `<small>` ([content.php])
* theme `line-height` & margins → lists, headers, & `<pre>` ([style.css])

### Removed
* [WordPress] responsive images ([functions.php])

## [0.8.3] - 2017-03-14
### Added
* `.entry-header .entry-title` transition ([style.css])
* `theme_add_gravatar_class()` ([functions.php])

### Changed
* `.author-avatar img` → circular ([style.css])
* `.entry-header .entry-title`, `.archive-title`, `.page-title`, & `.widget-title` style ([style.css])
* blog entries author information → [Bootstrap] media object ([content.php])
* [Font Awesome] category icon → `twentytwelve_entry_meta()` ([functions.php])
* tagline → conditional ([header.php])
* theme footer `<p>` → `<small>` ([footer.php])
* theme header style ([style.css])
* theme `line-height` → `2` ([style.css])
* theme margins → `1rem` below elements ([style.css])

### Fixed
* [Font Awesome] list icon positioning ([style.css])

## [0.8.2] - 2017-03-10
### Added
* author information → blog entries `<footer>` ([content.php])
* [Font Awesome] icons → `twentytwelve_entry_meta()` ([functions.php])
* “Proudly Powered By [WordPress]” → [Font Awesome] icon ([footer.php])
* [schema.org] `copyrightHolder` & `copyrightYear` microdata → blog entries ([content.php])
* `twentytwelve_entry_meta()` ([functions.php])
* `twentytwelve_entry_meta()` [microformats.org] author & time microdata → blog entries ([content.php])

### Changed
* `footer.entry-meta` style ([style.css])
* author information style ([style.css])
* blog entries [schema.org] `dateModified` microdata → `get_the_modified_date('c');` with relative timestamp ([content.php])
* blog time zone → UTC
* relative theme name → paths to theme files ([functions.php])

### Fixed
* blog entries [microformats.org] `updated` microdata errors

## [0.8.1] - 2017-03-03
### Added
* [schema.org] `image` → blog entries ([content.php])
* [schema.org] `publisher` → blog entries ([content.php])

### Changed
* blog entries byline `<time>` [schema.org] `dateCreated` microdata → `datePublished` ([content.php])
* [schema.org] `dateCreated` → blog entries byline `<meta>` ([content.php])

### Fixed
* [schema.org] `BlogPosting` microdata errors

## [0.8.0] - 2017-03-02
### Added
* `.entry-byline-dateline` ([style.css])
* byline & dateline → blog entries ([content.php])
* [content.php]
* [schema.org] `BlogPosting` microdata → blog entries ([content.php])

### Changed
* display author information → single-author blogs ([content.php])
* [Google Fonts] CSS URI ([functions.php])
* [jQuery] → 3.1.1 ([functions.php])
* tagline as `<small>` element → Site Title ([header.php])
* [WordPress] Twenty Twelve → 2.2 ([style.css])

## [0.7.4] - 2017-02-27
### Added
* [CHANGELOG.md]
* [shields.io] version info ([README.md])

### Changed
* [Bootstrap] CSS → 3.3.7 ([functions.php])
* [Bootstrap] JS → 3.3.7 ([functions.php])
* [Font Awesome] → 4.7.0 ([functions.php])
* [jQuery] → 2.2.4 ([functions.php])
* [README.md] changelog → [CHANGELOG.md]
* theme name → WP2012-S ([style.css])
* URI ([functions.php], [README.md] & [style.css])

## [0.7.3] - 2017-02-23
### Added
* [CSS3 Validator] link ([footer.php])
* download latest release ([README.md])
* favicon support ([header.php])

### Changed
* changelog ([README.md])
* `<code>` element ([style.css])
* [Google Code Prettify] design ([style.css])
* URI ([README.md] & [style.css])
* [WordPress] Emoji JS → footer ([functions.php])

### Removed
* [browser-update.org] JS ([functions.php])
* enequeue _addtoany.min.css_ ([functions.php])

## [0.7.2] - 2016-04-28
### Added
* `#site-title` & `#colophon` for HTML5 fixes ([style.css])
* `theme_add_style_property()` ([functions.php])
* [HTML5 Validator] link ([footer.php])

### Changed
* [Font Awesome] → footer ([functions.php])
* `theme_google_webfonts()` → `theme_webfonts` ([functions.php])
* HTML5 header elements ([scroll-affix.js])

### Fixed
* HTML5 warnings & errors ([footer.php], [header.php], & [searchform.php])

## [0.7.1] - 2016-04-27
### Added
* `.scroll-affix` ([style.css])
* [/js/]
* [/widgets/]
* [connect.html] (text widget)
* [scroll-affix.js]

### Changed
* [jQuery] → 2.2.3 ([functions.php])
* refactored scroll changes ([scroll-affix.js])
* scroll changes ([scroll-affix.js])

### Removed
* `.past-hgroup` ([style.css])
* `theme_scroll_changes()` ([functions.php])

### Fixed
* scroll changes `$(document).on('ready', function() {` → `$(document).ready(function() {` ([scroll-affix.js])

## [0.7.0] - 2016-04-25
### Added
* [header.php]
* [browser-update.org] JS ([functions.php])
* [Font Awesome] 4.6.1 CSS CDN ([functions.php])

### Changed
* search icon ([searchform.php])
* [jQuery] → 2.1.4 ([functions.php])
* all files → UTF-8

### Removed
* support for older versions of Internet Explorer ([header.php])

## [0.6.7] - 2016-04-22
### Added
* enequeue _addtoany.min.css_ ([functions.php])

### Changed
* [Google Fonts] method ~~JS~~ → CSS ([functions.php])

### Removed
* stylesheet ID attributes ([functions.php])
* support for older versions of Internet Explorer ([functions.php])
* support for older versions of Internet Explorer ([functions.php])

### Fixed
* local theme CSS & JS → use Multisite network home URL ([functions.php])

## [0.6.6] - 2016-04-21
### Changed
* Yoast SEO [schema.org] search URL → use [Google Custom Search Engine] & Multisite network ([functions.php])

### Removed
* RSD support ([functions.php])
* Windows Live Writer support ([functions.php])
* [WordPress] shortlink support ([functions.php])
* [WordPress] generator information ([functions.php])

## [0.6.5] - 2016-04-21
### Changed
* [jQuery] → 1.12.0 for scroll changes ([functions.php])

## [0.6.4] - 2016-04-20
### Changed
* refactored [functions.php]

## [0.6.3] - 2016-04-20
### Added
* [Bootstrap] 3.3.6 CSS CDN ([functions.php])
* [Bootstrap] CSS → dependency of theme CSS ([functions.php])
* enqueue [WordPress] Twenty Twelve _navigation.js_ ([functions.php])

### Changed
* search button style ([style.css])

### Removed
* [Bootstrap] 3.3.6 CSS ([style.css])
* [jQuery] Migrate 1.4.0 ([functions.php])
* lazy loading → [Google Custom Search Engine] ([functions.php] & [searchform.php])

## [0.6.2] - 2016-04-13
### Added
* [WordPress] Twenty Twelve 2.0 ([style.css])

### Changed
* [jQuery] → 1.12.3 ([functions.php])
* [jQuery] CDN ([functions.php])
* [jQuery] Migrate → 1.4.0 ([functions.php])

## [0.6.1] - 2016-04-09
### Added
* SSL footer link ([footer.php])
* SSL lazy loading → [Google Custom Search Engine] ([functions.php])

## [0.6.0] - 2016-04-08
### Added
* escape HTML in `<code>` elements ([functions.php])
* [Google Code Prettify] JS CDN ([functions.php])
* [Google Code Prettify] line numbers ([style.css])

## [0.5.0] - 2016-03-31
### Added
* [Bootstrap] 3.3.6 CSS ([style.css])
* [Bootstrap] 3.3.6 Glyphicons CDN ([style.css])
* [Bootstrap] 3.3.6 JS CDN ([functions.php])
* [jQuery] CDN ([functions.php])
* lazy loading → [Google Custom Search Engine] ([functions.php])
* RSS blog archives ([archives.php])
* `setTimeout` focus → search ([functions.php])

### Changed
* font JS ([functions.php])
* lazy loading → [Google Custom Search Engine] ([searchform.php])

### Removed
* `@import` ([style.css])
* monthly blog archives ([archives.php])
* Open Sans ([functions.php])
* version information → .css & .js files ([functions.php])

## [0.4.1] - 2016-02-10
### Added
* `.site-header h1` transition ([style.css])

### Changed
* `font-family` ([style.css])

## [0.4.0] - 2016-02-06
### Added
* scroll changes ([functions.php] & [style.css])

## [0.3.1] - 2016-02-06
### Changed
* [Google Analytics], [Google API Key], & [Google Fonts] JS → footer ([functions.php])

## [0.3.0] - 2015-07-25
### Added
* theme files → GitHub

### Changed
* theme name → WP2012-Steffanick ([style.css])
* URI ([README.md] & [style.css])

## [0.2.0] - 2015-07-25
### Added
* [404.php]
* theme copyright ([footer.php])
* ease transitions → links & header ([style.css])
* [footer.php]
* [functions.php]
* [Google Analytics] ([functions.php])
* [Google API Key] ([functions.php])
* [Google Custom Search Engine] ([searchform.php])
* [Google Fonts] ([functions.php])
* [searchform.php]
* sticky footer ([style.css])
* theme colours ([style.css])
* theme layout ([style.css])

### Removed
* “Proudly Powered By [WordPress]” ([footer.php])

## [0.1.0] - 2015-07-19
### Added
* [style.css]

## [Initial commit]
### Added
* [LISENCE]
* [README.md]

[Unreleased]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.11.2...HEAD
[0.11.2]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.11.1...v0.11.2
[0.11.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.11.0...v0.11.1
[0.11.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.10.2...v0.11.0
[0.10.2]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.10.1...v0.10.2
[0.10.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.10.0...v0.10.1
[0.10.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.9.1...v0.10.0
[0.9.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.9.0...v0.9.1
[0.9.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.8.4...v0.9.0
[0.8.4]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.8.3...v0.8.4
[0.8.3]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.8.2...v0.8.3
[0.8.2]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.8.1...v0.8.2
[0.8.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.8.0...v0.8.1
[0.8.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.4...v0.8.0
[0.7.4]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.3...v0.7.4
[0.7.3]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.2...v0.7.3
[0.7.2]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.1...v0.7.2
[0.7.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.0...v0.7.1
[0.7.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.7...v0.7.0
[0.6.7]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.6...v0.6.7
[0.6.6]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.5...v0.6.6
[0.6.5]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.4...v0.6.5
[0.6.4]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.3...v0.6.4
[0.6.3]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.2...v0.6.3
[0.6.2]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.1...v0.6.2
[0.6.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.6.0...v0.6.1
[0.6.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.5.0...v0.6.0
[0.5.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.4.1...v0.5.0
[0.4.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.4.0...v0.4.1
[0.4.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.3.1...v0.4.0
[0.3.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.3.0...v0.3.1
[0.3.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/AdamSteffanick/wp2012-s/compare/c87ee07...v0.1.0
[Initial commit]: https://github.com/AdamSteffanick/wp2012-s/commit/c87ee07783b4605ce4214ebd08372816cd3c41fa
[/widgets/]: ./widgets/
[/js/]: ./js/
[404.php]: ./404.php
[archives.php]: ./archives.php
[CHANGELOG.md]: ./CHANGELOG.md
[connect.html]: ./connect.html
[content.php]: ./content.php
[header.php]: ./header.php
[footer.php]: ./footer.php
[functions.php]: ./functions.php
[LISENCE]: https://github.com/AdamSteffanick/wp2012-s/blob/master/LICENSE
[README.md]: ./README.md
[scroll-affix.js]: ./js/scroll-affix.js
[searchform.php]: ./searchform.php
[style.css]: ./style.css

[Bootstrap]: http://getbootstrap.com/
[browser-update.org]: http://browser-update.org/
[CDNJS]: https://cdnjs.com/
[CSS3 Validator]: https://jigsaw.w3.org/css-validator/
[Font Awesome]: http://fontawesome.io/
[Google Analytics]: https://www.google.com/analytics/
[Google API Key]: https://console.developers.google.com/
[Google Code Prettify]: https://github.com/google/code-prettify
[Google Custom Search Engine]: https://developers.google.com/custom-search/
[Google Fonts]: https://fonts.google.com/
[HTML5 Validator]: https://validator.w3.org/nu/
[International Phonetic Alphabet]: https://www.internationalphoneticassociation.org/content/ipa-chart
[jQuery]: https://jquery.com/
[microformats.org]: http://microformats.org/
[mod_pagespeed]: https://www.modpagespeed.com/
[schema.org]: https://schema.org/
[shields.io]: http://shields.io/
[Web Font Loader]: https://github.com/typekit/webfontloader
[WordPress]: https://wordpress.org/