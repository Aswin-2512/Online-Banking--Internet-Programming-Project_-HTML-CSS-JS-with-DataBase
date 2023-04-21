<?php
session_start();
unset($_SESSION['session_user']);

echo "<script> alert('Successfully Logged Out');";
echo "window.location.href='Login.html'; ";
echo "</script>";

?>