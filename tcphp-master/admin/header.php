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
						<?php //$id=$_SESSION['id'];
						$sql=("select * from admin where id=".$_SESSION['id']);
							$run=mysqli_query($conn,$sql);
						$row=mysqli_fetch_array($run);
						 ?>
<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="" alt="" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $row['username']; ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							
								<li>
									<a href="profile.php">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>