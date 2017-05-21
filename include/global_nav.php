<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 350) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);

$("#button").on("click", function(){
  $("#parent").remove();
});

$(function() {
    //windowの幅をxに代入
    var x = $(window).width();
    //windowの分岐幅をyに代入
    var y = 640;
    if (x <= y) {
        $('#nav').attr('id', "nav-ham");
    }
      var y = 768;
      if (y <= x) {
          $('h1').css('display','none');
  }
});

</script>
<header id="top-head">
    <div class="inner">
        <div id="mobile-head">
            <h1 class="logo_ham"><a href="/"><img src="/common/images/logo.png" width="308" height="47" alt="弁護士法人淡路町ドリーム"></a></h1>
            <div id="nav-toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
				<nav id="global-nav">
					<ul id="nav">
        	<li class="pcnone"><a href="/contact/">お問い合わせ</a></li>
        	<li><a href="/flow/">ご相談の流れ</a></li>
        	<li><a href="/business/divorce/">離婚・相続問題</a>
            <span id="s1"></span>
           	<ul class="subs spnone">
                <li><a href="/business/divorce/">離婚問題</a>
                	<ul>
                		<li><a href="/business/divorce/qa/">離婚問題のQ＆A</a></li>
                    	<li><a href="/business/divorce/men/">男性のための離婚</a></li>
                   		<li><a href="/business/divorce/women/">女性のための離婚</a></li>
                    	<li><a href="/business/divorce/case/">解決事例</a></li>
                    	<li><a href="/business/divorce/type/">離婚の種類</a></li>
                    	<li><a href="/business/divorce/dv/">DVでお悩みの方</a></li>
                    	<li><a href="/business/divorce/money/">離婚とお金</a></li>
                    	<li><a href="/business/divorce/rikondojyo/">男性のための離婚道場</a></li>
                    	<li><a href="/business/divorce/child/">離婚と子ども</a></li>
                    	<li><a href="/business/divorce/immorality/">不倫でお悩みの方</a></li>
                    	<li><a href="/business/divorce/morahara/">モラハラでお悩みの方</a></li>
                    	<li><a href="/common/images/business/divorce_after.pdf" target="blank">離婚後の手続き一覧</a></li>
                	</ul>
                </li>
            	<li><a href="/business/divorce/succession/">相続問題</a>
	               	 <ul class="spnone">
	                    <li><a href="/business/divorce/succession/succesion_j.html">我が国の相続についての基本法制</a></li>
	                    <li><a href="/business/divorce/succession/succesion_case.html">相続できる遺産になるものはどんなもの</a></li>
	                   	<li><a href="/business/divorce/succession/succesion_who.html">誰が相続人になるの</a></li>
	                    <li><a href="/business/divorce/succession/succesion_gib.html">相続で誰がどれだけ遺産をもらえるの</a></li>
	                    <li><a href="/business/divorce/succession/succesion_reserved.html">遺言によっても奪えない「遺留分」</a></li>
	                </ul>
            	</li>
            </ul>
        </li>
        <li><a href="/business/building/">不動産・建築問題</a>
            <span id="s2"></span>
            <ul class="subs spnone">
                <li><a href="/business/building/">企業法務</a>
	                <ul>
	                    <li><a href="/business/building/adviser/">顧問契約のご案内</a></li>
	                    <li><a href="/business/building/case/">解決事例</a></li>
	                    <li><a href="/business/building/seminar/">建築・不動産のセミナー</a></li>
	                    <li><a href="/business/building/seminar/seminar_20141211.html">近隣トラブル　～特に一戸建ての対策～</a></li>
	                    <li><a href="/business/building/seminar/seminar_20141016.html">リフォーム工事代金の未収対策</a></li>
	                </ul>
                </li>
            </ul>
     	</li>
        <li><a href="/lawyer/">弁護士紹介</a>
        	<span id="s3"></span>
            <ul class="subs spnone">
            	<li><a href="/lawyer/">弁護士</a>
	                <ul>
	                    <li><a href="/lawyer/matuehitomi.html">松江仁美</a></li>
	                    <li><a href="/lawyer/matueyoriatu.html">松江頼篤</a></li>
	                    <li><a href="/lawyer/iriehideko.html">入江秀子</a></li>
	                    <li><a href="/lawyer/ujiiedaisuke.html">氏家大輔</a></li>
	                    <li><a href="/lawyer/simizurisei.html">清水理聖</a></li>
	                    <li><a href="/lawyer/miyosiryoko.html">三好涼子</a></li>
	                    <li><a href="/lawyer/yamasitahiromi.html">山下洋美</a></li>
	                </ul>
                </li>
            </ul>
        </li>
        <li><a href="/business/enquete/index.html">お客様の声</a>
        </li>
        <li><a href="/fee/">弁護士費用</a>
        	<span id="s5"></span>
        	<ul class="subs spnone">
        		<li><a href="/fee/#divorce-fee">離婚に関する弁護士費用</a>
        		</li>
                	<li><a href="/fee/#succession-fee">相続に関する弁護士費用</a>
                	</li>
        		<li><a href="/fee/#build-fee">建築に関する弁護士費用</a>
        		</li>
        	</ul>
        </li>
        <li><a href="/office/vision.html">事務所紹介</a>
        	<span id="s6"></span>
        	<ul class="subs spnone">
        		<li><a href="/office/vision.html">事務所紹介</a>
        			<ul>
                <li><a href="/office/vision.html">事務所の理念</a></li>
        				<li><a href="/office/">当法人について</a></li>
        			</ul>
        		</li>
        	</ul>
        </li>
        <li class="pc_noactive"><a href="/office/index.html#maplink">アクセス</a>
        </li>
    </ul>
</nav>
</div>
</header>
