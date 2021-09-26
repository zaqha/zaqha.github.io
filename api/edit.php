<?php include_once "../base.php";

$ids=$_POST['id'];
$table=$_POST['table'];
$db=new DB($table);



foreach($ids as $key => $id){
  // 【刪除】
  if(isset($_POST['del']) && in_array($id,$_POST['del'])) {
    $db->del($id);
  }else{

  // 【修改】
  $row=$db->find($id);

  switch($table){
    case 'back':
    case 'front':
      $row['text']=$_POST['text'][$key];       
      $row['title']=$_POST['title'][$key];       
      $row['lang']=$_POST['lang'][$key];     
      $row['href']=$_POST['href'][$key];       
      break;
    
    case 'work':
      $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
      $row['year']=$_POST['year'][$key];
      $row['company']=$_POST['company'][$key];
      $row['field']=$_POST['field'][$key];
      $row['position']=$_POST['position'][$key];
      $row['text']=$_POST['text'][$key];
    break;

    case 'contact':
      $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
      $row['text']=$_POST['text'][$key];       
      $row['title']=$_POST['title'][$key];       
      break;

    case 'admin':
        $row['acc']=$_POST['acc'][$key];
        $row['pw']=$_POST['pw'][$key];
        break;
      default:
        // $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        // $row['text']=$_POST['text'][$key];    


      }
  $db->save($row);
  }
}


// 【刪除】
// foreach($_POST['del'] as $id){
//   $Title->del($id);
// }

to("../backend.php?do=".$table);

?>