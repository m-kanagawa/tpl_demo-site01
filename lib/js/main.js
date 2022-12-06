jQuery(function($){

	$(function(){
		$(".page_top").hide();
		$(window).on("scroll", function() {
				if ($(this).scrollTop() > 100) {
					$(".page_top").fadeIn("fast");
				} else {
					$(".page_top").fadeOut("fast");
				}
				scrollHeight = $(document).height();
				scrollPosition = $(window).height() + $(window).scrollTop();
				footHeight = $("footer").innerHeight();
				if ( scrollHeight - scrollPosition	<= footHeight ) {
					$(".page_top").css({
						"position":"absolute",
						"right": "20px",
						"bottom": footHeight - 20
					});
					$(".page_top").addClass("stop");
				} else {
					$(".page_top").css({
						"position":"fixed",
						"bottom": "20px",
						"right": "20px"
					});
					$(".page_top").removeClass("stop");
				}
		});
		$('.page_top').click(function () {
			$('body,html').animate({
			scrollTop: 0
			}, 400);
			return false;
		});
	});




// 動きのきっかけとなるアニメーションの名前を定義
function cssAnime() {
	$('.js-ani').each(function () { //js-aniというクラス名が
		var elemPos = $(this).offset().top + 80;//要素より、200px下の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight) {
			$(this).addClass('js-ani-on');// 画面内に入ったらjs-ani-onというクラス名を追記
		} else {
			$(this).removeClass('js-ani-on');// 画面外に出たらjs-ani-onというクラス名を外す
			//一度だけ動かしたい場合は削除
		}
	});
}

//テキストを1文字ずつ span で分割
function cssAnimeSplit() {
	$('.js-split').children().addBack().contents().each(function() {
		$(this).replaceWith($(this).text().replace(/(\S)/g, '<span class="char">$&</span>'));
	});
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	cssAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	cssAnime();/* アニメーション用の関数を呼ぶ*/
	cssAnimeSplit();//テキストを1文字ずつ span で分割
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述


$(".entry-content > .inner > *").addClass("js-ani fadeInUp");

	// Gナビ＆ドロワーメニュー設定

	//Gナビにカレント表示する（階層構造にも対応）
	$(".header-nav__list a").each(function(){
		if(this.href == location.href) {
			$(this).parents("li").addClass("current");
		}
	});

	//ドロワーメニュー
	$('.toggle-box__btn,.toggle-box__bg').on('click', function () {
		$('.header-nav').toggleClass('open');
	});

	//ドロワーメニュー内のアンカーリンクをクリックした時にドロワーメニューを閉じる
	$('.header-nav__list .js_close_menu').on('click', function(){
		$('.header-nav').removeClass('open');
	});

	//ドロワーメニューの子要素がある親要素にクラスを追加
	// $('.header-nav__list .sub-menu').parent().addClass("li-parent");

	// ブラウザサイズの条件分岐:反映確認にはブラウザの更新が必要
	var windowWidth = $(window).width();
	var windowSm = 768;
	if (windowWidth <= windowSm) {
	//横幅768px以下（スマホ）に適用させるJavaScriptを記述
		//ドロワーメニューのアコーディオン
		$('.header-nav__list a[href^=#]').click(function(){
			$(this).next('.sub-menu').slideToggle();
			$(this).toggleClass('open_menu');
			return false;//上部にスクロールされる問題を解決
		});
	} else {
	//横幅768px以上（PC、タブレット）に適用させるJavaScriptを記述
		//PCナビのドロップダウン
		$('.header-nav__list li').hover(function(){
			$("ul:not(:animated)", this).slideDown(200);
		}, function(){
			$("ul.sub-menu",this).slideUp(200);
		});
	}



  $(function(){

    //スムーススクロールでドロワーメニューのアコーディオンだけ除外
    $('a[href^="#"]').not('.header-nav__list a').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });



		$( '#zip_code' ).keyup( function() {
			AjaxZip3.zip2addr( this, '', 'address','address' );
		});


		let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
		$(".tab").on("click", function() { // tabをクリックしたらイベント発火
			$(".is-active").removeClass("is-active"); // is-activeクラスを消す
			$(this).addClass("is-active"); // クリックした箇所にactiveクラスを追加
			const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
			$(".panel").removeClass("is-show").eq(index).addClass("is-show"); // is-showクラスを消して、contentクラスのindex番目にis-showクラスを追加
		})


    // 高さ調整
    // $('.top-four-item h3').matchHeight();
    // $('.top_kiji_txt').matchHeight();

    $(".custom_gallery").colorbox({
      rel:'slideshow',
      //slideshow:true,
      //slideshowSpeed:3000,
      maxWidth:"90%",
      maxHeight:"90%",
      opacity: 0.7
    });
    $(".lightbox li a").colorbox({
      rel:'slideshow',
      maxWidth:"90%",
      maxHeight:"90%",
      opacity: 0.7
    });

  });
});
