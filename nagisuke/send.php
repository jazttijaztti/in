<?php
$post=$_POST;
$id=$post["id"];
$name=$post["name"];
$tel=$post["age"];
$email=$post["sex"];

?>
<?php if ($name=="ドトール" or $name=="doutor" or $name=="ドトールコーヒー") {
$text1 ="ドトールコーヒーショップ";
$text2 ="ドトール好きが";
$url ="http://www.doutor.co.jp";
$text3="2017.08.17 ドトール好き必見！！！コーヒー豆や器具が10％でOFFで購入できる！「感謝デー」";
}elseif ($name=="スタバ"){
$text1 ="スターバックスコーヒー";
$text2 ="スタバ好きが";
$url="http://yahoo.co.jp";
$text3="スタバ好き必見！　コーヒー無料キャンペーン実施中";
}
?>
<!DOCTYPE html>
<html>

<head>

	<title>ドトールコーヒーショップ</title>
	<meta charset="utf-8">
	<link href="defcss.css" rel="stylesheet">
	<link rel="stylesheet" href="dotol.css">

</head>

<body>

<div id="wrapper">
	
	<div id="header">
		<p><img src="dlogo.png"></p>	
	</div>

	<div id="menubox">
		<ul>
			<li>ホーム</li>
			<li>メニュー</li>
			<li>コーヒー豆・製品</li>
			<li>サービス</li>
			<li>おいしさへのこだわり</li>
			<li>アレルギー・栄養成分情報</li>
		</ul>
	</div>

	<div id="content">
		<p><?php echo $text2;?>が大好きなショップ
		<?php echo $url;?>≫</a>
		<?php echo $text1;?>　トップ</p>
	</div>

	<div id="content1">

	<div id="mainimg">
		<img src="top.png">
	</div>

	<div id="box1">
		<img src="01r.jpg">
		<img src="02r.jpg">
		<img src="03r.jpg">
		<img src="04r.jpg">
	</div>

	</div>

	<div id="info">
		<p>Information</p>
	</div>

	<div id="content2">

	<div id="topcs">

	<div id="infobox">
		<dt><?php echo $text3;?></dt>
		<dt>2017.08.07 ドトール バリューカード残高合算サービス始まりました。</dt>
		<dt>2017.07.27 ドトール バリューカードで400円買うごとにチャンス！ 「バリューくじキャンペーン」を8月3日（木）より開催！</dt>
		<dt>2017.07.13 暑い季節でもサッパリ爽やか！『ピクルスドック』期間限定新発売!</dt>
		<dt>2017.07.03 ジャパンメイドの食材を巡るドトールジャーニー第2弾。産地にこだわったドリンクメニューが7月13日に新発売!</dt>
		<dt>2017.07.01 ドトールこだわりの“涼ギフト”を、お世話になったあの方へ。</dt>
		<dt>2017.06.05 ジャパンメイドの食材を巡るドトールジャーニー。産地にこだわったミラノサンドやドリンクメニューが 6月15日に新発売! </dt>

	</div>

	<div id="box2">
		<img src="journey.jpg">
		<img src="summer.jpg">
		<img src="gift.jpg">
		<img src="thanksday.jpg">
	</div>

	</div>

	<div id="box3">
		<img src="recruit.jpg">
		<img src="shopsearch.jpg">
		<img src="dvc.png">
		<img src="money.jpg">
		<img src="brand.jpg">
	</div>

	</div>

	<div id="box4">
		<img src="point.jpg">
		<img src="tpoint.jpg">
		<img src="oishii.jpg">
	</div>

</div>
<?php }?>
</body>
</html>

