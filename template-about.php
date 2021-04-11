<?php /* Template name: About */ get_header();

include( locate_template('components/banner-videos.php') );
// include( locate_template('components/banner-image.php') );

if ( have_rows('primary_content') ) {
	while ( have_rows('primary_content') ) {
		the_row();

		if ( get_row_layout() == 'summary' ) {
			include( locate_template('components/executive-summary.php') );

		} elseif ( get_row_layout() == 'banner' ) {
			include( locate_template('components/content-banner.php') );

		} elseif ( get_row_layout() == 'team_members' ) {
			include( locate_template('components/team-members.php') );

		} elseif ( get_row_layout() == 'icons' ) {
			include( locate_template('components/featured-icons.php') );

		} elseif ( get_row_layout() == 'contact' ) {
			include( locate_template('components/contact.php') );
		}
	}
}

get_footer();