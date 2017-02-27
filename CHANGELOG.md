# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added
* /_CHANGELOG.md_
* shields.io version info ([README.md])

### Changed
* [README.md] changelog → [CHANGELOG.md]
* theme name → WP2012-S ([style.css])

## [0.7.3] - 2017-02-23
### Added
* CSS3 Validator link ([footer.php])
* download latest release ([README.md])
* favicon support ([header.php])

### Changed
* changelog ([README.md])
* `<code>` element ([style.css])
* Google Code Prettify ([style.css])
* URI ([README.md] & [style.css])
* WordPress Emoji JavaScript → footer ([functions.php])

### Removed
* browser-update.org JavaScript ([functions.php])
* enequeue _addtoany.min.css_ ([functions.php])

## [0.7.2] - 2016-04-28
### Added
* function `theme_add_style_property` ([functions.php])
* HTML5 Validator link ([footer.php])
* `#site-title` & `#colophon` for HTML5 fixes ([style.css])

### Changed
* function `theme_google_webfonts` → `theme_webfonts` ([functions.php])
* Font Awesome → footer ([functions.php])
* HTML5 header elements ([scroll-affix.js])

### Fixed
* HTML5 warnings & errors ([footer.php], [header.php], & [searchform.php])

## [0.7.1] - 2016-04-27
### Added
* [/widgets/]
* [connect.html] (text widget)
* /js/
* [scroll-affix.js]
* `.scroll-affix` ([style.css])

### Changed
* jQuery → 2.2.3 ([functions.php])
* refactored scroll changes ([scroll-affix.js])
* scroll changes ([scroll-affix.js])

### Removed
* `.past-hgroup` (style.css)
* function `theme_scroll_changes` ([functions.php])


### Fixed
* scroll changes `$(document).on('ready', function() {` → `$(document).ready(function() {` ([scroll-affix.js])

## [0.7.0] - 2016-04-25
### Added
* [header.php]
* browser-update.org JavaScript ([functions.php])
* Font Awesome 4.6.1 CSS CDN ([functions.php])

### Changed
* search icon ([searchform.php])
* jQuery → 2.1.4 ([functions.php])
* all files → UTF-8

### Removed
* support for older versions of Internet Explorer ([header.php])

## [0.6.7] - 2016-04-22
### Added
* enequeue _addtoany.min.css_ ([functions.php])

### Changed
* Google Webfont method ~~JavaScript~~ → CSS ([functions.php])

### Removed
* stylesheet ID attributes ([functions.php])
* support for older versions of Internet Explorer ([functions.php])
* support for older versions of Internet Explorer ([functions.php])

### Fixed
* local theme CSS & JavaScript → use Multisite network home URL ([functions.php])

## [0.6.6] - 2016-04-21
### Changed
* Yoast SEO schema.org search URL → use Google Custom Search Engine & Multisite network ([functions.php])

### Removed
* RSD support ([functions.php])
* Windows Live Writer support ([functions.php])
* WordPress shortlink support ([functions.php])
* WordPress generator information ([functions.php])

## [0.6.5] - 2016-04-21
### Changed
* jQuery → 1.12.0 for scroll changes ([functions.php])

## [0.6.4] - 2016-04-20
### Changed
* refactored [functions.php]

## [0.6.3] - 2016-04-20
### Added
* Bootstrap 3.3.6 CSS CDN ([functions.php])
* Bootstrap CSS → dependency of theme CSS ([functions.php])
* enqueue Twenty Twelve _navigation.js_ ([functions.php])

### Changed
* search button style ([style.css])

### Removed
* Bootstrap 3.3.6 CSS ([style.css])
* jQuery Migrate 1.4.0 ([functions.php])
* lazy loading → Google Custom Search Engine ([functions.php] & [searchform.php])

## [0.6.2] - 2016-04-13
### Added
- Twenty Twelve 2.0 ([style.css])

### Changed
* jQuery → 1.12.3 ([functions.php])
* jQuery CDN ([functions.php])
* jQuery Migrate → 1.4.0 ([functions.php])

## [0.6.1] - 2016-04-09
### Added
* SSL footer link ([footer.php])
* SSL lazy loading → Google Custom Search Engine ([functions.php])

## [0.6.0] - 2016-04-08
### Added
* escape HTML in `<code>` elements ([functions.php])
* Google Code Prettify CDN ([functions.php])
* Google Code Prettify line numbers ([style.css])

## [0.5.0] - 2016-03-31
### Added
* Bootstrap 3.3.6 CSS ([style.css])
* Bootstrap 3.3.6 Glyphicons CDN ([style.css])
* Bootstrap 3.3.6 JavaScript CDN ([functions.php])
* jQuery CDN ([functions.php])
* lazy loading → Google Custom Search Engine ([functions.php])
* RSS blog archives ([archives.php])
* `setTimeout` focus → search ([functions.php])

### Changed
* font JavaScript ([functions.php])
* lazy loading → Google Custom Search Engine ([searchform.php])

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
* Google Analytics, Google API Key, & Google Webfont JavaScript → footer ([functions.php])

## [0.3.0] - 2015-07-25
### Added
* theme files → GitHub

## [0.2.0] - 2015-07-25
### Added
* [404.php]
* [footer.php]
* [functions.php]
* [searchform.php]
* copyright ([footer.php])
* ease transitions → links & header ([style.css])
* Google Analytics ([functions.php])
* Google API Key ([functions.php])
* Google Custom Search Engine ([searchform.php])
* Google Webfont ([functions.php])
* sticky footer ([style.css])
* theme colours ([style.css])
* theme layout ([style.css])

## [0.1.0] - 2015-07-19
### Added
* [style.css]

## [Initial commit]
### Added
* /_LISENCE_
* [README.md]

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
[0.6.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.5.0...v0.6.0
[0.5.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.4.1...v0.5.0
[0.4.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.4.0...v0.4.1
[0.4.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.3.1...v0.4.0
[0.3.1]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.3.0...v0.3.1
[0.3.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/AdamSteffanick/wp2012-s/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/AdamSteffanick/wp2012-s/compare/c87ee07...v0.1.0
[Initial commit]: https://github.com/AdamSteffanick/wp2012-s/commit/c87ee07783b4605ce4214ebd08372816cd3c41fa
[/widgets/]: .[/widgets/]
[/js/]: ./js/
[404.php]: ./404.php
[archives.php]: ./archives.php
[CHANGELOG.md]: ./CHANGELOG.md
[connect.html]: ./connect.html
[header.php]: .[header.php]
[footer.php]: ./footer.php
[functions.php]: ./functions.php
[LISENCE]: ./LISENCE
[README.md]: ./README.md
[scroll-affix.js]: ./scroll-affix.js
[searchform.php]: ./searchform.php
[style.css]: ./style.css