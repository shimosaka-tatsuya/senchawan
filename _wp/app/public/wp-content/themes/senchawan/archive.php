<?php get_header(); ?>

<h1 class="ttl-listName"><?php single_tag_title( ); ?>の一覧</h1>

<?php if ( have_posts() ) : ?>
<ul>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endwhile; ?>
</ul>
<?php
	the_posts_pagination( array(
		'prev_text' => '&lt;',
		'next_text' => '&gt;',
	) );
?>

<?php else :
	get_template_part( 'template-parts/post/content', 'none' );
endif; ?>

<?php get_footer(); ?>
