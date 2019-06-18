<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/logo.ico">
	<title>管理員</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
	        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shop.css">

</head>
<body>
	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse media" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><img src="images/home_black.webp"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="story.html">品牌故事 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities.html">遊戲介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="questions.html">常見問題</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">關於我們</a>
                    </li>
                </ul>
            </div>
        </nav>
	</header>
	<br>
	<div class="container">
		<form action="admin.php" method="post">
			<div class="row">
			<!-- 顯示所有訂單 -->
				<div class="col-md-2">
					<input class="btn btn-success" name="searchAll" type="submit" value="顯示全部訂單">
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="search email" aria-label="search email" aria-describedby="basic-addon2">
					  <div class="input-group-append">
					  	<input class="btn btn-success" type="button" value="查詢">
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="search name" aria-label="search name" aria-describedby="basic-addon2">
					 	<div class="input-group-append">
					    	<input class="btn btn-success" type="button" value="查詢">
					  	</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		
	</script>
</body>
</html>



<?php
//資料庫連線
$localhost = 'localhost';
$user = 'root';
$password = '';
$database = 'reservation';
 //進行連線
$db = mysqli_connect($localhost, $user, $password, $database);
if (mysqli_connect_errno()) {
	echo ("Connect failed: ".mysqli_connect_error());
	exit();
}

mysqli_set_charset($db,"utf8");//設定編碼


?>