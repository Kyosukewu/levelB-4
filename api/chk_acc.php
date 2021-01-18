<?php
include_once "../base.php";

$acc=$_GET['acc'];
$chk=$Mem->count(['acc'=>$acc]);
echo $chk;

// echo $Mem->count(['acc'=>$_GET['acc']]); 簡化

?>