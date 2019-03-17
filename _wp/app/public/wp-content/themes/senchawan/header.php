<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="/css/base.min.css">
<?php // ▼スタイル ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<link rel="stylesheet" type="text/css" href="/css/home.min.css">
<?php } else if(is_page( '453' )) { // アバウト ?>
<link rel="stylesheet" type="text/css" href="/css/about.min.css">
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧 ?>
<link rel="stylesheet" type="text/css" href="/css/list-column.min.css">
<?php } else if( is_single() ) { // 記事ページ ?>
<link rel="stylesheet" type="text/css" href="/css/column-detail.min.css">
<?php } ?>
<?php // ▼ディスクリプション ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta name="description" content="ダミーダミートップのディスクリプション。">
<?php } else if(is_page( '453' )) { // アバウトページ ?>
<meta name="description" content="ダミーダミーアバウトのディスクリプション。">
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧ページ ?>
<meta name="description" content="ダミーダミーコラム一覧のディスクリプション。">
<?php } else if( is_single() ) { // 記事ページ ?>
<meta name="description" content="ダミーダミー記事のディスクリプション。">
<?php } ?>
<?php // ▼og:url ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:url" content="<?php echo home_url( '/' ); ?>" />
<?php } else if (!is_home()) { // トップページ以外 ?>
<meta property="og:url" content="<?php echo the_permalink(); ?>" />
<?php } ?>
<?php // ▼og:title  ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:title" content="q" />
<?php } else if(is_page( '453' )) { // アバウトページ ?>
<meta property="og:title" content="About | q" />
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧ページ ?>
<meta property="og:title" content=" Archive | q" />
<?php } else if( is_single() ) { // 記事ページ ?>
<meta property="og:title" content=" <?php the_title(); ?> | q" />
<?php } ?>
<?php // ▼og:description  ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:description" content="トップのOGディスクリプション" />
<?php } else if(is_page( '453' )) { // アバウトページ ?>
<meta property="og:description" content="アバウトのOGディスクリプション" />
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧ページ ?>
<meta property="og:description" content="コラム一覧のOGディスクリプション" />
<?php } else if( is_single() ) { // 記事ページ ?>
<meta property="og:description" content="記事のOGディスクリプション" />
<?php } ?>
<?php // ▼og:image  ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:image" content="トップのOGイメージ" />
<?php } else if(is_page( '453' ) or is_page( '2' ) or is_archive()) { // アバウト or アーカイブ ?>
<meta property="og:image" content="その他のOGイメージ" />
<?php } else if( is_single() ) { // 記事ページ ?>
<meta property="og:image" content="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); print_r($eye_img[0]); ?>" />
<?php } ?>
<meta property="og:site_name" content="q" />
<meta property="og:type" content="article">
<meta property="fb:app_id" content="サンプルID">
<meta property="og:locale" content="ja_JP" />

<?php
	wp_deregister_script( 'jquery' ); 
	wp_head();
?>
</head>
<body>

<header class="box-header">
	<a class="box-siteLogo" href="/">ロゴ</a><!-- /.box-siteLogo -->
	
	<input id="hamburgerMenuInput" type="checkbox">
	
	<label class="btn-hamburgerMenu" for="hamburgerMenuInput"><span>メニュー</span></label>
	
	<nav class="box-hamburgerMenu">
		
		<ul class="list-hamburgerMenu">
			<li class="btn-hamburgerMenu <?php if (is_home() && !is_paged()) { ?> btn-hamburgerMenu-current<?php } ?>">
				<a class="btn-hamburgerMenuInr" href="/">トップ</a><!-- /.btn-hamburgerMenuInr -->
			</li><!-- /.btn-hamburgerMenu -->
			
			<li class="btn-hamburgerMenu<?php if(is_page( '453' )): ?> btn-btn-hamburgerMenu-current<?php endif; ?>">
				<a class="btn-hamburgerMenuInr" href="/about/">アバウト</a><!-- /.btn-hamburgerMenuInr -->
			</li><!-- /.btn-hamburgerMenu -->
			
			<li class="box-hamburgerMenuColumn">
				<p class="ttl-hamburgerMenuColumn">コラム</p><!-- /.ttl-hamburgerMenuColumn -->
				<ul class="list-hamburgerMenuColumn">
					<li class="btn-hamburgerMenuColumn<?php if(is_page( '2' )): ?> btn-hamburgerMenuColumn-current<?php endif; ?>">
						<a class="btn-hamburgerMenuColumnInr" href="/column/">全コラム一覧</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn<?php if(is_category( 'culture' )): ?> btn-hamburgerMenuColumn-current<?php endif; ?>">
						<a class="btn-hamburgerMenuColumnInr" href="/category/culture/">カルチャー</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn<?php if(is_category( 'news' )): ?> btn-hamburgerMenuColumn-current<?php endif; ?>">
						<a class="btn-hamburgerMenuColumnInr" href="/category/news/">ニュース</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn<?php if(is_category( 'product' )): ?> btn-hamburgerMenuColumn-current<?php endif; ?>">
						<a class="btn-hamburgerMenuColumnInr" href="/category/product/">プロダクト</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
				</ul><!-- /.list-hamburgerMenuColumn -->
			</li><!-- /.box-hamburgerMenuColumn -->
		</ul><!-- /.list-hamburgerMenu -->
		
	</nav><!-- /.box-hamburgerMenu -->
</header><!-- /.box-header -->

<?php // パンくず。トップページ以外で読み込ませる。 ?>
<?php if (!is_home()) { ?>
<?php // パンくず ?>
<?php get_template_part( 'template-parts/list-breadcrumb/list-breadcrumb', get_post_format() ); ?>
<?php } ?>