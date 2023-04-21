<?php
$login=$_POST['login_password'];
$transaction=$_POST['transaction_password'];


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

$count2="SELECT User_Id FROM user_detail
ORDER BY S_No DESC
LIMIT 1";
$result2=$conn->query($count2);
$val_2=$result2->fetch_assoc();
$user_id=$val_2['User_Id'];

$insert="insert into passwords (S_No,User_Id,Login_Password,Transaction_password) values('$sno','$user_id','$login','$transaction') ";
$conn->query($insert);

$conn->close();

header('Location: /secret_question.html');
?>
