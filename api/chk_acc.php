<?php include_once "../base.php";
// echo $Admin->count($_GET);

$acc=$_GET['acc'];
$chk=$Admin->count(['acc'=>$acc]);
if($chk>0){
    echo "1";
}
?>


