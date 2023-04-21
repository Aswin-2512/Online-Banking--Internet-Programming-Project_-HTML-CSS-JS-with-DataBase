<html>
    <head>
        <style>
            form{
                color: gold;
                font-size:x-large;
            }
        </style>    
    </head>
    <body>
        <div>
            <form method="POST" action="forgot_pwd_vali.php">
                Re-enter Login Password:<input type="password" name="Login" id="Login" style="margin-left:100px;">
                <br><br>
                Re-enter Transaction Password:<input type="password" name="Transaction" id="Transaction" style="margin-left:50px;">
                <br><br>
                <?php
                $user=$_POST["userid"];
                session_start();
                $_SESSION["session_user"]=$user;

                $servername="localhost";
                $username="Admin";
                $password="REC";
                $dbname="ak international bank";
                
                $conn= new mysqli($servername,$username,$password,$dbname);

                $sql1="select Question from passwords where User_Id='$user' ";
                $result1=$conn->query($sql1);
                $value1=$result1->fetch_assoc();
                $Q=$value1['Question'];
                echo "$Q: ";
                ?>
                <input type="text" name="ans" id="ans">
                <br><br>
                <button style="margin-left:30%;font-size:25px;">Submit</button>
            </form>
        </div>
    </body>
</html>