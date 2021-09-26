<?php include_once "../base.php";

print_r($_POST);
$id=$_POST['id'];
$table=$_POST['table'];


$front=$Front->find(['id'=>$id]);
$front['text']=$_POST['text'];       
$front['title']=$_POST['title'];       
$front['lang']=$_POST['lang'];     
$front['href']=$_POST['href'];
$Front->save($front);


to("../backend.php?do=front");