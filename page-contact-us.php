<?php
/**
 * Template Name: Contact Us
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecapp
 */

get_header();
?>
<?php

    require_once get_template_directory().'/template-parts/content-contact-us.php';
	
?>
<?php

get_footer();
?>