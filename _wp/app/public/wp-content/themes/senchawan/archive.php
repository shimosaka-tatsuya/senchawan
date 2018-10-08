<?php get_header(); ?>

<h1 class="ttl-listName"><?php single_tag_title( ); ?>の一覧</h1>

<?php if ( have_posts() ) : ?>
<ul class="list-column">
<?php while ( have_posts() ) : the_post(); ?>
	<li class="box-column">
		<a class="box-columnInr" href="<?php the_permalink(); ?>">
			<img class="img-column" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="300" height="">
			<p class="ttl-columnCategory"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
			<p class="ttl-column ttl-column-english"><?php the_field('ttlColumnEnglish'); ?></p>
			<p class="ttl-column ttl-column-japanese"><?php the_title(); ?></p>
		</a><!-- /.box-columnInr -->
		<p class="txt-columnDate"><?php the_time('Y.m.d'); ?></p>
	</li><!-- /.box-column -->
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
