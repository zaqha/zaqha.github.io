<div class="pb-5">
	<h4 class="fw-bolder">編輯圖片資訊</h4>
	<form method="post" action="api\edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="30%">圖片</td>
					<td width="20%">放置位置</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
					<td></td>
				</tr>
				<?php
				$rows = $Img->all();
				foreach ($rows as $key => $value) {

				?>
					<tr>
						<td><img src="img/<?= $value['img']; ?>" style="width: 150px;height: 120px;"></td>
						<td>
							<select name="text[]" class="form-select" aria-label="Default select example">
								<option value="#about" <?= ($value['text'] == '#about') ? "selected" : ""; ?>>關於我前</option>
								<option value="#work" <?= ($value['text'] == '#work') ? "selected" : ""; ?>>工作經歷前</option>
								<option value="#resume" <?= ($value['text'] == '#resume') ? "selected" : ""; ?>>自傳前</option>

							</select>
						</td>

						<td><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
						<td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>
						<td><input type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/img_update.php?id=<?= $value['id']; ?>&#39;)"></td>
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
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="hidden" name="table" value="<?= $do; ?>"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>
</div>
</div>