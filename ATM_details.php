<?php
$card_no=$_POST['atm_no'];
$exp_month=$_POST['exp_month'];
$exp_year=$_POST['exp_year'];
$cvv=$_POST['cvv'];


$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);

$count1="SELECT Account_Number FROM user_detail
ORDER BY S_No DESC
LIMIT 1";
$result1=$conn->query($count1);
$val_1=$result1->fetch_assoc();
$user_id=$val_1['Account_Number'];

$insert="insert into atm_details values('$user_id','$card_no','$exp_month','$exp_year','$cvv') ";

$conn->query($insert);
$conn->close();

header('Location: /Login.html');
?>
