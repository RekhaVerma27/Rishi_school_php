<?php include('connection.php');

$id=$_POST['id'];
$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);

$sqlu=mysqli_query($conn,"update admin set username='$username',password='$password' where id='$id'");

// if($sqlu)
// {
// 	echo "UPDATED";
// }
header("location: deskboard.php?error=message");
?>

