<div class="pb-5">
	<h4 class="fw-bolder">編輯學經歷</h4>
	<form method="post" action="api\edit.php">
		<table width="100%" class="cent">
			<tbody>
				<tr class="yel">
					<td width="20%">期間</td>
					<td width="30%">學校</td>
					<td width="30%">主修</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
				</tr>

				<?php
				$rows = $Education->all();
				foreach ($rows as $key => $value) {
				?>
					<tr>
						<td><input type="text" name="year[]" value="<?= $value['year']; ?>"></td>
						<td><input type="text" name="school[]" value="<?= $value['school']; ?>"></td>
						<td><input type="text" name="major[]" value="<?= $value['major']; ?>"></td>
						<td><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
						<td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>

						<input type="hidden" name="id[]" value="<?= $value['id']; ?>">
					</tr>
				<?php
				}
				?>

			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增學經歷"></td>
					<td class="cent"><input type="submit" value="修改確定">
						<input type="reset" value="重置">
						<input type="hidden" name="table" value="<?= $do; ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>