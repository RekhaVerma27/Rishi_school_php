<?php include("connection.php");?>
<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Rishi Galav School
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<li class="" style="color:#FFFFFF;">
						<a href="profile.php">Profile</a>
							</li>
							
					<li class="" style="color:#FFFFFF;">
						<a href="marksheet.php">Marksheet</a>
							</li>
							<li class="" style="color:#FFFFFF;">
						<a href="tc.php">TC</a>
							</li>
							<li class="" style="color:#FFFFFF;">
						<a href="admitcard.php">Admit Card</a>
							</li>
					
						<?php //$id=$_SESSION['id'];
						$sql=("select * from student where rollno=".$_SESSION['rollno']);
							$run=mysqli_query($conn,$sql);

						$row=mysqli_fetch_array($run);
						 ?>
                        <li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="admin/<?php echo $row["image"] ?>" alt="" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $row['name']; ?>
								</span>

							</a>

						</li>
						<li class="" style="color:#FFFFFF;">
						<a href="logout.php">Logout</a>
							</li>
							
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>