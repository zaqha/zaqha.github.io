<?php include_once "../base.php";?>
<h3 class="text-center">新增圖片</h3>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">
<table style="margin:auto">
  <tr>
    <td class="pb-2" style="text-align:right"><input type="file" name="img" id=""></td>
  </tr>
</table>
<div class="text-center">
  <input type="submit" value="新增">
  <input type="reset" value="重置">
  <input type="hidden" name="table" value="img">
</div>
</form>