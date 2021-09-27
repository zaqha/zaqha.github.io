<?php include_once "../base.php";

$id=$_POST['id'];
$table=$_POST['table'];

print_r($_POST);

switch($table){
case 'front':
$front=$Front->find(['id'=>$id]);
$front['text']=$_POST['text'];       
$front['title']=$_POST['title'];       
$front['lang']=$_POST['lang'];     
$front['href']=$_POST['href'];
$Front->save($front);
break;

case 'work':
  $work=$Work->find(['id'=>$id]);
  $work['year']=$_POST['year'];       
  $work['company']=$_POST['company'];       
  $work['field']=$_POST['field'];     
  $work['position']=$_POST['position'];
  $work['text']=$_POST['text'];
  $Work->save($work);
  break;
}
to("../backend.php?do=$table");