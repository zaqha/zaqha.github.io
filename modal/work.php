<?php include_once "base.php";?>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto; width:90%"> 
  <tr>
    <td class="pb-2">期間:</td>
    <td class="pb-2"><input type="text" class="form-control" name="year" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">公司:</td>
    <td class="pb-2"><input type="text" class="form-control" name="company" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">公司領域:</td>
    <td class="pb-2"><input type="text" class="form-control" name="field" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">職稱:</td>
    <td class="pb-2"><input type="text" class="form-control" name="position" id=""></td>
  </tr>
  <tr>
    <td class="pb-2">工作內容:</td>
    <td class="pb-2 "><textarea  class="form-control section" style="width: 100%; height:200px" name="text"></textarea></td>
  </tr>
</table>
<div class="text-center modal-footer">
  <input  class="btn btn-primary" type="submit" value="確定新增">
  <input  class="btn btn-secondary" type="reset" value="重置">
  <input type="hidden" name="table" value="work">
</div>
</form>