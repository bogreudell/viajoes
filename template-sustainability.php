<?php /* Template name: Sustainability Blog */ get_header(); 

include( locate_template('components/banner-image.php') );

$the_query = new WP_Query( array('post_type'=>'post') );

if( $the_query->have_posts() ){

	echo '<div class="vj_blogpreview__wrapper">';

	while( $the_query->have_posts() ){
		$the_query->the_post();

		include( locate_template('components/post-preview.php') );
	}

	echo '</div>';
}

get_footer(); ?>