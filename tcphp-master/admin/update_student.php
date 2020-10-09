<?php include("session.php");
include("connection.php");

// if(isset($_REQUEST['update-image']))
// {
//     $file = $_FILES["image"]["name"];
    

//     $tmp_name = $_FILES["image"]["tmp_name"];

//     $image = "upload/".$file;

//     //only jpg,png,upload

//     $file = explode(".", $file );

//     $ext = $file[1];
//     $allowed = array("jpg","png", "gif");

//     $id = $_REQUEST['id'];

//     if(in_array($ext, $allowed))
//     {
//         move_uploaded_file($tmp_name, $image);

        
//         $query = "UPDATE student SET image = '$image' where id = '$id' ";

//         $fire = mysqli_query($conn, $query) or die("can not fetch the data". mysqli_error($conn));

//         if($fire)
//         {
//             echo "right upload";
//         }
//         else
//         {
//             echo "wrong upload";
//         }

//     }
// }





$editid=addslashes($_POST['editid']);
$name=addslashes($_POST['name']);
$fname=addslashes($_POST['fname']);
$mname=addslashes($_POST['mname']);
$phone=addslashes($_POST['phone']);
$dob=addslashes($_POST['dob']);
$class=addslashes($_POST['class']);
$roll=addslashes($_POST['roll']);
$address=addslashes($_POST['address']);

    $file = $_FILES["image"]["name"];
    

    $tmp_name = $_FILES["image"]["tmp_name"];

    $image = "upload/".$file;

// $query=mysqli_query($conn,"update student set name='$name',fname='$fname',mname='$mname',class='$class',rollno='$roll',dob='$dob',phone='$phone',address='$address' where id='$editid'");

if($tmp_name != "")
{
    move_uploaded_file($tmp_name ,$image);
    $c_update="update student set name='$name',fname='$fname',mname='$mname',class='$class',rollno='$roll',dob='$dob',phone='$phone',address='$address', image='$image' where id='$editid'";   
}else
{
    $c_update="update student set name='$name',fname='$fname',mname='$mname',class='$class',rollno='$roll',dob='$dob',phone='$phone',address='$address' where id='$editid'";
}

$query=mysqli_query($conn, $c_update);



if($query)
{
				
	header("location:studentlist.php?error2=message");
}

	
?>