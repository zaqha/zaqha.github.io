<div class="pb-5">
	<h4 class="fw-bolder">編輯前端作品集</h4>
	<form method="post" action="api\edit.php">
		<table width="100%" class="cent">
			<tbody>
				<tr class="yel">
					<td width="5%">截圖</td>
					<td width="5%">標題</td>
					<td width="5%">介紹</td>
					<td width="5%">使用語言</td>
					<td width="5%">連結</td>
					<td width="5%">顯示</td>
					<td width="5%">刪除</td>

				</tr>

				<?php
				$rows = $Front->all();
				foreach ($rows as $key => $value) {
				?>
					<tr>
						<td><img src="img/<?= $value['img']; ?>" style="width: 150px;height: 100px;"></td>
						<td><input type="text" name="title[]" value="<?= $value['title']; ?>"></td>
						<td><input type="text" name="text[]" value="<?= $value['text']; ?>"></td>
						<td><input type="text" name="languages[]" value="<?= $value['languages']; ?>"></td>
						<td><input type="text" name="href[]" value="<?= $value['href']; ?>"></td>
						<td><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
						<td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>

						<input type="hidden" name="id[]" value="<?= $value['id']; ?>">
						<td><input type="button" value="更換動畫" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/pfront_update.php?id=<?= $value['id']; ?>&#39;)"></td>
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