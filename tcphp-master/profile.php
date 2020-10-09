<?php include("session.php");
include("connection.php");

$sql=("select * from student where rollno=".$_SESSION['rollno']);
	$run=mysqli_query($conn,$sql);

 $rs=mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>User Profile</title>

		<meta name="description" content="3 styles with inline editable feature" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="assets/css/select2.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-editable.css" />

		<!--fonts-->

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

			

			<div class="main-content">
			

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							User Profile
							
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
						
							<div class="hr dotted"></div>

							<div>
							
								<div id="user-profile-1" class="user-profile row-fluid">
									<div class="span3 center">
										<div>
										
											<span class="profile-picture">
												<img src="admin/<?php echo $rs['image']?>">
											</span>

											<div class="space-4"></div>

											<div class="width-80 label label-info label-large arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="icon-circle light-green middle"></i>
														&nbsp;
														<span class="white middle bigger-120"><?php echo $rs['name']; ?></span>
													</a>

													
												</div>
												
											</div>
										</div>

										<div class="space-6"></div>

									<span style="color:#FF0000; font-size:16px;"><?php echo $rs['rollno']; ?></span>
										<div class="hr hr16 dotted"></div>
									</div>

									<div class="span9">
										

										<div class="space-12"></div>

										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Name </div>

												<div class="profile-info-value">
													<span class="editable" id="username"><?php echo $rs['name']; ?></span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Father Name </div>

												<div class="profile-info-value">
													<span class="editable" id="username"><?php echo $rs['fname']; ?></span>
												</div>
											</div>
											

											<div class="profile-info-row">
												<div class="profile-info-name"> Mother Name </div>

												<div class="profile-info-value">
												
													<span class="editable" id="login"><?php echo $rs['mname']; ?></span>
													
												</div>
											</div>
                                            <div class="profile-info-row">
												<div class="profile-info-name">Phone </div>

												<div class="profile-info-value">
													<span class="editable" id="username"><?php echo $rs['phone']; ?></span>
												</div>
											</div>
											<div class="profile-info-row">
												<div class="profile-info-name"> Class </div>

												<div class="profile-info-value">
													<span class="editable" id="age"><?php echo $rs['class']; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Date Of Birth </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $rs['dob']; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Address</div>

												<div class="profile-info-value">
												<i class="icon-map-marker light-orange bigger-110"></i>
													<span class="editable" id="country"><?php echo $rs['address']; ?></span>

												</div>
											</div>

											
										</div>


										
									</div>
								</div>
							</div>

							

							

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<?php include("footer.php");?>
	</body>
</html>
