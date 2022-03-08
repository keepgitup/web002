<div id="title">
<?=date("m月 d號 l");?> | 
		<!--首先 total不會放在find()裡面 因為date已經包含了全部 而['total']就是補充說明她是要find哪個細項  -->
        今日瀏覽: <?=$View->find(['date'=>date("Y-m-d")])['total'];
        // 不能寫成($view[total]) 因為物件後面接陣列 怪
        var_dump($View->find(2));?>
        
		
        <?php 
        // echo "<pre>";
        // print_r ($View->find(2)) ;
        // echo "</pre>";
        ?>
        累積瀏覽: <?= $View->math('sum','total');?>
        
        <?php 
        // echo "<pre>";
        // echo $View->math('sum');
        // echo "</pre>";
        ?>
             <a href='index.php' style='float:right'>回首頁</a>
		</div>
        <div id="title2">
        	<a href="index.php" title="健康促進網-回首頁">
				<img src="icon/02B01.jpg" alt="">
			</a>
        </div>