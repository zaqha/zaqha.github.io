<?php include_once "../base.php";?>
<!-- 【X】echo $as[$do]; 吃不到$do -->
<h3 class="text-center">新增履歷</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto"> 
  <tr>
    <td>標題</td>
    <td><input type="text" name="title" id=""></td>
  </tr>
  <tr>
    <td>內容</td>
    <td><input type="text" name="text" id=""></td>
  </tr>
</table>
<div class="text-center">
  <input type="submit" value="新增">
  <input type="reset" value="重置">
  <input type="hidden" name="table" value="resume"><!-- 目的:知道送過去的資料是做甚麼 -->

</div>
</form>