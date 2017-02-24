# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added
* /_CHANGELOG.md_
* shields.io version info (/_README.md_)

### Changed
* /_README.md_ changelog → /_CHANGELOG.md_
* theme name → WP2012-S (./_style.css_)

## [0.7.3] - 2017-02-23
### Added
* CSS3 Validator link (/_footer.php_)
* download latest release (/_README.md_)
* favicon support (/_header.php_)

### Changed
* changelog (/_README.md_)
* `<code>` element (/_style.css_)
* Google Code Prettify (/_style.css_)
* URI (/_README.md_ & /_style.css_)
* WordPress Emoji JavaScript → footer (/_functions.php_)

### Removed
* browser-update.org JavaScript (/_functions.php_)
* enequeue _addtoany.min.css_ (/_functions.php_)

## [0.7.2] - 2016-04-28
### Added
* function `theme_add_style_property` (/_functions.php_)
* HTML5 Validator link (/_footer.php_)
* `#site-title` & `#colophon` for HTML5 fixes (/_style.css_)

### Changed
* function `theme_google_webfonts` → `theme_webfonts` (/_functions.php_)
* Font Awesome → footer (/_functions.php_)
* HTML5 header elements (/js/_scroll-affix.js_)

### Fixed
* HTML5 warnings & errors (/_footer.php_, /_header.php_, & /_searchform.php_)

## [0.7.1] - 2016-04-27
### Added
* /widgets/
* /widgets/_connect.html_ (text widget)
* /js/
* /js/_scroll-affix.js_
* `.scroll-affix` (/_style.css_)

### Changed
* jQuery → 2.2.3 (/_functions.php_)
* refactored scroll changes (/js/_scroll-affix.js_)
* scroll changes (/js/_scroll-affix.js_)

### Removed
* `.past-hgroup` (style.css)
* function `theme_scroll_changes` (/_functions.php_)


### Fixed
* scroll changes `$(document).on('ready', function() {` → `$(document).ready(function() {` (/js/_scroll-affix.js_)

## [0.7.0] - 2016-04-25
### Added
* /header.php
* browser-update.org JavaScript (/_functions.php_)
* Font Awesome 4.6.1 CSS CDN (/_functions.php_)

### Changed
* search icon (/_searchform.php_)
* jQuery → 2.1.4 (/_functions.php_)
* all files → UTF-8

### Removed
* support for older versions of Internet Explorer (/_header.php_)

## [0.6.7] - 2016-04-22
### Added
* enequeue _addtoany.min.css_ (/_functions.php_)

### Changed
* Google Webfont method ~~JavaScript~~ → CSS (/_functions.php_)

### Removed
* stylesheet ID attributes (/_functions.php_)
* support for older versions of Internet Explorer (/_functions.php_)
* support for older versions of Internet Explorer (/_functions.php_)

### Fixed
* local theme CSS & JavaScript → use Multisite network home URL (/_functions.php_)

## [0.6.6] - 2016-04-21
### Changed
* Yoast SEO schema.org search URL → use Google Custom Search Engine & Multisite network (/_functions.php_)

### Removed
* RSD support (/_functions.php_)
* Windows Live Writer support (/_functions.php_)
* WordPress shortlink support (/_functions.php_)
* WordPress generator information (/_functions.php_)

## [0.6.5] - 2016-04-21
### Changed
* jQuery → 1.12.0 for scroll changes (/_functions.php_)

## [0.6.4] - 2016-04-20
### Changed
* refactored /_functions.php_

## [0.6.3] - 2016-04-20
### Added
* Bootstrap 3.3.6 CSS CDN (/_functions.php_)
* Bootstrap CSS → dependency of theme CSS (/_functions.php_)
* enqueue Twenty Twelve _navigation.js_ (/_functions.php_)

### Changed
* search button style (/_style.css_)

### Removed
* Bootstrap 3.3.6 CSS (/_style.css_)
* jQuery Migrate 1.4.0 (/_functions.php_)
* lazy loading → Google Custom Search Engine (/_functions.php_ & /_searchform.php_)

## [0.6.2] - 2016-04-13
### Added
- Twenty Twelve 2.0 (/_style.css_)

### Changed
* jQuery → 1.12.3 (/_functions.php_)
* jQuery CDN (/_functions.php_)
* jQuery Migrate → 1.4.0 (/_functions.php_)

## [0.6.1] - 2016-04-09
### Added
* SSL footer link (/_footer.php_)
* SSL lazy loading → Google Custom Search Engine (/_functions.php_)

## [0.6.0] - 2016-04-08
### Added
* escape HTML in `<code>` elements (/_functions.php_)
* Google Code Prettify CDN (/_functions.php_)
* Google Code Prettify line numbers (/_style.css_)

## [0.5.0] - 2016-03-31
### Added
* Bootstrap 3.3.6 CSS (/_style.css_)
* Bootstrap 3.3.6 Glyphicons CDN (/_style.css_)
* Bootstrap 3.3.6 JavaScript CDN (/_functions.php_)
* jQuery CDN (/_functions.php_)
* lazy loading → Google Custom Search Engine (/_functions.php_)
* RSS blog archives (/_archives.php_)
* `setTimeout` focus → search (/_functions.php_)

### Changed
* font JavaScript (/_functions.php_)
* lazy loading → Google Custom Search Engine (/_searchform.php_)

### Removed
* `@import` (/_style.css_)
* monthly blog archives (/_archives.php_)
* Open Sans (/_functions.php_)
* version information → .css & .js files (/_functions.php_)

## [0.4.1] - 2016-02-10
### Added
* `.site-header h1` transition (/_style.css_)

### Changed
* `font-family` (/_style.css_)

## [0.4.0] - 2016-02-06
### Added
* scroll changes (/_functions.php_ & /_style.css_)

## [0.3.1] - 2016-02-06
### Changed
* Google Analytics, Google API Key, & Google Webfont JavaScript → footer (/_functions.php_)

## [0.3.0] - 2015-07-19
### Added
* /_LISENCE_
* /_README.md_
* theme files → GitHub

## [0.2.0]
### Added
* /_404.php_
* /_searchform.php_
* ease transitions → links & header (/_style.css_)
* Google Custom Search Engine (/_searchform.php_)

## [0.1.0]
### Added
* /_footer.php_
* /_functions.php_
* /_style.css_
* copyright (/_footer.php_)
* Google Analytics (/_functions.php_)
* Google API Key (/_functions.php_)
* Google Webfont (/_functions.php_)
* sticky footer (/_style.css_)
* theme colours (/_style.css_)
* theme layout (/_style.css_)


[Unreleased]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.7.3...HEAD
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