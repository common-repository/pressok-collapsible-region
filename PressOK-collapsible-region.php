<?php
/*
Plugin Name: PressOK - Collapsible Region
Plugin URI: http://www.pressok.nl/plugins
Description: This plugin allows you to hide certain regions within a post or page. By clicking on the first element within the defined region, e.g. a subheading or 'read more', the hidden region will gently expand using jQuery. Clicking the trigger once more will hide the region again.
Author: PressOK
Version: 0.3
Author URI: http://www.pressok.nl
*/


function collapsible_region_process($content) {

	$startTagOpen = '<p>[PressOK-col-reg open]</p>';
	$startTag = '<p>[PressOK-col-reg]</p>';
	$endTag = '<p>[/PressOK-col-reg]</p>';
	
	if(strstr($content, $startTagOpen)) {
    	$startDiv = '<div class="pressOK-collapsible open">';
    	$content = str_replace($startTagOpen, $startDiv, $content);	
	}
	
	if(strstr($content, $startTag)) {
		$startDiv = '<div class="pressOK-collapsible closed">';
		$content = str_replace($startTag, $startDiv, $content);
	}
	$endDiv = '</div>';
	$content = str_replace($endTag, $endDiv, $content);

	return $content;
}


function collapsible_region_javascript() {
    echo '<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>';
    $siteroot = get_bloginfo('wpurl');
    echo '<link rel="stylesheet" type="text/css" media="all" href="' . $siteroot . '/wp-content/plugins/pressok-collapsible-region/style.css" />';
    echo '<script language="javascript" type="text/javascript" src="' . $siteroot . '/wp-content/plugins/pressok-collapsible-region/collapsible-region.js"></script>';
}


add_action('wp_head', 'collapsible_region_javascript');
add_filter('the_content', 'collapsible_region_process');

?>