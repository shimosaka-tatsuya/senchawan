<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="/css/base.min.css">

<?php // 記事ページのスタイル ?>
<?php if( is_single() ) : ?><link rel="stylesheet" type="text/css" href="/css/column-detail.min.css"><?php endif; ?>

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
			<li class="btn-hamburgerMenu">
				<a class="btn-hamburgerMenuInr" href="/">トップ</a><!-- /.btn-hamburgerMenuInr -->
			</li><!-- /.btn-hamburgerMenu -->
			
			<li class="btn-hamburgerMenu">
				<a class="btn-hamburgerMenuInr" href="/about/">アバウト</a><!-- /.btn-hamburgerMenuInr -->
			</li><!-- /.btn-hamburgerMenu -->
			
			<li class="box-hamburgerMenuColumn">
				<p class="ttl-hamburgerMenuColumn">コラム</p><!-- /.ttl-hamburgerMenuColumn -->
				<ul class="list-hamburgerMenuColumn">
					<li class="btn-hamburgerMenuColumn">
						<a class="btn-hamburgerMenuColumnInr" href="/column/">全コラム一覧</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn">
						<a class="btn-hamburgerMenuColumnInr" href="/category/culture/">カルチャー</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn">
						<a class="btn-hamburgerMenuColumnInr" href="/category/news/">ニュース</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
					
					<li class="btn-hamburgerMenuColumn">
						<a class="btn-hamburgerMenuColumnInr" href="/category/product/">プロダクト</a><!-- /.btn-hamburgerMenuColumnInr -->
					</li><!-- /.btn-hamburgerMenuColumn -->
				</ul><!-- /.list-hamburgerMenuColumn -->
			</li><!-- /.box-hamburgerMenuColumn -->
		</ul><!-- /.list-hamburgerMenu -->
		
	</nav><!-- /.box-hamburgerMenu -->
</header><!-- /.box-header -->