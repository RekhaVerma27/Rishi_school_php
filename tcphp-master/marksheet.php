<?php include("session.php");
include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>School Admin Panel</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
       

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

			

			<div class="main-content">
				
				<div class="page-content">
					

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->


							<div class="space-6"></div>

							<div class="row-fluid">
								
								<div class="table-header">
									TC List

								</div>
<p  id="tblExport">
							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
								<tr class="noExl">
							<th>S. no.</th>
							<th>Date</th>
							<th>Name</th>
							<th>Enrollment Number</th>
							<th>Class</th>
							<th>Category</th>
							<th>View File</th>
							</tr></thead>
							<tbody>
							<?php 
							$k=0;
							// $_SESSION['rollno'];
							$ss=("select * from marksheet where rollno=".$_SESSION['rollno']." and category='Marksheet' order by id desc ");
								$run=mysqli_query($conn,$ss);

							while($rr=mysqli_fetch_array($run))
							{ 
							$ss1=("select * from student where id=".$rr['sid']);
								$run=mysqli_query($conn,$ss1);

							$rr1=mysqli_fetch_array($run);
							$k++;
							?>
							<tr class="noExl">
							<td><?php echo $k;?></td>
							<td><?php echo $rr['date']; ?></td>
							<td><?php echo $rr1['name']; ?></td>
							<td><?php echo $rr['rollno']; ?></td>
							<td><?php echo $rr1['class']; ?></td>
							<td><?php echo $rr['category']; ?></td>
							
							<td><a href="admin/upload/<?php echo $rr['result']; ?>" target="_blank">View File</a></td>
						
							</tr>
							<?php } ?></tbody>
									</table></p>

							<div class="hr hr32 hr-dotted"></div>


							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

			</div><!--/.main-content-->
		</div><!--/.main-container-->
</div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="jquery.btechco.excelexport.js"></script>
<script src="jquery.base64.js"></script>
<script>
    $(document).ready(function () {
        $("#btnExport").click(function () {
            $("#tblExport").btechco_excelexport({
                containerid: "tblExport"
               , datatype: $datatype.Table
            });
        });
    });
</script>
		<?php include("footer.php");?>
	</body>
</html>
