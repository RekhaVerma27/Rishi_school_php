<?php include("session.php");
include("connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$class=$_POST['class'];
$rollno=$_POST['rollno'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$file=$_FILES["image"]["name"];
$tmp_name=$_FILES["image"]["tmp_name"];
$folder = "upload/".$file;
move_uploaded_file($tmp_name,$folder);

/*$name=addslashes($_POST['name']);
$fname=addslashes($_POST['fname']);
$mname=addslashes($_POST['mname']);
$phone=addslashes($_POST['phone']);
$dob=addslashes($_POST['dob']);
$class=addslashes($_POST['class']);
$roll=addslashes($_POST['roll']);
$address=addslashes($_POST['address']);*/

echo $query=("insert into student(name,fname,mname,class,rollno,dob,phone,address,image) values('$name','$fname','$mname','$class','$rollno','$dob','$phone','$address','$folder')");
	$run=mysqli_query($conn,$query);
if($run)
{
				
	header("location:studentlist.php?error3=message");
}

	
?>