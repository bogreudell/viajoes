<?php /* Template name: Services */ get_header();

include( locate_template('components/banner-image.php') );

if( have_rows('primary_content') ){
	while( have_rows('primary_content') ){
		the_row();

		if( get_row_layout() == 'services' ){
			include( locate_template('components/service.php') );

		} elseif( get_row_layout() == 'banner' ){
			include( locate_template('components/content-banner.php') );

		} elseif( get_row_layout() == 'offerings' ){
			include( locate_template('components/offerings.php') );
		}
	}
}

get_footer();