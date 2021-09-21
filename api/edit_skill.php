<?php include_once "../base.php";

print_r($_POST);
$id=$_POST['id'];
$table=$_POST['table'];

$skills=$Skills->find(['id'=>$id]);
$skills['skill1']=$_POST['skill1'];
$skills['skill2']=$_POST['skill2'];
$skills['skill3']=$_POST['skill3'];
$skills['text']=$_POST['text'];
$Skills->save($skills);

to("../backend.php?do=".$table);