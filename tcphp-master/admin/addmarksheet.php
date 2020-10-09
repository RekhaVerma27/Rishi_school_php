<?php include("session.php");
include("connection.php");?>
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
						<li class="active">Student Marksheet </li>
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
											Student Marksheet
											</h4>
										</div>
								<div class="widget-body">
											<div class="widget-main">
												<div class="row-fluid">
											
										<form class="form-horizontal" method="post" action="marksheet_sub.php" enctype="multipart/form-data">
													<table  style="width:100%; text-align:left; height:150px;">
													<tr>
								<th>Category</th>
								<td><select name="category"  style="width:400px;">
								<option value="">Select Category</option>
								<option value="Marksheet">Marksheet</option>
								<option value="tc">TC</option>
								<option value="admincard">Admit card</option>
								
								</select></td>
								</tr>
													<tr>
								<th>Admission Number</th>
								<td><input type="text" name="roll"  style="width:400px;"  value=""></td>
								</tr>
								
								<tr>
								<th>Upload File</th>
								<td><input type="file"  style="width:400px;"  name="file" value=""></td>
								</tr>
								<tr>
								
										
										</table>
								<div class="form-actions">
									<input type="submit" class="btn btn-info"  value="Submit">
										

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
