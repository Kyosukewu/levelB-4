<?php include_once "../base.php";

$_POST['pr']=serialize($_POST['pr']);
print_r($_POST);
$Admin->save($_POST);
to("../backend.php?do=main");