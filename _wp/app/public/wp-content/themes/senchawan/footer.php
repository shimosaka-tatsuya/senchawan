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
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
