<div class="box-columnHead">
	<h1 class="ttl-columnHead">
		<span class="txt-columnHead txt-columnHead-english txt-fontAlphabet"><?php the_field('ttlColumnEnglish'); ?></span>
		<span class="txt-columnHead txt-columnHead-japanese"><?php the_title(); ?></span>
	</h1><!-- /.ttl-columnHead -->
	
	<div class="box-columnHeadMeta">
	
		<p class="txt-columnHeadMetaDate"><?php the_time('d / m / Y'); ?></p>
		<?php the_category(); ?>	
	</div><!-- /.box-columnHeadMeta -->
</div><!-- /.box-columnHead -->