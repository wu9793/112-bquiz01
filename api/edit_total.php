<?php
include_once "db.php";
$_POST['total'];
$total=$Total->find(1);
$total['total']=$_POST['total'];
$Total->save($total);
to("../back.php?do=total");
?>