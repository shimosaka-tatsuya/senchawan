<div class="box-columnMain">

	<img class="img-columnMainThumbnail" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height="">
	
	<div class="txt-columnMain txt-columnMainEnglish">
		
		<?php the_field('txtColumnEnglish'); ?>
		
	</div><!-- /.txt-columnMainEnglish -->
	
	<div class="txt-columnMain txt-columnMainJapanese">
	
		<?php the_content(); ?>
	
	</div><!-- /.txt-columnMainJapanese -->

</div><!-- /.box-columnMain -->