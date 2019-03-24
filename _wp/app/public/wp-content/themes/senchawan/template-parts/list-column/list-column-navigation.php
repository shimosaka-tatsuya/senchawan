<nav class="wp-columnNavigation">
	<?php if (is_page( '2' )) { // トップページ ?>
	<div class="list-columnNavigation list-columnNavigation-all">
	<?php } else if(is_category( 'culture' )) { // culture ?>
	<div class="list-columnNavigation list-columnNavigation-culture">
	<?php } else if(is_category( 'news' )) { // news ?>
	<div class="list-columnNavigation list-columnNavigation-news">
	<?php } else if(is_category( 'product' )) { // product ?>
	<div class="list-columnNavigation list-columnNavigation-product">
	<?php } else { ?>
	<div class="list-columnNavigation list-columnNavigation--tag">
	<?php } ?>
		<div class="btn-columnNavigation btn-columnNavigation-all txt-fontAlphabet">
			<a href="/archive/">All</a>
		</div>
		
		<div class="btn-columnNavigation btn-columnNavigation-culture txt-fontAlphabet">
			<a href="/category/culture/">Culture</a>
		</div>
		
		<div class="btn-columnNavigation btn-columnNavigation-news txt-fontAlphabet">
			<a href="/category/news/">News</a>
		</div>
		
		<div class="btn-columnNavigation btn-columnNavigation-product txt-fontAlphabet">
			<a href="/category/product/">Product</a>
		</div>
		
		<span class="ico-columnNavigation"></span>
	</div><!-- /.list-columnNavigation -->
</nav><!-- /.wp-columnNavigation -->