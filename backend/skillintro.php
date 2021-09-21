<div class="pb-5">
	<h4 class="fw-bolder">技能簡介</h4>
	<form method="post" action="api\edit_skillintro.php">

				<div class="input-group mb-3">
				<span class="input-group-text">簡介標題</span>
				<input class="form-control" type="text" name="title" value="<?= $Intro->find(1)['title'] ?>">
				</div>

				<div class="input-group mb-3">
				<span class="input-group-text">技能簡介</span>
				<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="10"><?= $Intro->find(1)['text'] ?></textarea>
				</div>
		<div class="d-flex justify-content-evenly">
						<input class="btn btn-secondary" type="submit" value="修改確定">
						<input class="btn btn-secondary" type="reset" value="重置">
					</div>

	</form>
</div>