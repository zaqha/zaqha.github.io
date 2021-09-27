<?php
include_once "../base.php";
$row=$Work->find($_GET['id']);
?>
<h5 class="fw-bolder" style="padding-left: 1rem; padding-top:1rem">編輯</h5>
<hr>

<form method="post" action="api\edit_modal.php">
		<div class="container">
						<div class="input-group mb-3">
							<span class="input-group-text">年分</span>
							<input type="text" class="form-control" name="year" value="<?= $row['year']; ?>" >
							<span class="input-group-text">公司</span>
							<input type="text" class="form-control" name="company" value="<?= $row['company']; ?>">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">領域</span>
							<input type="text" class="form-control" name="field" value="<?= $row['field']; ?>" >
							<span class="input-group-text">職稱</span>
							<input type="text" class="form-control" name="position" value="<?= $row['position']; ?>">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">工作內容</span>
							<textarea name="text" class="form-control section" id="exampleFormControlTextarea1" rows="5" style="height: 25vh;"><?=$row['text']; ?></textarea>
						</div>
						<div class="d-flex justify-content-center">
							<input type="hidden" name="table" value="work">
							<input type="hidden" name="id" value="<?=$row['id']?>">			
							<input class="btn btn-secondary"  type="submit" value="確定更新">									
							<input class="btn btn-secondary mx-1" type="reset" value="重置">
						</div>
		</div>
	</form>