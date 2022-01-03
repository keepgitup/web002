<?php include_once "../base.php";

$acc=$POST['acc'];

$chk=$User->math('count','*',['acc'=>$acc]);
if($chk>0){
    echo 1;
}else{
    echo 0;
}
// 如果是全php 沒有執行任何html 可以省略 ?>
?>