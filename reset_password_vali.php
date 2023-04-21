<?php
session_start();
$user=$_SESSION["session_user"]; 

$login=$_POST['Login'];
$transaction=$_POST['Transaction'];
$ans=$_POST['ans'];

$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql1="select Answer from passwords where User_Id='$user' ";
$result1=$conn->query($sql1);
$value1=$result1->fetch_assoc();
$A=$value1['Answer'];

if($A==$ans)
{
    $sql2="update passwords set Login_Password=$login,Transaction_Password=$transaction where User_ID='$user' ";
    $conn->query($sql2);
    echo "<script> alert('Password Updated, Try not to forget it again!!');";
    echo "window.location.href='Balance.php'; ";
    echo "</script>";   
}
else{
    echo "<script> alert('Check your security answer'); ";
    echo "window.location.href='reset_password.php'; ";
    echo "</script>";   
}


?>