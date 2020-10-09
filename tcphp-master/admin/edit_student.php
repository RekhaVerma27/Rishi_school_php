<?php include("session.php");
include("connection.php");

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>School Admin Panel</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />


		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		
<?php include("header.php"); ?>
		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				
<?php include("sidebar.php"); ?>

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Edit Student Registeration </li>
					</ul><!--.breadcrumb-->

					
				</div>

				<div class="page-content">
					
					<div class="row-fluid">
						<div class="span12">
						
							<div class="space-6"></div>

							<div class="row-fluid">
							<div class="span2">
									<div class="space-6"></div>
                                  </div>
								<div class="span8">
									<div class="widget-box">
										<div class="widget-header widget-header-flat">
											<h4 class="smaller">
												<i class="icon-quote-left smaller-80"></i>
										Edit Student Registeration
											</h4>
										</div>
								<div class="widget-body">
											<div class="widget-main">
												<div class="row-fluid">
											<?php $editid=$_REQUEST['editid']; 
											$sql=mysqli_query($conn,"select * from student where id='$editid'");
											$row=mysqli_fetch_array($sql);?>
										<form class="form-horizontal" method="post" action="update_student.php" enctype="multipart/form-data">
													<table  style="width:100%; text-align:left; height:350px;">
													<tr>
								<th>Name</th>
								<td><input type="text" name="name"  style="width:400px;"  value="<?php echo $row['name']; ?>">
								<input type="hidden" name="editid" value="<?php echo $_REQUEST['editid']; ?>"></td>
								</tr>
								
								<tr>
								<th>Father Name</th>
								<td><input type="text"  style="width:400px;"  name="fname" value="<?php echo $row['fname']; ?>"></td>
								</tr>
								<tr>
								<th>Mother Name</th>
								<td><input type="text"  style="width:400px;"  name="mname" value="<?php echo $row['mname']; ?>"></td>
								</tr>
								<tr>
								<th>Phone</th>
								<td><input type="text"  style="width:400px;"  name="phone" value="<?php echo $row['phone']; ?>"></td>
								</tr>
								<tr>
								<th>D.O.B</th>
								<td><input type="date"  style="width:400px;"  name="dob" value="<?php echo $row['dob']; ?>"></td>
								</tr>
								<tr>
								<th>Class</th>
								<td><input type="text"  style="width:400px;"  name="class" value="<?php echo $row['class']; ?>"></td>
								</tr>
									
								<tr>
								<th>Roll No.</th>
								<td><input type="text"  style="width:400px;"  name="roll" value="<?php echo $row['rollno']; ?>"></td>
								</tr>
								<tr>
								<th>Address</th>
								<td><input type="text"  style="width:400px;"  name="address" value="<?php echo $row['address']; ?>"></td>
								</tr>
								<tr>
									<th>Photo</th>
									<td>
										    
										    <a href="<?php echo $row['image']?>"><img src="<?php echo $row['image']?>" width ="100" height= "100">
										    </a> 
										
									</td>
								</tr>
								<tr>
									<th>Change Image</th>
									<td><input type="file" name="image"></td>
								</tr>
								
								
										
										</table>
								<div class="form-actions">
									<input type="submit" class="btn btn-info"  value="Update">
										

									&nbsp; &nbsp; &nbsp;
									<input type="reset" class="btn btn-info"  value="Reset">
								</div>
								 </form>
								 
													
												</div>

											</div>
										</div>
									</div>
								</div>
                                 <div class="span2">
									<div class="space-6"></div>
                                  </div>
								<!--/span-->
							</div><!--/row-->

							<div class="hr hr32 hr-dotted"></div>


							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<?php include("footer.php");?>
	</body>
</html>
