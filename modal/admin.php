<?php include_once "../base.php";?>
<h3 class="text-center">新增帳號</h3>
<hr>
<form action="api/admin.php" method="post" enctype="multipart/form-data">
<table style="margin:auto">
  <tr>
    <td class="pb-2" style="text-align:right">帳號:</td>
    <td class="pb-2"><input type="text" name="acc" id=""></td>
  </tr>
  <tr>
    <td class="pb-2" style="text-align:right">密碼:</td>
    <td class="pb-2"><input type="password" name="pw" id=""></td>
  </tr>
  <tr>
    <td class="pb-2" style="text-align:right">確認密碼:</td>
    <td class="pb-2"><input type="password" name="pw" id=""></td>
  </tr>
</table>
<div class="text-center">
  <input type="submit" value="新增">
  <input type="hidden" name="table" value="admin">
</div>
</form>
