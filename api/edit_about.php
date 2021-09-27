<?php include_once "../base.php";

$introduction=$Intro->find(['id'=>1]);
$introduction['intro']=$_POST['intro'];
print_r($introduction);
$Intro->save($introduction);

to("../backend.php?do=about");
?>