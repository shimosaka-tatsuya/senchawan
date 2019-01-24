$(function(){
	// スクロールイベントの初期値
	var scroll = $(window).scrollTop(); //スクロールの位置を取得
	var windowHeight = $(window).height(); //ウィンドウの高さを取得
	
	$(".box-ScrollAnimaton").each(function(){
		var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
		var minusValue = windowHeight - 96 ;
	
		if (scroll > position - minusValue){ //スクロール位置が要素の位置を過ぎたとき
			$(this).addClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を与える
		} else if (position - windowHeight > scroll) {
			$(this).removeClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を削除
		} else if(scroll == 0) {
			$(this).removeClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を削除
		}
	});

	// ハンバーガーメニューを開いたときにページのスクロールを禁止に
	var state = false;
	var scrollpos;
	
	$('.btn-hamburgerMenu').on('click', function(){
		if(state == false) {
			scrollpos = $(window).scrollTop();
			$('body').addClass('contentScroll-inactive').css({'top': -scrollpos});
			state = true;
		} else {
			$('body').removeClass('contentScroll-inactive').css({'top': 0});
			window.scrollTo( 0 , scrollpos );
			state = false;
		}
	});
});

// スクロールイベント
$(window).scroll(function (){
	var scroll = $(window).scrollTop(); //スクロールの位置を取得
	var windowHeight = $(window).height(); //ウィンドウの高さを取得
	var documentHeight = $(document).height(); //ページの高さを取得
	var maxScrollVlue = documentHeight - windowHeight; //最大のスクロール値
	
	$(".box-ScrollAnimaton").each(function(){
		var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
		var minusValue = windowHeight - 96 ;

		if (scroll > position - minusValue){ //スクロール位置が要素の位置を過ぎたとき
			$(this).addClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を与える
		} else if (position - windowHeight > scroll) {
			$(this).removeClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を削除
		} else if(scroll == 0) {
			$(this).removeClass('box-ScrollAnimaton-active'); //クラス「animationSlideInThumbnail-active」を削除
		}
	});
});