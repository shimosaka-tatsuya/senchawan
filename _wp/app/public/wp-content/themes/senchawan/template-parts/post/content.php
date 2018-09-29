<h1 class="ttl-column">
	<span class="ttl-columnEnglish"><?php the_field('ttlColumnEnglish'); ?></span>
	<span class="ttl-columnJapanese"><?php the_title(); ?></span>
</h1>

<p class="txt-issueDate"><?php the_time('Y.m.d'); ?>
<?php the_category(); ?>

<img src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height="">

<div class="txt-column">
<?php the_content(); ?>
</div><!-- /.txt-column -->