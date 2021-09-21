<div class="pb-5">
	<h4 class="fw-bolder">自我介紹</h4>
	<form method="post" action="api\edit_about.php">
		<table class="mb-3" width="50%" style="margin: auto;">
			<tbody>
				<tr>
					<textarea name="intro" class="form-control section" id="exampleFormControlTextarea1" rows="5" style="height: 55vh;"><?= $Intro->find(1)['intro'] ?></textarea>
				</tr>
			</tbody>
		</table>
					<div class="d-flex justify-content-evenly">
						<input class="btn btn-secondary" type="submit" value="修改確定">
						<input class="btn btn-secondary" type="reset" value="重置">
					</div>
	</form>
</div>