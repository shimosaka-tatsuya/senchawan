<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/post/content', get_post_format() );
	
endwhile; // End of the loop.
?>

<?php get_footer(); ?>