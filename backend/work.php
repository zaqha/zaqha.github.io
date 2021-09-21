<div class="pb-5">
	<h4 class="fw-bolder pb-2">編輯工作經歷</h4>
	<form method="post" action="api\edit.php">
		<?php
				$rows = $Work->all();
				foreach ($rows as $key => $value) {
				?>
		<div class="py-4 px-2 mb-4 border border-1 rounded-3" style="background:white">
			<div class="input-group mb-3">
				<span class="input-group-text">年分</span>
				<input type="text" class="form-control" name="year[]" value="<?= $value['year']; ?>" >
				<span class="input-group-text">公司</span>
				<input type="text" class="form-control" name="company[]" value="<?= $value['company']; ?>">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text">領域</span>
				<input type="text" class="form-control" name="field[]" value="<?= $value['field']; ?>" >
				<span class="input-group-text">職稱</span>
				<input type="text" class="form-control" value="<?= $value['position']; ?>">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text">工作內容</span>
				<textarea name="about" class="form-control section" id="exampleFormControlTextarea1" rows="5" style="height: 25vh;"><?=$value['text']; ?></textarea>
			</div>

			<div class="d-flex justify-content-center">						
						<input class="btn btn-secondary mx-1" type="button" value="向上">
						<input class="btn btn-secondary mx-1" type="button" value="向下">
						<input class="btn btn-secondary mx-1" type="button" value="顯示">
						<input class="btn btn-secondary mx-1" type="reset" value="刪除">
					</div>
		</div>
		<?php
				}
				?>

		<table>
			<tbody>
				<tr>
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增技能"></td>
					<td class="cent"><input type="submit" value="修改確定">
						<input type="reset" value="重置">
						<input type="hidden" name="table" value="<?= $do; ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>