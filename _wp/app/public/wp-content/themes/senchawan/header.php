<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_deregister_script( 'jquery' ); // wordpress固有のjQueyの読み込みを拒否 ?>
<?php wp_head(); ?>

<?php // ▼スタイル ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<link rel="stylesheet" type="text/css" href="/css/home.min.css">
<?php } else if(is_page( '453' )) { // アバウト ?>
<link rel="stylesheet" type="text/css" href="/css/about.min.css">
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧 ?>
<link rel="stylesheet" type="text/css" href="/css/archive.min.css">
<?php } else if( is_single() ) { // 記事ページ ?>
<link rel="stylesheet" type="text/css" href="/css/column-detail.min.css">
<?php } ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php // ▼og:type  ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:type" content="website">
<?php } else { // トップページ以外 ?>
<meta property="og:type" content="article">
<?php } ?>
<?php // ▼og:image  ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:image" content="デフォルトのOGイメージ" />
<?php } else if(is_page( '453' ) or is_page( '2' ) or is_archive()) { // アバウト or アーカイブ ?>
<meta property="og:image" content="デフォルトのOGイメージ" />
<?php } else if( is_single() ) { // 記事ページ ?>
<meta property="og:image" content="<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); print_r($eye_img[0]); ?>" />
<?php } ?>
<?php // ▼og:url ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<meta property="og:url" content="<?php echo home_url( '/' ); ?>" />
<?php } else if (!is_home()) { // トップページ以外 ?>
<meta property="og:url" content="<?php echo the_permalink(); ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="/css/base.min.css">
</head>
<?php // ▼bodyタグ ?>
<?php if (is_home() && !is_paged()) { // トップページ ?>
<body class="area-home">
<?php } else if(is_page( '453' )) { // アバウト ?>
<body class="area-about">
<?php } else if(is_page( '2' ) or is_archive()) { // コラム一覧 ?>
<body class="area-archive">
<?php } else if( is_single() ) { // 記事ページ ?>
<body class="area-column-detail">
<?php } ?>
<header class="box-header">
	<div class="box-siteSymbol">
		<a class="box-siteLogo" href="/"><img src="/img/common/img-logoQ.png" alt="陶芸作家見習いであるテオドール・ボワイエが運営するWEBメディア『q』のロゴ" width="100%" height="" /></a><!-- /.box-siteLogo -->
		
		<p class="txt-outLineSite txt-fontAlphabet">I have questions about Kutani.<br>
			Dummy I have questions about Kutani.<br>
			I have questions about Kutani.<br>
			Dummy I have questions about Kutani.</p><!-- /.txt-outLineSite -->
	</div><!-- /.box-siteSymbol -->
	
	<input id="hamburgerMenuInput" type="checkbox">
		
	<label class="btn-hamburgerMenu" for="hamburgerMenuInput"><span></span></label>
	
	<nav class="box-globalNavigation">
		
		<a class="box-siteLogo-hamburger" href="/"><img src="/img/common/img-logoQ-white.png" alt="陶芸作家見習いであるテオドール・ボワイエが運営するWEBメディア『q』のロゴ" width="100%" height="" /></a><!-- /.box-siteLogo -->
		
		<div class="list-globalNavigation">
			<div class="item-globalNavigation item-globalNavigation-home">
				<a class="btn-globalNavigation txt-fontAlphabet" href="/">Home</a><!-- /.btn-globalNavigation -->
			</div><!-- /.btn-globalNavigation -->
			
			<div class="item-globalNavigation item-globalNavigation-archive">
				<a class="btn-globalNavigation txt-fontAlphabet" href="/archive/">Archive</a><!-- /.btn-globalNavigation -->
				
				<ul class="list-globalNavigationArchive">
					<div class="item-globalNavigationArchive">
						<a class="btn-globalNavigationArchive txt-fontAlphabet" href="/category/culture/">Culture</a><!-- /.btn-globalNavigationArchive -->
					</div><!-- /.btn-globalNavigationArchive -->
					
					<div class="item-globalNavigationArchive">
						<a class="btn-globalNavigationArchive txt-fontAlphabet" href="/category/news/">News</a><!-- /.btn-globalNavigationArchive -->
					</div><!-- /.btn-globalNavigationArchive -->
					
					<div class="item-globalNavigationArchive">
						<a class="btn-globalNavigationArchive txt-fontAlphabet" href="/category/product/">Product</a><!-- /.btn-globalNavigationArchive -->
					</div><!-- /.btn-globalNavigationArchive -->
				</ul><!-- /.list-globalNavigationArchive -->
			</div><!-- /.btn-globalNavigation -->
			
			<div class="item-globalNavigation item-globalNavigation-about">
				<a class="btn-globalNavigation txt-fontAlphabet" href="/about/">About</a><!-- /.btn-globalNavigation -->
			</div><!-- /.btn-globalNavigation -->
			
			<span class="ico-globalNavigation"></span><!-- /.ico-globalNavigation -->
		</div><!-- /.list-globalNavigation -->
		
		<div class="box-headerMeta">
			<dl class="data-headerMetaSns">
				<dt class="ttl-headerMetaSns txt-fontAlphabet">Follow</dt>
				<dd class="box-headerMetaSns">
					<a class="ico-headerMetaSns" href="#" ><img src="/img/common/ico-headerMetaSns-instagram.png" alt="Instagramをフォローする" width="16" height="" /></a>
					<a class="ico-headerMetaSns" href="#"><img src="/img/common/ico-headerMetaSns-facebook.png" alt="Facebookをフォローする" width="16" height="" /></a>
				</dd><!-- /.data-headerMetaSns -->
			</dl><!-- /.box-headerMetaSns -->
			
			<?php // <nav class="box-headerMetaNavigation"><a class="txt-headerMetaNavigation-policy txt-fontAlphabet" href="#">Privacy policy</a></nav> ?>
			
			<p class="txt-copyright txt-fontAlphabet">Copyright&#169;<?php echo date("Y"); ?> q. All Rights Reserved.</p>
		</div><!-- /.box-headerMeta -->

	</nav><!-- /.box-globalNavigation -->
</header><!-- /.box-header -->