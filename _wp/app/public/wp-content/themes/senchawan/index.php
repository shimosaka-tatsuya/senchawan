<?php get_header(); ?>

<!-- 最新記事を取得 -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6
  );
  $st_query = new WP_Query( $args );
?>
<ul class="list-newColumn">
<?php if ( $st_query->have_posts() ): ?>
	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
	<li class="box-newColumn">
		<a href="<?php the_permalink(); ?>">
			<img class="img-mainVisual" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'thumbnail' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height="">
			<p class="txt-otherColumnCategory"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
			<p class="ttl-newColumn-english"><?php the_field('ttlColumnEnglish'); ?></p>
			<p class="ttl-newColumn-japanese"><?php the_title(); ?></p>
		</a>
		<p class="txt-newColumnDate"><?php the_time('Y.m.d'); ?></p>
	</li><!-- /.box-newColumn -->
	<?php endwhile; ?>
	<?php else: ?>
	<li class="box-newColumn-none">新しい記事はありません</li><!-- /.box-newColumn-none -->
<?php endif; ?>
</ul><!-- /.list-newColumn -->

<?php get_footer(); ?>