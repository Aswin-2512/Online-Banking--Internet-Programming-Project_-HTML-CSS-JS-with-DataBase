<?php
$question=$_POST['question'];
$answer=$_POST['answer'];


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

$alter="update passwords SET Question='$question' , Answer='$answer' where S_No='$sno'";
$conn->query($alter);
$conn->close();

header('Location: /ATM_details.html');
?>