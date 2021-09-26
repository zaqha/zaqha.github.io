<?php include_once "../base.php";

$row=$Front->find($_POST['id']);
// if($row['sh']==1){
//   $row['sh']==0;
// }else{
//   $row['sh']==1;
// }
$row['sh']=($row['sh']+1)%2;
$Front->save($row);