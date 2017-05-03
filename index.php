<?php

$url = "http://kawamatsu.pc-ssc.com/";
$images = "http://kawamatsu.pc-ssc.com/images/";

?>


<!DOCTYPE HTML>
<html>
	<?php include "head.php"; ?>
<body>

<div id="wrap">
<?php include "headnav.php"; ?>
	<div id="mainCont">
		<div id="rightCont">
			<div id="visual">
				<p><img src="<?php echo $images; ?>topimage01.png" alt="まず一歩。"></p>
			</div>
		<article id="contents">
			<div class="main">
				<article id="newsList">
					<h2>お知らせ</h2>
					<p class="rightbtn"><a href="news.php" class="bluebtn" target="_blank"><span>更新一覧へ</span></a></p>
<?php
// simple_html_dom.phpをインクルード
 include_once('simple_html_dom.php');

// スクレイピングしたいURLを指定
 $html = file_get_html( 'http://kawamatsu.pc-ssc.com/news.php' );

// 引っ張るものを指定して最新情報上位3つを出力

for($i=0;$i<3;$i++){
$dd[$i] = $html->find('dd',$i);
$dt[$i] = $html->find('dt',$i);

printf('<dl>' . $dt[$i] . $dd[$i] . '</dl><hr>');
}
?>

				</article>
			</div>
		</article>
<p>
※世界一受けたい授業 2013年8月17日放送分より引用<br />
<br />
今年（2013年）の東京大学現役合格者は約1900人。<br />
<br />
その3割近く600人を輩出した進学塾「東進ハイスクール」。<br />
<br />
講師の中で人気No.1なのが、自身も東大出身の現代文の林修先生。<br />
<br />
林修先生が東大入試1ヶ月前に、学生たちへ必ずするという、必勝アドバイスについて明かす。<br />
<br />
林修先生は、学生達へ教師達がひと月前にしてあげられる事は、何もない事を明かした。<br />
<br />
ただ1つだけ言えることは、</p>
<div style="margin:10px; padding:10px; border:#00f double; font-size:15px; font-weight:normal; font-weight:lighter;"><p>
「受験までのひと月にもの凄く頑張って、最大限の努力をしたと自覚を持てるかどうかが非常に大事だ」<br />
<br />
「その自覚が持てれば、大学に合格したしないに関わらず、自分はひと月頑張れるという自信が持てる。」<br />
<br />
「ただ逆に、ひと月頑張らないままに、大学を合格してしまったとしても、自分はひと月も頑張れない人間だと思い、生きていかなければいけなくなる。」
</p></div>
<p>という。</p>

</div>

<?php include "left.php"; ?>

		</div>

<?php include "footer.php"; ?>

</div>

</body>
</html>
