<?php include_once "../base.php";


// 判斷是否已登入
if($Admin->count($_GET)){
    echo $Admin->count($_GET);
    $_SESSION['login']=$_GET['acc'];
};

// $acc=$_GET['acc'];
// $pw=$_GET['pw'];
// echo $Mem->count(['acc'=>$acc,'pw'=>$pw]);

/* $chk=$Mem->count(['acc'=>$acc]);
if($chk>0){
    echo "1";
} */


?>


