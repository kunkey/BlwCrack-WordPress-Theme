<?php
/**
 * 函数模板
 *
 * @package WordPress
 * @subpackage Beginning
 * @since Unknown
 *
 * @author admin@bgbk.org
 * @link https://www.bgbk.org/wp-theme-beginning/
 */

// Config
require( get_template_directory() . '/theme-config.php' );

// Functions
require( get_template_directory() . '/functions/compat.php' );
require( get_template_directory() . '/functions/theme-functions.php' );
require( get_template_directory() . '/functions/update.php' );
require( get_template_directory() . '/functions/nav-menu.php' );
require( get_template_directory() . '/functions/thumbnail.php' );
require( get_template_directory() . '/functions/widgets.php' );
require( get_template_directory() . '/functions/comment.php' );
require( get_template_directory() . '/functions/style.php' );
require( get_template_directory() . '/functions/ajax-load.php' );
require( get_template_directory() . '/functions/page-navi.php' );
require( get_template_directory() . '/functions/deprecated.php' );

// Languages
Bing_maybe_include_locale_file();

// Content
include( get_template_directory() . '/includes/posts-list.php' );
include( get_template_directory() . '/includes/archive-header.php' );
include( get_template_directory() . '/includes/related-posts.php' );
include( get_template_directory() . '/includes/comment.php' );
include( get_template_directory() . '/includes/mobile.php' );
include( get_template_directory() . '/includes/banner.php' );
include( get_template_directory() . '/includes/slider.php' );
include( get_template_directory() . '/includes/shortcodes.php' );

// End of page.
