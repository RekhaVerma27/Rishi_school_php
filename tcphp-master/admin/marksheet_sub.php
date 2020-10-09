<?php include("session.php");
include("connection.php");

$roll=addslashes($_POST['roll']);
$category=addslashes($_POST['category']);
$sql=mysqli_query($conn,"select * from student where rollno='$roll'");
$row=mysqli_fetch_array($sql);

$id=$row['id'];
$dob=$row['dob'];
$file=$_FILES["file"]["name"];
$tmp_name=$_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name,"upload/".$file);
$date=date('Y-m-d');
// $query=mysqli_query($conn,"insert into marksheet(sid,date,category,rollno,dob,result) values('$id','$date','$category','$roll','$dob','$file')");


echo$query=("insert into marksheet(sid,date,category,rollno,dob,result) values('$id','$date','$category','$roll','$dob','$file')");

	$run=mysqli_query($conn,$query);
	
if($query)
{
				
	header("location:marksheet.php?error2=message");
}

	
?>