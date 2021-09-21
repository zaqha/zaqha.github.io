<div class="pb-5">
	<h4 class="fw-bolder">行銷經驗</h4>
	<form method="post" action="api\edit_skill.php">
		<table class="mb-3" width="100%" class="cent">
			<tbody>
				<tr>
					<td width="10%">技能1</td>
					<td><input class="form-control mb-2" type="text" name="skill1" value="<?= $Skills->find(4)['skill1'] ?>"></td>
				</tr>
				<tr>
					<td width="10%">技能2</td>
					<td><input class="form-control mb-2" type="text" name="skill2" value="<?= $Skills->find(4)['skill2'] ?>"></td>
				</tr>
				<tr>
					<td width="10%">技能3</td>
					<td><input class="form-control mb-2" type="text" name="skill3" value="<?= $Skills->find(4)['skill3'] ?>"></td>
				</tr>
				<tr>
					<td width="10%">介紹</td>
						<td><textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="10"><?= $Skills->find(4)['text'] ?></textarea></textarea></td>
					</tr>

			</tbody>
		</table>
		<div class="d-flex justify-content-evenly">
						<input type="hidden" name="id" value="4">
						<input type="hidden" name="table" value="<?= $do;?>">
						<input class="btn btn-secondary" type="submit" value="修改確定">
						<input class="btn btn-secondary" type="reset" value="重置">
		</div>
	</form>
</div>