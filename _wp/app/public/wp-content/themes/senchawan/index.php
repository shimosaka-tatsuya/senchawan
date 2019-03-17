<?php get_header(); ?>

<div class="box-content-home">

<!-- 最新記事1件を取得 -->
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
			<p class="txt-mainVisualDate"><?php the_time('Y.m.d'); ?></p>
		</div>
	</a>
	<?php endwhile; ?>
	<?php else: ?>
	新しい記事はありません。
<?php endif; ?>
</div><!-- /.box-mainVisual -->

<!-- その他の最新記事を取得 -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'offset' => 1 //〜1件目の記事は表示しない。
  );
  $st_query = new WP_Query( $args );
?>
<ul class="list-newColumn">
<?php if ( $st_query->have_posts() ): ?>
	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>

	<?php // コラム ?>
	<?php get_template_part( 'template-parts/list-column/box-column', get_post_format() ); ?>

	<?php endwhile; ?>
	<?php else: ?>
	<li class="box-newColumn-none">新しい記事はありません</li><!-- /.box-newColumn-none -->
<?php endif; ?>
</ul><!-- /.list-newColumn -->

<a class="btn-detail" href="/column/">コラムをもっと見る</a>

<div class="box-about">
	<dl class="data-about">
		<dt class="ttl-About">About</dt>
		<dd class="txt-about txt-about-english">I will input the ABOUT from here.I will input the ABOUT from here.I will input the ABOUT from here.</dd>
		<dd class="txt-about txt-about-japanese">テキスト入りますテキスト入りますテキスト入りますテキスト入ります</dd>
	</dl><!-- /.data-about -->
	
	<a class="btn-detail" href="/about/">詳細を見る</a>
</div><!-- /.box-About -->

</div><!-- /.box-content-home -->

<?php get_footer(); ?>