<?php
include_once "../base.php";
// 確認有抓到資料
// echo $_POST['table'];
// echo $_POST['text'];

$db=new DB($_POST['table']);

// 檔案成功上傳 會有tmp_name暫存
if(isset($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}


switch($_POST['table']){


  case"pback":
  case"pfront":
    $data['title']=$_POST['title'];
    $data['text']=$_POST['text'];
    $data['languages']=$_POST['languages'];
    $data['href']=$_POST['href'];
    break;

  case"work":
    $data['year']=$_POST['year'];
    $data['company']=$_POST['company'];
    $data['field']=$_POST['field'];
    $data['position']=$_POST['position'];
    $data['text']=$_POST['text'];
    break;
  
  case"slider":
  case"resume":
    $data['title']=$_POST['title'];
    $data['text']=$_POST['text'];
    break;

  case"education":
    $data['year']=$_POST['year'];
    $data['school']=$_POST['school'];
    $data['major']=$_POST['major'];
    break;
  case"skill":
    $data['level']=$_POST['level'];
    $data['text']=$_POST['text'];
    break;
  case "admin":
    $data['acc']=$_POST['acc'];
    $data['pw']=$_POST['pw'];
  break;
  case "menu":
    $data['text']=$_POST['text'];
    $data['href']=$_POST['href'];
  break;

  default:
  $data['text']=$_POST['text'];
}
// $data['img']="img1.jpg";

$db->save($data);
to("../backend.php?do=".$_POST['table']);

?>