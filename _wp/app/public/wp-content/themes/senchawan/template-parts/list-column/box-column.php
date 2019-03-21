<li class="item-column box-ScrollAnimaton">
	<a class="box-column" href="<?php the_permalink(); ?>">
		<div class="img-column">
			<span class="img-columnInner"><img src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height=""></span><!-- /.img-columnInner -->
			<p class="txt-columnCategory txt-fontAlphabet"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
		</div><!-- /.img-column -->
		<p class="ttl-column ttl-column-english txt-fontAlphabet"><?php the_field('ttlColumnEnglish'); ?></p>
		<p class="ttl-column ttl-column-japanese"><?php the_title(); ?></p>
		<p class="txt-columnDate"><?php the_time('d / m / Y'); ?></p>
	</a><!-- /.box-column -->
</li><!-- /.item-column -->