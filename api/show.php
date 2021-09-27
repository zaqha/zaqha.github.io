<?php include_once "../base.php";

$table=$_POST['table'];

switch($table){
  case 'front':
  $row=$Front->find($_POST['id']);
  // if($row['sh']==1){
  //   $row['sh']==0;
  // }else{
  //   $row['sh']==1;
  // }
  $row['sh']=($row['sh']+1)%2;
  $Front->save($row);
  break;

  case 'work':
    $row=$Work->find($_POST['id']);
    // if($row['sh']==1){
    //   $row['sh']==0;
    // }else{
    //   $row['sh']==1;
    // }
    $row['sh']=($row['sh']+1)%2;
    $Work->save($row);
    break;


}