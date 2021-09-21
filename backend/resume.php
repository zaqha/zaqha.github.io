<div class="pb-5">
	<h4 class="fw-bolder">編輯自傳</h4>
	<form method="post" action="api\edit.php">
		<table width="100%" class="cent">
			<tbody>
				<tr class="yel">
					<td width="20%">主題</td>
					<td width="50%">履歷</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
				</tr>

				<?php
				$rows = $Resume->all();
				foreach ($rows as $key => $value) {
				?>
					<tr>
						<td class="pb-2"><input type="text" name="title[]" value="<?= $value['title']; ?>"></td>
						<td class="pb-2"><textarea style="width: 95%; height:300px" name="text[]"><?= $value['text']; ?></textarea></td>
						<td class="pb-2"><input type="radio" name="sh" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
						<td class="pb-2"><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>

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
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增聯絡資訊"></td>
					<td class="cent"><input type="submit" value="修改確定">
						<input type="reset" value="重置">
						<input type="hidden" name="table" value="<?= $do; ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</form>

</div>