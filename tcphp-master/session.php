<?php session_start();
if(empty($_SESSION['rollno']))
{
header("location:index.php");
}
?>
