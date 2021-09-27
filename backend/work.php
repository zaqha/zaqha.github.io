<div class="pb-5">

	<h4 class="fw-bolder pb-2">編輯工作經歷
	<button type="button" class="btn btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								新增工作經歷
	</button>
	</h4>
	<form method="post" action="api\edit.php">
		<?php
				$rows = $Work->all();
				foreach ($rows as $key => $value) {
				?>
					<div class="py-4 px-2 mb-4 border border-1 rounded-3">
						<div  class="badge rounded-pill bg-secondary mb-3">no.<?=$key+1?></div>
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
									<button class="show-hide btn btn-secondary mx-1" style="background:<?=($value['sh']==1)?'#0d6efd':'black';?>" data-id="<?=$value['id'];?>"><?=($value['sh']==1)?'顯示':'隱藏';?></button>
									<input class="btn btn-dark mx-1" type="button" value="編輯" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/work_edit.php?id=<?= $value['id']; ?>&#39;)">
									<input class="btn btn-secondary mx-1" type="button" value="刪除">
								</div>
					</div>
		<?php
				}
				?>

						<input type="hidden" name="table" value="<?= $do; ?>">
	</form>
</div>

<script>
$(".show-hide").on('click',function(){
    let id=$(this).data('id')
    switch($(this).text()){
        case "顯示":
            $(this).text("隱藏")
						$(this).css("background-color","black")
        break;
        case "隱藏":
            $(this).text("顯示"),
						$(this).css("background-color","#0d6efd")
        break;
    }
$.post("api/show.php",{'table':'work',id},()=>{
})
})

// 刪除
$(".del-btn").on("click",function(){
    let id=$(this).data('id')
		if(confirm("是否確定刪除?")){
			$.post("api/del.php",{'table':'work',id},()=>{
        location.reload();
    })
		}
else{	}
})


</script>