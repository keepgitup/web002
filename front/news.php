<div>目前位置:首頁>最新文章區</div>
<fieldset>
<legend>最新文章區</legend>
<table>
<tr>
    <td width="30%">標題</td>
    <td width="50%">內容</td>
</tr>
<?php
$total=$News->math("count","*");
$div=5;
$pages=ceil($total/$div);
$now=$_GET['p']??1;
//從哪一筆資料開始撈 
$start=($now-1)*$div;
$rows=$News->all(['sh'=>1],"limit $start,$div");
foreach ($rows as $key=>$row){}
?>
<!-- 要準備用substring了 才能抓到文章一些內容 -->
<tr>
    <td class="switch"><?=($row['title'];?></td>
    <td class="switch">
<div class="short"><?=?></div>
<div class="full"></div>

    </td>
    
    
</tr>

</table>

</fieldset>