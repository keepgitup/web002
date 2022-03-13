<?php //include_once "../base.php";

$id=$_GET['id'];
$news=$News->find($id);
print_r ($news);
//new line to br
echo nl2br($news['text']);

?>