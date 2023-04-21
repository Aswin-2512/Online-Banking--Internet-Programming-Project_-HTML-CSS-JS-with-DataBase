<?php
$desti_acc=$_POST['destination'];
$amt=$_POST['amt'];
$pwd=$_POST['t_pwd'];

$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);

session_start();
$user=$_SESSION["session_user"];

$sql="SELECT Account_Number from user_detail where User_Id='$user' ";
$result=$conn->query($sql);
$val=$result->fetch_assoc();
$my_acc=$val['Account_Number'];



$sql1="select * from clients where Account_Number=$desti_acc";
 $result1=$conn->query($sql1);
 if($result1->num_rows >0)
 {
    $val1=$result1->fetch_assoc();
    $desti_balance=$val1['Balance'];
    $desti_new_balance=$desti_balance+$amt;
    $sql2="update clients set Balance=$desti_new_balance where Account_Number=$desti_acc";
    $conn->query($sql2);

    $sql3="select * from clients where Account_Number=$my_acc";
    $result3=$conn->query($sql3);
    $val3=$result3->fetch_assoc();
    $my_balance=$val3['Balance'];
    $my_new_balance=$my_balance-$amt;
    $sql4="update clients set Balance=$my_new_balance where Account_Number=$my_acc";
    $conn->query($sql4);

    $conn->close();

    header('Location: Success.html');
 }
?>