<?php get_header(); ?>

<!-- 最新記事3件を取得 -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
  );
  $st_query = new WP_Query( $args );
?>
<div class="box-mainVisual">
<?php if ( $st_query->have_posts() ): ?>
	<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
	<div class="box-mainVisualInr">
		<a href="<?php the_permalink(); ?>">
			<img class="img-mainVisual" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'large' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height="">
			
			<p class="txt-mainVisualCategory"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></p>
			
			<p class="ttl-mainVisual-english"><?php the_field('ttlColumnEnglish'); ?></p>
			
			<p class="ttl-mainVisual-japanese"><?php the_title(); ?></p>
		</a>
		<p class="txt-mainVisualDate"><?php the_time('Y.m.d'); ?></p>
	</div><!-- /.box-mainVisualInr -->
	<?php endwhile; ?>
	<?php else: ?>
	<div class="box-mainVisualInr">
		<a href="<?php the_permalink(); ?>">
			<img class="img-mainVisual" src="/img/dummy.jpg" alt="ダミーのサムネイル" width="100%" height="">
			
			<p class="ttl-mainVisual-english">There is no new article</p>
			
			<p class="ttl-mainVisual-japanese">新しい記事はありません</p>
		</a>
	</div><!-- /.box-mainVisualInr -->
<?php endif; ?>
</div><!-- /.box-mainVisual -->

<div class="box-about">
	<dl class="data-about">
		<dt class="ttl-About">About</dt>
		<dd class="txt-about txt-about-english">I will input the ABOUT from here.I will input the ABOUT from here.I will input the ABOUT from here.</dd>
		<dd class="txt-about txt-about-japanese">テキスト入りますテキスト入りますテキスト入りますテキスト入ります</dd>
	</dl><!-- /.data-about -->
	
	<a class="btn-detail" href="/about/">詳細を見る</a>
</div><!-- /.box-About -->

<p class="ttl-sectionHead">column</p>

<!-- その他の最新記事を取得 -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'offset' => 3 //1〜3件目の記事は表示しない。
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

<a class="btn-detail" href="/column/">コラムをもっと見る</a>

<p class="ttl-sectionHead">instagram</p>

<div class="box-Instagram">
	インスタグラム（後ほど実装）
</div><!-- /.box-Instagram -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script>
  $(document).ready(function(){
    $('.box-mainVisual').bxSlider({
	    mode: "horizontal",
	    auto: true,
	    speed: "500",
	    pause: "3000",
	    infiniteLoop: true,
	    captions: false,
	    responsive: true,
	    touchEnabled: true,
	    pager: true,
	    controls: true,
	    nextText: "次へ",
	    prevText: "前へ",
	    easing: "ease"
    });
  });
</script>
<?php get_footer(); ?>