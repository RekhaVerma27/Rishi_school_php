<?php include("session.php");
include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Rishi Galav School</title>

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
						<li class="active">Student List</li>
					</ul><!--.breadcrumb-->

					
				</div>
					<?php if(isset($_GET['error'])) 
	   		        { ?>
	   		         <p style="color:white;background:red; padding:15px; font-size:26px;text-align:center;">
	   		      Student Record Deleted</p>
	   		     <?php    }  ?>

	   		     <?php if(isset($_GET['error2'])) 
	   		        { ?>
	   		         <p style="color:white;background:green; padding:15px; font-size:26px;text-align:center;">
	   		      Student Record Updated</p>
	   		     <?php    }  ?>

	   		     <?php if(isset($_GET['error3']))
				  {
			     ?>
	   			  <p style="color:white;background:green; padding:15px; font-size:26px;text-align:center;">
	   		      Student Record Inserted</p>
	   		     <?php 
	   		        }  
	   		      ?>
				<div class="page-content">
					

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->


							<div class="space-6"></div>

							<div class="row-fluid">
								
								<div class="table-header">
									Student List&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Bulk Upload File: <input type="file" name="img" multiple> <input type="submit"><button id="btnExport" style="float:right;">Export to excel</button>

								</div>
<p  id="tblExport">
							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
								<tr class="noExl">
							<th>S. no.</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>D.O.B</th>
							
							 <th>Class</th>
							 <th>Admission Number</th>
							
							<th>Action</th></tr></thead>
							<tbody>
							<?php 
							$k=0;
							$ss=("select * from student order by id desc");
								$run=mysqli_query($conn,$ss);
							while($rr=mysqli_fetch_array($run))
							{ 
							$k++;
							?>
							<tr class="noExl">
							<td><?php echo $k;?></td>
							<td><?php echo $rr['name']; ?></td>
							<td><?php echo $rr['fname']; ?></td>
							<td><?php echo $rr['dob']; ?></td>
							
							<td><?php echo $rr['class']; ?></td>
							<td><?php echo $rr['rollno']; ?></td>
						<td><a class="green" href="edit_student.php?editid=<?php echo $rr['id']; ?>"><i class="icon-edit bigger-130"></i></a>&nbsp; 
							<a class="red" href="delete_student.php?deleteid=<?php echo $rr['id']; ?>"><i class="icon-trash bigger-130"></i></a>
							&nbsp; 
							<a class="blue" href="alldata.php?id=<?php echo $rr['id']; ?>">View Data</a>

							 </td>
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
