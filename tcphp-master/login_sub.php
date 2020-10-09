<?php session_start();
include("connection.php");
$roll=addslashes($_POST['roll']);
$dob=addslashes($_POST['dob']);
$query=("select * from student where rollno='$roll' and dob='$dob'");
	$run=mysqli_query($conn,$query);

$row=mysqli_fetch_array($run);
if($row)
{
	$_SESSION['rollno']=$row['rollno'];			
	header("location:profile.php");
}
else
	{
	
	header("location:index.php?error=message");
 	}
	
?>