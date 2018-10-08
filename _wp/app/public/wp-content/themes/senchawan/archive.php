<?php get_header(); ?>

<h1 class="ttl-listName"><?php single_tag_title( ); ?>の一覧</h1>

<?php // コラム一覧のナビゲーション ?>
<?php get_template_part( 'template-parts/list-column/list-column-navigation', get_post_format() ); ?>

<?php // コラム一覧 ?>
<?php if ( have_posts() ) : ?>
<ul class="list-column">
<?php while ( have_posts() ) : the_post(); ?>

<?php // コラム ?>
<?php get_template_part( 'template-parts/list-column/box-column', get_post_format() ); ?>
	
<?php endwhile; ?>
</ul><!-- /.list-column -->

<!-- ページネーション -->
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
