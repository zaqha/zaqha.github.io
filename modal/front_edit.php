<?php
include_once "../base.php";
$row=$Front->find($_GET['id']);
?>
<h5 class="fw-bolder" style="padding-left: 1rem; padding-top:1rem">編輯</h5>
<hr>

<form method="post" action="api\edit_modal.php">
  <div class="container">
						<div class="input-group mb-3">
							<span class="input-group-text">標題</span>
							<input type="text" class="form-control" name="title" value="<?= $row['title']; ?>" >
              </div>
              <div class="input-group mb-3">
							<span class="input-group-text">使用語言</span>
							<input type="text" class="form-control" name="lang" value="<?= $row['lang']; ?>" >
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">連結</span>
							<input type="text" class="form-control" name="href" value="<?= $row['href']; ?>" >
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">介紹</span>
							<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="2" style="height: 10vh;"><?= $row['text'] ?></textarea>
						</div>
						<div class="d-flex justify-content-center mt-4">
            <input class="btn btn-secondary"  type="submit" value="確定更新">
						</div>
					</div>
          <input type="hidden" name="table" value="front">
          <input type="hidden" name="id" value="<?=$row['id']?>">
      </div>
	</div>
	</form>