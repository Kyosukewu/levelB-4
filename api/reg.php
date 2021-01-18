<?php
include_once "../base.php";

$_POST['regdate']=date("Y-m-d");
// print_r($_POST);
$Mem->save($_POST);
?>