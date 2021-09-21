<?php include_once "base.php";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>backend</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body class="bg">
<div id="cover " style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!-- 圖 -->
			<!--標題-->
		<div class="row my-5" style="width: 80%; margin:auto;">
			<div class="col-3 p-4 panelbg1">
				<div id="menuput " >
					<!--主選單放此-->
					<h3 class="text-end m-3 fw-bolder">管理選單</h3>
					<div class=" nav flex-column nav-pills me-3">	
							<a  class="text-end lh-lg" href="./backend.php?do=about">
								<div> 基本自我介紹</div>
							</a>
							<a class="text-end lh-lg" href="?do=skillintro">
								<div > 技能介紹 </div>
							</a>
							<a class="text-end lh-lg" href="?do=web">
								<div class=""> 網頁設計技能 </div>
							</a>
							<a class="text-end lh-lg" href="?do=design">
								<div class=""> 平面設計技能  </div>
							</a>
							<a class="text-end lh-lg" href="?do=english">
								<div class=""> 英文能力  </div>
							</a>
							<a class="text-end lh-lg" href="?do=marketing">
								<div class="">	行銷經歷</div>
							</a>
							<a class="text-end lh-lg" href="?do=work">
								<div class=""> 工作經歷 </div>
							</a>
							<a class="text-end lh-lg" href="?do=contact">
								<div class=""> 聯絡資訊 </div>
							</a>
							<a class="text-end lh-lg" href="?do=front">
								<div class=""> 前端作品集</div>
							</a>
							<a class="text-end lh-lg" href="?do=back">
								<div class=""> 後端作品集</div>
							</a>
							<a class="text-end lh-lg" style="font-size:17px; text-decoration:none;" href="?do=admin">
								<div class="mainmu"> 帳號 </div>
							</a>
						</div>
				</div>
			</div>
			<div class="panelbg2 col-9 section" style="">
				<!--正中央-->

						<div class="d-flex justify-content-end my-3">
							<div><button class="btn btn-dark" onclick="location.replace(&#39;api/logout.php&#39;)"
                  style="margin-right:7px;">管理登出</button></div>

							<div><button class="btn btn-dark" onclick="location.replace(&#39;index.php&#39;)"
							style="margin-right:2px;">首頁</button></div>
						</div>

        <main class="container">
				<?php
						$do=(isset($_GET['do']))?$_GET['do']:'about';
						$file="backend/".$do.".php";
						//先判斷檔案是否存在 
						// 動態載入檔案
						if(file_exists($file)){
						include $file;
						}else{
							include "backend/about.php";
						}
				?>
        </main>
		</div>
		<div style="clear:both;"></div>


  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js.js"></script>
</body>
</html>