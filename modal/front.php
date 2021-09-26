<?php include_once "base.php";?>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto; width:90%"> 
  <tr>
    <td class="pb-2" style="width: 80px;">截圖:</td>
    <td class="pb-2" style="text-align:right"><input class="form-control" type="file" name="img" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">標題:</td>
    <td class="pb-2"><input class="form-control" type="text" name="title" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">介紹:</td>
    <td class="pb-2"><input class="form-control" type="text" name="text" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">網頁語言:</td>
    <td class="pb-2"><input class="form-control" type="text" name="lang" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">連結網址:</td>
    <td class="pb-2"><input class="form-control" type="text" name="href" id=""></td>
  </tr>
</table>
<div class="text-center">
<input  class="btn btn-primary" type="submit" value="確定新增">
  <input  class="btn btn-secondary" type="reset" value="重置">
  <input type="hidden" name="table" value="front">
</div>
</form>