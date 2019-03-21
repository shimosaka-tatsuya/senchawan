<?php get_header(); ?>

<div class="box-content-home">

<?php // 最新記事1件を取得 ?>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 1
  );
  $st_query = new WP_Query( $args );
?>

<div class="box-mainVisual">
<?php if ( $st_query->have_posts() ): ?>
	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
	<a class="box-mainVisualInner" href="<?php the_permalink(); ?>">
		<span class="img-mainVisual"><img src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'large' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height=""></span><!-- /.img-mainVisual -->
		
		<div class="box-articleInfo box-ScrollAnimaton">
			<p class="txt-mainVisualCategory txt-fontAlphabet"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
			<p class="ttl-mainVisual-english txt-fontAlphabet"><?php the_field('ttlColumnEnglish'); ?></p>
			<p class="ttl-mainVisual-japanese"><?php the_title(); ?></p>
			<p class="txt-mainVisualDate"><?php the_time('d / m / Y'); ?></p>
		</div>
	</a>
	<?php endwhile; ?>
	<?php else: ?>
	新しい記事はありません。
<?php endif; ?>
</div><!-- /.box-mainVisual -->

<?php // その他の最新記事を取得 ?>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'offset' => 1 //〜1件目の記事は表示しない。
  );
  $st_query = new WP_Query( $args );
?>
<div class="wp-column">
	<ul class="list-column">
	<?php if ( $st_query->have_posts() ): ?>
		<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
		<?php get_template_part( 'template-parts/list-column/box-column', get_post_format() ); // コラム ?>	
		<?php endwhile; ?>
		<?php else: ?>
		<li class="box-newColumn-none">新しい記事はありません</li><!-- /.box-newColumn-none -->
	<?php endif; ?>
	</ul><!-- /.list-column -->
</div><!-- /.wp-column -->

<div class="wp-columnDetail">
	<div class="box-columnDetail">
		<a class="btn-detail txt-fontAlphabet" href="/archive/">More</a>
	</div><!-- /.box-columnDetail -->
</div><!-- /.wp-columnDetail -->

<div class="box-about">
	<div class="box-aboutInner">
		<dl class="data-about">
			<dt class="ttl-About txt-fontAlphabet">About</dt>
			<dd class="txt-about txt-about-english txt-fontAlphabet">Dunny about writer.　Boyer is ...<br>
			Dunny about writer.　Boyer is ...</dd>
			<dd class="txt-about txt-about-japanese">日本語訳入ります日本語訳入ります<br>
			日本語訳入ります日本語訳入ります</dd>
			<dd>
				<a class="btn-detail txt-fontAlphabet" href="/about/">More</a>
			</dd>
		</dl><!-- /.data-about -->
		
		<div class="img-about">
			<img src="https://placehold.jp/240x100.png" alt="" width="100%" height="">
		</div><!-- /.img-about -->
	</div><!-- /.box-aboutInner -->
</div><!-- /.box-About -->

</div><!-- /.box-content-home -->

<?php get_footer(); ?>