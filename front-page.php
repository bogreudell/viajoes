<?php 
get_header();

if ( have_rows('banner_videos') ) {
	include( locate_template('components/banner-videos.php') );
}

if ( have_rows('primary_content') ) {
	while ( have_rows('primary_content') ) {
		the_row();

		if ( get_row_layout() == 'executive_summary' ) {
			include( locate_template('components/executive-summary.php') );

		} elseif ( get_row_layout() == 'primary_banner' ) {
			$banner_id = 'vj_our_services';

			include( locate_template('components/content-banner.php') );

		} elseif ( get_row_layout() == 'featured_services' ) {
			include( locate_template('components/featured-services.php') );

		} elseif ( get_row_layout() == 'secondary_banner' ) {
			$banner_id = 'vj_sustainability';
			
			include( locate_template('components/content-banner.php') );

		} elseif ( get_row_layout() == 'collection' ) {
			include( locate_template('components/collection.php') );

		} elseif ( get_row_layout() == 'icons' ) {
			include( locate_template('components/featured-icons.php') );

		}
	}
}

get_footer(); 
?>