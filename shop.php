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
$customer_name = $_POST['customer_name'];
$customer_phone = $_POST['customer_phone'];
$customer_email = $_POST['customer_email'];
echo "You have selected :" .$activity_val;  // Displaying Selected Value
echo "Name :" .$customer_name; 
echo "Phone :" .$customer_phone; 
echo "Email :" .$customer_email; 
}

?>