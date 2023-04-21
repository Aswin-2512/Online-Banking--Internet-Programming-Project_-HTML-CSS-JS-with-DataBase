<?php
$user_id=$_POST['userid'];
$pwd=$_POST['pwd'];

$servername="localhost";
$username="Admin";
$password="REC";
$dbname="ak international bank";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql="SELECT * FROM passwords WHERE User_Id= '$user_id' ";
$result=$conn->query($sql);
$val_1=$result->fetch_assoc();

$usercount=$result->num_rows;

if($usercount>0)
{
    $count1="SELECT Account_Number FROM user_detail WHERE User_Id= '$user_id'";
    $result1=$conn->query($count1);
    $val_2=$result1->fetch_assoc();
    $accno=$val_2['Account_Number'];
    // $userid=$val_2['User_Id'];

    if($pwd != $val_1['Login_Password'] )
    {
        header('Location: /Login.html');
    }
    else
    {
        session_start();
        $_SESSION["session_user"]=$user_id;
        header('Location: /Home.html');
    
    }
}
else
{
    echo '<script>alert("Invalid Userid and password")</script>';
    //header('Location: /Login.html');
}



$conn->close();
?>





