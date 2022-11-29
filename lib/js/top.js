(function($){
	$(function(){
		// スライダーフェイド

		$('.mv .mv__fade').slick({
			autoplaySpeed: 3000,
			slidesToShow: 1, //スライドが見える数
			slidesToScroll: 1, //スライドがスクロールする数
			speed: 1600, //スライドアニメーションの時間(ms)
			infinite: true, //無限スクロール
			draggable: false, //マウスドラッグでのスクロール
			autoplay: true, //自動再生
			//arrows: false,
			fade:true,
			responsive: [{
				breakpoint: 768,
				settings: {
					arrows:false,
				}
			}]
		});
		//▼最初の縦並び対策 cssで最初の画像以外を非表示に設定
		$('.mv .mv__fade div img').delay(3000).css('display','block');

		// スライダー3つ横並び

		$('.mv .mv__three').slick({
			infinite: true,
			dots: true,
			pauseOnHover:true,
			arrows:true,
			autoplay:true,
			autoplaySpeed: 3000,
			slidesToShow: 1,
			centerMode: true,
			centerPadding: '0px',
			variableWidth : true,
			infinite: true, //無限スクロール
			responsive: [{
				breakpoint: 768,
				settings: {
					variableWidth : false,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows:false,
				}
			}]
		});
	});
})(jQuery)

