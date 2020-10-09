<?php 
session_start();

if(isset($_POST['submit']))
 {
	  echo$username=$_POST['username'];
	  echo$password=$_POST['password'];

	// $conn = mysqli_connect('localhost', 'pnedzuht_kgscho1', 'Vikas@#1234', 'pnedzuht_kgschool');

	$conn = mysqli_connect('localhost','root','','tcphp');

	$sql="select * from admin where username='$username' AND password='$password'";

	$run=mysqli_query($conn,$sql);
	//$row=mysqli_num_rows($run);
	$row=mysqli_fetch_array($run);

	if($row)
{
	$_SESSION['id']=$row['id'];			
	header("location:deskboard.php");
}
else
	{
	
	header("location:index.php?error=message");
 	}}
	/*if ($row<1) { ?>
		<script type="text/javascript">
			alert('Username and Name is Invalid');
		</script>
		<?php exit(); } 
		else{
			echo "login successfull";
            }
		}*/
	?>
	