<?php elseif ($name=="スタバ" or $name=="starbucks" or $name=="スターバックスコーヒー" or $name=="スターバックス") {?>

<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<link rel="stylesheet" href="defcss.css">
<link rel="stylesheet" href="starbucks.css">

	<title>starbucks</title>

</head>

<body>

<div id="wapper">

<div id="side1">
	<div id="logo">
		<img src="starlogo.jpg">
	</div>

	<div id="menubox">
	<ul>
		<li>Coffee</li>
		<li>Cafe</li>
		<li>Company &amp; Job</li>
		<li>Service &amp; Login</li>
	</ul>

	</div>

	<div id="side1-foot">
		<p>English</p>
		<p>International</p>
	</div>

</div>

	<div id="main-img">
		<img src="starmain.jpg">
	</div>

	<div id="guide">
		<p>弊社ホームページにおけるセキュリティ強化に関する重要なお知らせ</p>
		<p>オークションサイトなどで購入したスターバックスカードおよびStarbucks eGiftについてのご注意</p>
		<p>「STARBUCKS TOUCH The Drip」の再販売についてのご案内</p>

		<div class="swich">
		<p>一覧</p>
		</div>
		
	</div>


<div id="side-box">

	<div id="info-box">
		<div class="boxtitle">
			<p>What’s Brewing</p>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="starinfo4.jpg">
			</div>
			<div class="box-text">
				<p>[新商品情報] グレーピー グレープ &amp; ティー ジェリー フラペチーノ®</p>
				<p class="date">17.09.01</p>
			</div>	
		</div>
		<div class="box">
			<div class="box-img">
				<img src="starinfo5.jpg">
			</div>
			<div class="box-text">
				<p>スターバックス  リザーブ®に新たに2品登場。オンラインストアでもご購入いただけます。</p>
				<p class="date">17.09.06</p>
			</div>	
		</div>
		<div class="box">
			<div class="box-img">
				<img src="starinfo6.jpg">
			</div>
			<div class="box-text">
				<p>9/5より対象のTEAビバレッジを3杯ご購入の方に、先着でパッカブルバッグをプレゼント！</p>
				<p class="date">17.09.04</p>
			</div>	
		</div>
		<div class="box">
			<div class="box-img">
				<img src="starinfo1.jpg">
			</div>
			<div class="box-text">
				<p>【新商品】「エスプレッソ」「抹茶ラテ」がリニューアルして、コンビニエンスストアに登場</p>
				<p class="date">17.09.05.</p>
			</div>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="starinfo2.jpg">
			</div>
			<div class="box-text">
				<p>コーヒー本来の味わいを存分に楽しめるコーヒープレス。作り方のコツをご紹介。</p>
				<p class="date">17.09.01</p>
			</div>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="starinfo3.jpg">
			</div>
			<div class="box-text">
				<p>オンラインストア限定スターバックス カード付ギフトセット。</p>
				<p class="date">17.09.01</p>
			</div>	
		</div>

		<div class="box">
			<p style="font-size: 12px;">季節のおすすめ商品はこちら。</p>
			<p class="date" style="font-size: 12px;">17.09.01</p>
		</div>
	</div>

	<div id="pickup">

		<div class="boxtitle">
		<p>Pick Up</p>
		</div>

		<div class="pickup-box">
			
			<div class="pickbox">
				<div class="pickup-img">
					<img src="pick1.jpg">
				</div>
				<div class="pickup-text">
					<p>スターバックス ジャパン公式 モバイルアプリ登場</p>
				</div>
			</div>

			<div class="pickbox">
				<div class="pickup-img">
					<img src="pick2.jpg">
				</div>
				<div class="pickup-text">
					<p>My Starbucks会員サービスへの登録はこちら</p>
				</div>
			</div>

			<div class="pickbox">
				<div class="pickup-img">
					<img src="pick3.png">
				</div>
				<div class="pickup-text">
					<p>[採用情報]<br>
					地域限定正社員募集中！</p>

				</div>
			</div>
			
		</div>

		<div id="boxtitle">
				<p>News</p>
		</div>

		<div class="news-box">
			
			<div class="news-text">
				<p>9月9日はみんなでエシカルなコーヒーを楽しむ一日！</p>
				<p class="date">17.08.29</p>
			</div>

			<div class="news-text">
				<p>Cath Kidstonデザインのコラボレーショングッズが日本限定初登場</p>
				<p class="date">17.08.28</p>
			</div>

			<div class="news-text">
				<p>スターバックスチルドカップ「エスプレッソ」「抹茶ラテ」リニューアル</p>
				<p class="date">17.08.25</p>
			</div>
			<div class="news-text">
				<p>『グレーピー　グレープ&amp;ティージェリーフラペチーノ』など新ビバレッジ3種が新登場</p>
				<p class="date">17.08.24</p>
			</div>
			<div class="news-text">
				<p>「スターバックス　オリガミパーソナルドリップコーヒー」ギフトに「ブロンド　ロースト」のコーヒーが加わり新登場！</p>
				<p class="date">17.07.07</p>
			</div>
			<div class="news-text">
				<p>『スモア　フラペチーノ　クリスピー　マシュマロ』が8月10日（木）新登場</p>
				<p class="date">17.08.03</p>
			</div>
			<div class="news-text">
				<p>JR東日本の駅改札内初のスターバックス店舗が、JR秋葉原駅構内にオープン</p>
				<p class="date">17.07.06</p>
			</div>
			<div class="news-text">
				<p>『キーライム　クリーム&amp;ヨーグルト　フラペチーノ』が7月14日（金）より期間限定で登場</p>
				<p class="date">17.06.29</p>
			</div>
			<div class="news-text">
				<p>『スターバックス　コーヒー京都二寧坂ヤサカ茶屋店20me17年6月30日オープン</p>
				<p class="date">17.06.22</p>
			</div>

		</div>
	</div>


</div>

	<div id="footer">

	<div class="foot-navi1">
		<ul>
			<li>公式ブログ</li>
			<li>Twitter</li>
			<li>Facebook</li>
			<li>mixi</li>
			<li>instagram</li>
			<li>Pinterest</li>
			<li>Sumaliy</li>
		</ul>
	</div>

	<div class="foot-navi2">
		<ul>
			<li>会員登録</li>
			<li>よくあるご質問・お問い合わせ</li>
			<li>使用条件</li>
			<li>ポリシー・約款・規約一覧</li>
			<li>サイトマップ</li>
		</ul>
	</div>

	<div class="foot-text">
		<p>@2017 Starbucks Coffee Company. All Right Reserved.</p>
	</div>

	</div>


</div>

</body>
</html>

<?php } ?>

