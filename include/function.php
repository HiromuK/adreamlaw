<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/common/scripts/respond.min.js"></script>
<script>

  //トップへ戻る
  $(function() {
    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > 10) {
        topBtn.fadeIn();
      } else {
        topBtn.fadeOut();
      }
    });
    //スクロールしてトップ
    topBtn.click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });

  //スライダー
  $(document).ready(function(){
    $('.bxslider').bxSlider({
    auto: false,
    speed: 0,
    pause: 0,
    mode: 'fade'
    });
    //トグルメニュー
    $(function(){
      $("#toggle").click(function(){
        $("#menu").slideToggle();
        return false;
      });
      $(window).resize(function(){
        var win = $(window).width();
        var p = 480;
        if(win > p){
          $("#menu").show();
        } else {
          $("#menu").hide();
        }
      });
    });
  });

  //タブ
  $(document).ready(function(){
  		$('#tabwrap').basicTabs();
  });

  $(function() {
    $('ul.delay-show li')
    .css({opacity: 0})
    .each(function(i){
      $(this).delay(500 * i).animate({opacity:1}, 1500);
    });
  });

  //電話発信制御
  $(function() {
    if (!isPhone())
      return;
    $('span[data-action=call]').each(function() {
      var $ele = $(this);
      $ele.wrap('<a href="tel:' + $ele.data('tel') + '"></a>');
    });
  });

  //スマホ表示切替
  function isPhone() {
    return (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0);
  }

  //グローバルメニュー
  $(function(){
  	var menuBtn =$("#global"),
  		menuContent = $("#nav");
  	menuBtn.click(function(){
  		menuContent.slideToggle();
  	});
  	$(window).resize(function(){
  		var win = $(window).width(),
  			p = 960;
  		if(win >p){
  			menuContent.show();
  		}else{
  			menuContent.hide();
  		}
  	});
  	$("#nav > li").click(function(e){
  		$(this).children('ul').slideToggle('fast').parent().siblings().children("ul:visible").hide('fast');
  	});
  });
  $(function(){
  	var menuBtn =$(".global2"),
  		menuContent = $(".nav2");
  	menuBtn.click(function(){
  		menuContent.slideToggle('fast');
  	});
  	});

  //サイドバー追尾
  (function(){
   $(function(){
   var fix = $('.sub_contact'), //固定したいコンテンツ
   side = $('#page_side'), //サイドバーのID
   main = $('body'), //固定する要素を収める範囲
   sideTop = side.offset().top;
   fixTop = fix.offset().top,
   mainTop = main.offset().top,
   w = $(window);
    
   var adjust = function(){
   fixTop = fix.css('position') === 'static' ? sideTop + fix.position().top : fixTop;
   var fixHeight = fix.outerHeight(true),
   mainHeight = main.outerHeight(),
   winTop = w.scrollTop();
   if(winTop + fixHeight > mainTop + mainHeight){
   fix.css({
   position: 'absolute',
   top: mainHeight - fixHeight
   });
   }else if(winTop >= fixTop){
   fix.css({
   position: 'fixed',
   top: 0
   });
   }else{
   fix.css('position', 'static');
   }
   }
   w.on('scroll', adjust);
   });
  })(jQuery);
  $(function(){
  	var menuBtn =$("#global"),
  		menuContent = $("#nav");
  	menuBtn.click(function(){
  		menuContent.slideToggle();
  	});
  	$(window).resize(function(){
  		var win = $(window).width(),
  			p = 960;
  		if(win >p){
  			menuContent.show();
  		}else{
  			menuContent.hide();
  		}
  	});
  	$("#nav > li").click(function(e){
  		$(this).children('ul').slideToggle('fast').parent().siblings().children("ul:visible").hide('fast');
  	});
  });
  $(function(){
  	var menuBtn =$(".global2"),
  		menuContent = $(".nav2");
  	menuBtn.click(function(){
  		menuContent.slideToggle('fast');
    });
  });

  /* ヘッダー固定   */
  $(function() {
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 80) {
        $('.header').addClass('fixed_01');
      } else {
        $('.header').removeClass('fixed_01');
      }
    });
  });

</script>

<!-- GS Yahoo! Tag Manager -->
<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=2y6GWNB";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=2y6GWNB" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- GS Yahoo! Tag Manager -->
