<?php include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$chk=$User->math('count','*',['acc'=>$acc,'pw'=>$pw]);

//echo ($chk>0)?1:0;
if($chk>0){
    // 表帳號密碼存在
    echo 1;
$_SESSION['login']=$acc;
}else{
    // 表帳號密碼錯誤
    echo 0;
}
