<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="box-content-column-detail">

<?php // コラム上部 ?>
<?php get_template_part( 'template-parts/column-detail/box-columnHead', get_post_format() ); ?>

<?php // コラム本文 ?>
<?php get_template_part( 'template-parts/column-detail/box-columnMain', get_post_format() ); ?>
	
<?php // タグ ?>
<?php get_template_part( 'template-parts/column-detail/list-tag', get_post_format() ); ?>

<div class="box-shareButton">
	<span>Share it!</span>
	<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
		ADDTOANY_SHARE_SAVE_KIT( array( 
			'buttons' => array( 'facebook', 'twitter' ),
		) );
	} ?>
</div><!-- /.box-shareButton -->

<h2 class="ttl-pageHead">recommend</h2><!-- /.ttl-pageHead -->

<ul class="list-column">
<?php
// カテゴリーが複数設定されている場合は、どれかをランダムに取得
$categories = wp_get_post_categories($post->ID, array('orderby'=>'rand'));
//表示したい記事要素を設定
if ($categories) {
    $args = array(
        'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
        'post__not_in' => array($post->ID), // 表示している記事は除外する
        'showposts'=>3, // 取得したい記事数
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

</div><!-- box-content-column-detail -->

<?php endwhile; ?>

<?php get_footer(); ?>