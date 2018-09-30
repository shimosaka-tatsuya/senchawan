<?php /* Template Name: 新着コラム一覧 */ ?>

<?php get_header(); ?>

<h1 class="ttl-listName">columnの一覧</h1>

<!-- 新着記事の取得 -->
<?php
$paged = (int) get_query_var('paged');
$args = array(
'posts_per_page' => get_option('posts_per_page'),
'paged' => $paged,
'orderby' => 'post_date',
'order' => 'DESC',
'post_type' => 'post',
'post_status' => 'publish'
);
$the_query = new WP_Query($args);
?>
<ul>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endwhile; endif; wp_reset_postdata(); ?>
</ul>

<!-- ページネーション -->
<nav class="navigation pagination" role="navigation">
	<div class="nav-links">
		<?php $paged = (int) get_query_var('paged'); ?>
		<?php $the_query = new WP_Query($args);?>
		<?php $page_arg = array( 'current' => max( 1, $paged ), 'total' => $the_query->max_num_pages, 'prev_text' => '&lt;', 'next_text' => '&gt;',  ); ?>
		<?php echo paginate_links($page_arg); ?>	
	</div>
</nav>

<?php get_footer(); ?>