<?php /* Template name: Services */ get_header();

include( locate_template('components/banner-image.php') );

if( have_rows('primary_content') ){
	while( have_rows('primary_content') ){
		the_row();

		if( get_row_layout() == 'services_video_embed' ){
			include( locate_template('components/service.php') );

		} elseif( get_row_layout() == 'services_double_image' ){
			include( locate_template('components/service.php') ); 

		} elseif( get_row_layout() == 'services_full_image' ){
			include( locate_template('components/service.php') );

		}elseif( get_row_layout() == 'banner' ){
			include( locate_template('components/content-banner.php') );

		} elseif( get_row_layout() == 'offerings' ){
			include( locate_template('components/offerings.php') );

		} elseif( get_row_layout() == 'contact' ){
			include( locate_template('components/contact.php') );
			
		}
	}
}

get_footer();