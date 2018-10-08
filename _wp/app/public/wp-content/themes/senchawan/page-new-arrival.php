<?php /* Template Name: 新着コラム一覧 */ ?>

<?php get_header(); ?>

<h1 class="ttl-pageHead">
	全column一覧
</h1><!-- /.ttl-pageHead -->

<?php // コラム一覧のナビゲーション ?>
<nav class="wp-categoryNavigation">
	<ul class="list-categoryNavigation">
		
		<li class="btn-categoryNavigation">
			<a href="/column/">all</a>
		</li>
		
		<li class="btn-categoryNavigation">
			<a href="/category/culture/">culture</a>
		</li>
		
		<li class="btn-categoryNavigation">
			<a href="/category/news/">news</a>
		</li>
		
		<li class="btn-categoryNavigation">
			<a href="/category/product/">product</a>
		</li>
		
	</ul><!-- /.list-categoryNavigation -->
</nav><!-- /.wp-categoryNavigation -->

<!-- 新着記事の取得 -->
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
	<li class="box-column">
		<a class="box-columnInr" href="<?php the_permalink(); ?>">
			<img class="img-column" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="300" height="">
			<p class="ttl-columnCategory"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
			<p class="ttl-column ttl-column-english"><?php the_field('ttlColumnEnglish'); ?></p>
			<p class="ttl-column ttl-column-japanese"><?php the_title(); ?></p>
		</a><!-- /.box-columnInr -->
		<p class="txt-columnDate"><?php the_time('Y.m.d'); ?></p>
	</li><!-- /.box-column -->
<?php endwhile; endif; wp_reset_postdata(); ?>
</ul><!-- /.list-column -->

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