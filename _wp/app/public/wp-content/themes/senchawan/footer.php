<footer class="box-footer">
	<span class="txt-copyright">コピーライト</span>
	<div class="box-snsFollow">
		<a class="btn-sns-facebook" href="#">フェイスブック</a>
		<a class="btn-sns-twitter" href="#">インスタグラム</a>
	</div><!-- /.box-snsFollow -->
</footer><!-- /.box-footer -->

<?php // トップページのみ読み込ませるjs ?>
<?php if (is_home() && !is_paged()) { ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/instafeed.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script>
	// メインビジュアルの設定
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
	
	// インスタグラムの設定
	$(document).ready(function() {
		var feed = new Instafeed({
			target: 'instafeed',
			get: 'user',
			userId: '1505949283',
			accessToken:'1505949283.efb1764.849218d89466419b9d87f6719a6bd991',
			clientId: 'efb17640a588441eac32489b08794145',
			links: true ,
			limit: 8,
			resolution: 'standard_resolution',
			template: '<li class="img-instagram"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></li>'
		});
	
		$('.btn-instagramMore').click(function() {
			feed.next();
		});
		
		feed.run();
	});
</script>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
