<?php get_header(); ?>

<?php if (is_page( '2' ) or is_category( 'culture' ) or is_category( 'news' ) or is_category( 'product' )) { // タグ一覧以外 ?>
<h1 class="ttl-pageHead txt-fontAlphabet"><?php single_tag_title( ); ?></h1><!-- /.ttl-pageHead -->
<?php } else { ?>
<h1 class="ttl-pageHead txt-fontAlphabet">Archive</h1><!-- /.ttl-pageHead -->
<?php } ?>

<?php // コラム一覧のナビゲーション ?>
<?php get_template_part( 'template-parts/list-column/list-column-navigation', get_post_format() ); ?>

<?php // タグ名（タグ一覧のときだけ表示） ?>
<?php if (!is_page( '2' ) and !is_category( 'culture' ) and !is_category( 'news' ) and !is_category( 'product' )) { // タグ一覧以外 ?>
<p class="txt-tagName"><?php single_tag_title( ); ?></p>
<?php } ?>

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
