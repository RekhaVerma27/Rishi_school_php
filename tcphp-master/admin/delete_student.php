<?php 
include("connection.php");
 $deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
// $qurey=mysqli_query("delete from  student where id='$deleteid' ");
// $del=1;
$q="delete from  student where id='$deleteid' ";
mysqli_query($conn, $q);
header("location:studentlist.php?error=message");

}
?>
