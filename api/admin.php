<?php
include_once "../base.php";
  $db=new DB($_POST['table']);
  $data['acc']=$_POST['acc'];
  $data['pw']=$_POST['pw'];

  $db->save($data);
  to("../backend.php?do=".$_POST['table']);