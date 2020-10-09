<?php session_start();
include("connection.php");
echo$username=addslashes($_POST['username']);
echo$pass=addslashes($_POST['password']);
$query=mysqli_query("select * from admin where username='$username' and password='$pass'");
$row=mysqli_fetch_array($query);
echo $row;
if($row)
{
	$_SESSION['id']=$row['id'];			
	header("location:deskboard.php");
}
else
	{
	
	header("location:index.php?error=message");
 	}
	
?>