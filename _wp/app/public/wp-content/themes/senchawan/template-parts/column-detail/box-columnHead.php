<div class="box-columnHead">
	<h1 class="ttl-column">
		<span class="ttl-columnInr-english"><?php the_field('ttlColumnEnglish'); ?></span>
		<span class="ttl-columnInr-japanese"><?php the_title(); ?></span>
	</h1>
	
	<div class="box-meta">
		<p class="txt-issueDate"><?php the_time('Y.m.d'); ?></p>
		<?php the_category(); ?>
	</div><!-- /.box-meta -->
</div><!-- /.box-columnHead -->