<?php get_header(); ?>

<h1 class="ttl-pageHead"><?php single_tag_title( ); ?></h1><!-- /.ttl-pageHead -->

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

<?php // ページネーション（page-new-arrival.phpとは形式が違うので注意） ?>
<?php
	the_posts_pagination( array(
		'prev_text' => '&lt;',
		'next_text' => '&gt;',
	) );
?>

<?php endif; ?>

<?php get_footer(); ?>
