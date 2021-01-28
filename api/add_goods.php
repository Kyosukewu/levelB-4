<?php

include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
}
$_POST['num']=rand(111111,999999);
$_POST['sh']=1;

print_r($_POST);

$Goods->save($_POST);
to('../backend.php?do=th');
?>