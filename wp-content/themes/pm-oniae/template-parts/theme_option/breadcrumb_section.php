<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pm_oniae
 */

if(get_theme_mod('pm_oniae_display_breadcrumb_section',true) != ''){
	pm_oniae_breadcrumb_slider();
}
elseif(get_post_type()){	
	if(get_post_meta(get_the_ID(),'breadcrumb_select',true) == 'yes'){
		pm_oniae_breadcrumb_slider();
	}
}