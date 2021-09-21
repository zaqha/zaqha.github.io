<div class="pb-5">
	<h4 class="fw-bolder pb-2">編輯聯絡資訊</h4>
	<form method="post" action="api\edit.php">
		<table width="100%">
			<tbody>
				<tr>
					<td class="pb-2" width="40%">聯絡資訊標題</td>
					<td width="40%">聯絡資訊</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
				</tr>

				<?php
				$rows = $Contact->all();
				foreach ($rows as $key => $value) {
				?>
					<tr>
						<td class="pb-2"><input class="form-control" type="title" name="title[]" value="<?= $value['title']; ?>" style="width:90%"></td>
						<td class="pb-2"><input class="form-control" type="text" name="text[]" value="<?= $value['text']; ?>" style="width:90%"></td>
						<td class="pb-2"><input class="form-check-input" type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?> style="margin-left:10%"></td>
						<td class="pb-2"><input class="form-check-input" type="checkbox" name="del[]" value="<?= $value['id']; ?>"  style="margin-left:10%"></td>

						<input type="hidden" name="id[]" value="<?= $value['id']; ?>">
					</tr>
				<?php
				}
				?>

			</tbody>
		</table>
	
		<div class="d-flex justify-content-center mt-3">						
			<input class="btn btn-primary me-4" type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增聯絡資訊">
			<input class="btn btn-secondary mx-1" type="button" value="修改確定">
			<input class="btn btn-secondary mx-1" type="reset" value="重置">
			<input type="hidden" name="table" value="<?= $do; ?>">
		</div>
	</form>
</div>