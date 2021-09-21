<?php include_once "../base.php";
session_start();



$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk>0){
    $_SESSION['admin']=1;
    to("../backend.php?do=slider");
}else{
    echo "<script>";
    echo "location.href='../login.php?msg=error'";
    echo "</script>";
    $_SESSION["msg"] = "alert('帳號密碼錯誤');\n";
}

?>