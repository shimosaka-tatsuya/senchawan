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

<img class="img-mainVisual" src="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); print_r($eye_img[0]); ?>" alt="『<?php the_title(); ?>』のサムネイル / thumbnail of '<?php the_field('ttlColumnEnglish'); ?>'" width="100%" height="">

<div class="txt-column">
	<div class="txt-columnInr-english">
		<?php the_field('txtColumnEnglish'); ?>
	</div><!-- /.txt-columnInr-english -->
	
	<div class="txt-columnInr-japanese">
		<?php the_content(); ?>
	</div><!-- /.txt-columnInr-japanese -->
</div><!-- /.txt-column -->

<?php the_tags( '<ul class="list-tag"><li class="txt-tag">', '</li><li class="txt-tag">', '</li></ul>' ); ?>

<div class="box-shareButton">
	<span>SHARE ON</span>
	<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
	    ADDTOANY_SHARE_SAVE_KIT( array( 
	        'buttons' => array( 'facebook' ),
	    ) );
	} ?>
</div><!-- /.box-shareButton -->

<h2 class="ttl-pageHead">
	関連記事
</h2><!-- /.ttl-pageHead -->

<ul class="list-column">
<?php
// カテゴリーが複数設定されている場合は、どれかをランダムに取得
$categories = wp_get_post_categories($post->ID, array('orderby'=>'rand'));
//表示したい記事要素を設定
if ($categories) {
    $args = array(
        'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
        'post__not_in' => array($post->ID), // 表示している記事は除外する
        'showposts'=>6, // 取得したい記事数
        'caller_get_posts'=>1, // 取得した記事を1番目から表示する
        'orderby'=> 'rand' // ランダムで取得する
    ); 
$my_query = new WP_Query($args); 
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) { $my_query->the_post(); 
?>

<?php // コラム ?>
<?php get_template_part( 'template-parts/list-column/box-column', get_post_format() ); ?>
	
<?php } wp_reset_query();
} else { ?>
	<li class="box-otherColumn box-otherColumn-none">同一カテゴリのコラムはありません。</li><!-- /.box-otherColumn-none -->
<?php } } ?>
</ul><!-- /.list-otherColumn -->