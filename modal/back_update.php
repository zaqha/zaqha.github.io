<?php include_once "../base.php";?>
<h5 class="fw-bolder" style="padding-left: 1rem; padding-top:1rem">更換圖片</h5>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">

    <div class="mt-5 mb-3" style="width:80%; margin:auto"><input class="form-control" type="file" name="img" id=""></div>

<div class="text-center">
  <input class="btn btn-secondary"  type="submit" value="確定更新">
  <input class="btn btn-secondary" type="reset" value="重置">
  <input type="hidden" name="table" value="back">

  <input type="hidden" name="id" value="<?=$_GET['id'];?>">
</div>
</form> 
