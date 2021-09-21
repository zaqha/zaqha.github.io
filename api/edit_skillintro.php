<?php include_once "../base.php";

$introduction=$Intro->find(['id'=>1]);
$introduction['title']=$_POST['title'];
$introduction['text']=$_POST['text'];
$Intro->save($introduction);

to("../backend.php?do=skillintro");
?>