<?php include_once "../base.php";
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>resume</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="slick-theme.css">
</head>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


  <legend>會員登入</legend>
      <td class="clo">帳號:</td>
      <td><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
      <td class="clo">密碼:</td>
      <td> <input type="password" name="pw" id="pw"> </td>
    </tr>
    <tr>
      <td>
        <input type="button" onclick="login()" value="登入">
        <!-- <input type="submit" onclick="location.href='../api/chk_acc.php';"> -->
        <input type="button" value="清除">
      </td>
      <td>
        <a href="?do=forgot">忘記密碼</a>
        <a href="?do=reg">尚未註冊</a>


<script>
function login(){
    let acc=$("#acc").val();
    let pw=$("#pw").val();
    $.get("../api/chk_acc.php",{acc},(res)=>{
        if(res!=1){
            // alert("尚未註冊");
            $('.tab').before('<p style="color:pink">錯誤</p>');
            $('#form').reset();
        }else{
            $.get('../api/chk_pw.php',{acc,pw},(chk)=>{
                if(chk!=1){
                    alert('密碼錯誤')
                  
                }else{
                  console.log(res);
                    if(acc=='admin'){
                        location.href="../backend.php";
                    }else{
                        location.href="../index.php";
                    }
                }
            })
        }
    })
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
