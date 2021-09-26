<?php
include_once "../base.php";
$db=new DB($_POST['table']);

if(isset($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}


switch($_POST['table']){

  case"work":
    $data['year']=$_POST['year'];
    $data['company']=$_POST['company'];
    $data['field']=$_POST['field'];
    $data['position']=$_POST['position'];
    $data['text']=$_POST['text'];
    break;

  case"contact":
    $data['title']=$_POST['title'];
    $data['text']=$_POST['text'];
    break;

  case"front":
  case"back":
    $data['title']=$_POST['title'];
    $data['text']=$_POST['text'];
    $data['lang']=$_POST['lang'];
    $data['href']=$_POST['href'];    
    break;
    

  default:

}

$db->save($data);
to("../backend.php?do=".$_POST['table']);

?>