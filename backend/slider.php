<div class="pb-5">
	<h4 class="fw-bolder">編輯輪播圖</h4>
	<form method="post" action="api\edit.php">
		<table width="100%">
			<tbody>
				<tr>
					<td class="pb-3" width="20%">圖片</td>
					<td class="pb-3" width="20%">標題</td>
					<td class="pb-3" width="20%">描述</td>
					<td class="pb-3" width="10%">顯示</td>
					<td class="pb-3" width="10%">刪除</td>
					<td class="pb-3"></td>
				</tr>
				<?php
				$rows = $Slider->all();
				foreach ($rows as $key => $value) {
				?>
					<tr>
						<td class="pb-3"><img src="img/<?= $value['img']; ?>" style="width: 170px;height: auto;"></td>
						<td class="pb-3"><input type="text" name="title[]" value="<?= $value['title']; ?>"></td>
						<td class="pb-3"><input type="text" name="text[]" value="<?= $value['text']; ?>"></td>
						<td class="pb-3"><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
						<td class="pb-3"><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>
						<td class="pb-3"><input type="button" value="更換動畫" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/slider_update.php?id=<?= $value['id']; ?>&#39;)"></td>
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
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do; ?>.php&#39;)" value="新增輪播圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="hidden" name="table" value="<?= $do; ?>"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>