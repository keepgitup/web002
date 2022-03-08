<?php
include_once "./base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>健康促進網</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<style>
	.pop{
		background:rgba(51,51,51,0.8); 
		color:#FFF; 
		height:300px; 
		width:300px; 
		position:absolute; 
		display:none; 
		z-index:9999; 
		overflow:auto;
	}

</style>
</head>

<body>
	<div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
		<pre id="ssaa"></pre>
	</div>
	<!-- iframe刪掉 -->
	<!-- <iframe name="back" style="display:none;"></iframe> -->
	<div id="all">
		<?php
		include './front/header1.php';
		?>
		<div id="mm">
			<div class="hal" id="lef">
				<a class="blo" href="?do=po">分類網誌</a>
				<a class="blo" href="?do=news">最新文章</a>
				<a class="blo" href="?do=pop">人氣文章</a>
				<a class="blo" href="?do=know">講座訊息</a>
				<a class="blo" href="?do=que">問卷調查</a>
			</div>
			<div class="hal" id="main">
				<div>
					<!-- 因為還有預設的padding 所以marquee設82的話 會把會員登入擠下去 -->
					<marquee style="width:78%;display:inline-block;">請民眾踴躍投稿,讓電子報成為大家相互交流`分享的的園地,詳見最新文章</marquee>
					<span style="width:18%; display:inline-block;">
					<?php
					if(isset($_SESSION['login'])){

						if($_SESSION['login']=='admin'){
						?>
							歡迎admin，<br><button onclick="location.href='back.php'">管理</button>|<button onclick='logout()'>登出</button>
						<?php
						}else{
						?>
							歡迎<?=$_SESSION['login'];?>，<button onclick='logout()'>登出</button>
						<?php
						}
					?>
					<?php
					}else{
					?>
						<a href="?do=login">會員登入</a>					
					<?php
					}
					?>
					</span>
					<div class="">
						<?php
						// 把其他php當成do,假如有get到 就存到$do 沒有就get home
						$do=$_GET['do']??'home';
						// print_r($do);
						// 再把有存到du變數的 丟到$file 判斷$file有沒有東西
						$file='front/'.$do.".php";
						if (file_exists($file)){
							include $file;
						}else{
							include "./front/home.php";
						}

						?>
					</div>
				</div>
			</div>
		</div>
		<?php
		include './front/footer.php';
		?>
	</div>

</body>

</html>