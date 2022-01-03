<?php include_once "../base.php";
$email=$_POST['email'];
// 'email'=>$email] 這事鍵值陣列，所以應該是
// 對應到find的函數
// 針對這個鍵值陣列
// 將資料表的email 欄位 比對 $email變數 後將查詢到的結果回傳給 $user
$user=$User->find(['email'=>$email]);

if(empty($user)){
    echo "查無此資料";
}else{
    echo "您的密碼為:".$user['pw'];
}








?>

