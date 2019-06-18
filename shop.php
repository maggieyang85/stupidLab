<?php

$activity_val = 0;    //活動編號
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

	echo "You have selected :" .$activity_val;  // Displaying Selected Value
	echo "Name :" .$customer_name; 
	echo "Phone :" .$customer_phone; 
	echo "Email :" .$customer_email; 
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


?>