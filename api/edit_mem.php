<?php
include_once "../base.php";

// $mem=$Mem->find($_POST['id']);

// $mem['name']=$_POST['name'];
// $mem['tel']=$_POST['tel'];
// $mem['attr']=$_POST['attr'];
// $mem['email']=$_POST['email'];

// $Mem->save($mem);


$Mem->save($_POST); //快速解法

to("../backend.php?do=mem");

?>