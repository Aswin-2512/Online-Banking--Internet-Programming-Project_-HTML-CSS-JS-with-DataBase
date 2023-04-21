<html>
    <head>
        <style>
            h1{
                text-align: center;
                color: gold;
            }
            h2{
                color: white;
            }
        </style>
    </head>

<?php
 session_start();
$user=$_SESSION["session_user"];
$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);


// echo "<h>HI ".$userid."</h>";
// $acc_no="123456789011";

$sql="SELECT Account_Number from user_detail where User_Id='$user' ";
$result=$conn->query($sql);
$val=$result->fetch_assoc();
$acc_no=$val['Account_Number'];


$sql1="SELECT * from Clients WHERE Account_Number= $acc_no";
$res=$conn->query($sql1);
$val_2=$res->fetch_assoc();
$card_no=$val_2['Card_Number'];
$name=$val_2['Client_Name'];
$balance=$val_2['Balance'];
$branch=$val_2['Branch'];
echo "<h1>Welcome ".$name."</h1>";
echo "<h2>Account Number: ".$acc_no."</h2>";
echo "<h2>Account Balance: $".$balance."</h2>";
echo "<h2>Bank Branch : ".$branch."</h2>";


?>

</html>