<?php
/*
 Template Name: Full page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

		<div class="main-section fullpage" style="background-image: url(<?php the_field('fullpage-image') ?>);">
			<svg version="1.1" id="diagonal-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1680 1280" xml:space="preserve">		
				<path class="diagonal-shape" d="M1070.1,-4.48336L-24.1769,-4.48336L-19.6935,1285.77L1668.29,1285.77L1070.1,-4.48336Z" style="fill:#00CCCC"/>
			</svg>

		</div>

<?php get_footer(); ?>