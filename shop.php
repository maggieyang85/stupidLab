<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="images/logo.ico">
		<title>購買</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
	        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	   
	   <!-- calendar script -->
	   <!-- jquery JS -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<!-- Bootstrap js -->
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- Propeller textfield js  -->
		<script type="text/javascript" src="js/node_modules/propellerkit/dist/js/propeller.min.js"></script>
		<!-- Datepicker moment with locales -->
		<script type="text/javascript" language="javascript" src="js/node_modules/moment/min/moment-with-locales.js"></script>
		
		<!-- Propeller Bootstrap datetimepicker -->
		<script type="text/javascript" language="javascript" src="js/node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js"></script>
		<!--  Google Material icons /
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="js/node_modules/propellerkit/dist/css/propeller.min.css">-->
		<link rel="stylesheet" type="text/css" href="js/node_modules/propellerkit-datetimepicker/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" type="text/css" href="js/node_modules/propellerkit-datetimepicker/css/pmd-datetimepicker.css">

	    <!-- Icon CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="css/shop.css">
	    <style src="vuelendar/scss/vuelendar.scss"></style>

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
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="alert alert-success text-center" role="alert">
				  <i class="fas fa-check"></i>訂單新增成功！
				</div>
				</div>
				<div class="col-md-4"></div>
				
			</div>
			</div>
		</div>
	</body>
</html>

<?php

$activity_val = "";   //活動名稱
$activity_date = "";  //活動日期
$activity_time = "";  //活動時間
$activity_person = 0; //參加人數

$customer_name = "";  //訂購人姓名
$customer_phone = "";  //訂購人電話
$customer_email = "";  //訂購人信箱

if($_POST){
	$activity_val = $_POST['activity_select'];  // Storing Selected Value In Variable
	$activity_date = $_POST['data'];
	$activity_time = $_POST['activity_time'];
	$activity_person = $_POST['activity_person'];

	$customer_name = $_POST['customer_name'];
	$customer_phone = $_POST['customer_phone'];
	$customer_email = $_POST['customer_email'];

	//echo "You have selected :" .$activity_val;  // Displaying Selected Value
	//echo "Name :" .$customer_name; 
	//echo "Phone :" .$customer_phone; 
	//echo "Email :" .$customer_email; 
}

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
//mysqli_select_db($db,"reservation"); //連線狀態中更換資料庫
//mysqli_close()//斷掉連接

//insert
$query = ("insert into customer_reservation value(?,?,?,?,?,?,?)");
$stmt = $db -> prepare($query);
$stmt -> bind_param("sissssi",$customer_name,$customer_phone,$customer_email,$activity_val,$activity_date,$activity_time,$activity_person);
$stmt -> execute();


?>