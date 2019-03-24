<?php /* Template Name: 新着コラム一覧 */ ?>

<?php get_header(); ?>

<h1 class="ttl-pageHead txt-fontAlphabet">Archive</h1><!-- /.ttl-pageHead -->

<?php // コラム一覧のナビゲーション ?>
<?php get_template_part( 'template-parts/list-column/list-column-navigation', get_post_format() ); ?>

<?php // 新着コラムの取得 ?>
<?php
$paged = (int) get_query_var('paged');
$args = array(
'posts_per_page' => get_option('posts_per_page'),
'paged' => $paged,
'post_type' => 'post',
);
$the_query = new WP_Query($args);
?>
<ul class="list-column">
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php // コラム ?>
<?php get_template_part( 'template-parts/list-column/box-column', get_post_format() ); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
</ul><!-- /.list-column -->

<?php // ページネーション（archive.phpとは形式が違うので注意） ?>
<nav class="navigation pagination">
	<div class="nav-links">
		<?php $paged = (int) get_query_var('paged'); ?>
		<?php $the_query = new WP_Query($args);?>
		<?php $page_arg = array( 'current' => max( 1, $paged ), 'total' => $the_query->max_num_pages, 'prev_text' => '&lt;', 'next_text' => '&gt;',  ); ?>
		<?php echo paginate_links($page_arg); ?>	
	</div>
</nav>

<?php get_footer(); ?>