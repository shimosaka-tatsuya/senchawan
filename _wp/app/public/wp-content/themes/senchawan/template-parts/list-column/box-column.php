<li class="box-column">
	<a class="box-columnInr" href="<?php the_permalink(); ?>">
		<img class="img-column" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="300" height="">
		<p class="ttl-columnCategory"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
		<p class="ttl-column ttl-column-english"><?php the_field('ttlColumnEnglish'); ?></p>
		<p class="ttl-column ttl-column-japanese"><?php the_title(); ?></p>
	</a><!-- /.box-columnInr -->
	<p class="txt-columnDate"><?php the_time('Y.m.d'); ?></p>
</li><!-- /.box-column -->