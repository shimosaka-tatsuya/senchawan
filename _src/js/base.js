// ハンバーガーメニューを開いたときにページのスクロールを禁止に
$(function(){
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