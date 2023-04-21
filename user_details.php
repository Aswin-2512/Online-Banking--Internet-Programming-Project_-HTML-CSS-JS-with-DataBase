<?php

$acc_no=$_POST['acc_no'];
$ph_code=$_POST['ph_code'];
$ph_no=$_POST['ph_no'];
$user_id=$_POST['user_id'];

$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);

$count1="SELECT S_No FROM user_detail
ORDER BY S_No DESC
LIMIT 1";
$result1=$conn->query($count1);
$val_1=$result1->fetch_assoc();
$sno=$val_1['S_No'];
$test=(int)$sno+1;

$insert="insert into user_detail values('$test','$acc_no','$ph_no','$ph_code','$user_id')";
$conn->query($insert);

$conn->close();
header('Location: /password.html');
?>


