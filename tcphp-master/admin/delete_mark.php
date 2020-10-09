<?php 
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
$q="delete from  marksheet where id='$deleteid' ";
mysqli_query($conn, $q);

header("location:marksheet.php?error=message");

}
?>
