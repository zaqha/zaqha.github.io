<?php include_once "base.php";?>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto; width:90%">
  <tr>
    <td class="pb-2">聯絡資訊標題:</td>
    <td class="pb-2"><input class="form-control" type="text" name="title"></td>
  </tr>
  <tr>
    <td class="pb-2">聯絡資訊:</td>
    <td class="pb-2"><input class="form-control" type="text" name="text"></td>
  </tr>
</table>
<div class="text-center modal-footer mt-3">
<input  class="btn btn-primary" type="submit" value="確定新增">
  <input  class="btn btn-secondary" type="reset" value="重置">
  <input type="hidden" name="table" value="contact">
</div>
</form>