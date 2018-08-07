<?php
	ob_start();
	@session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.js"></script>

</head>
<body>
	<div class="wrapper_class">
		
		<header>
			<div class="logo"></div>

			<div class="notifications"></div>
		</header>

		<section class="sidebar">
			
			<div class="sidebar_header">
				
				<div class="user_pic">
					
				</div><!-- User profile pic ends here -->

				<div class="username_status">
					<h1>Username</h1>
					<h4>Online</h4>
				</div><!-- username_status ends here -->

				<div class="clear"></div>
			</div><!-- Sidebar_header ends here -->

			<div class="sidebar_body">
				
				<ul>

					<li> <a href="index"> <i class="fa fa-dashboard"></i> Dashboard </a> </li>
					<li> <a href="employee"> <i class="fa fa-group"></i> Employees </a> </li>
					<li> <a href="leave"> <i class="fa fa-calendar-times-o"></i> Leave </a> </li>	
					<li class="active"> <a href="recruitments"> <i class="fa fa-user-plus"></i> Recruitments </a> </li>
						<ul>							
							<li class="submenu_active"> <a href="jobTitle"> Job Title </a> </li>
							<li> <a href="workShift"> Work Shift </a> </li>
							<li> <a href="candidate"> Candidates </a> </li>
							<li> <a href="jobVacancy"> Job Vacancy </a> </li>
						</ul>
					<li> <a href=""> <i class="fa fa-line-chart"></i> Performance </a> </li>
					<li> <a href=""> <i class="fa fa-gears"></i> Training </a> </li>
					<li> <a href=""> <i class="fa fa-credit-card"></i> Payroll </a> </li>
					<li> <a href=""> <i class="fa fa-power-off"></i> Logout </a> </li>

				</ul><!-- Sidebar menu ends here -->

				<div class="clear"></div>
			</div><!-- Sidebar_body ends here -->

		</section><!-- Sidebar section ends here -->

		<section class="dashboard">
			
			<div class="dashboard_header">
				<h6>Job Titles</h6>

				<h6><a href="add_holiday"> <i class="fa fa-plus"></i> Add Job Titles </a></h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">						

				<div class="dashboard_body_wrapper">

					<table class="table-striped">

						<thead>
							<tr>
								<th>Job Title</th>
								<th>Job Desciptions</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>								
								<td>New Year</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>								
								<td>Republic Day</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>														
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td>Good Friday</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>						
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td>Maharashtra Day</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td>Independance Day</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td>Chirsmas</td>
								<td class="text_align">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

					</table>


					
					<div class="clear"></div>			       	
				</div><!-- dashboard_body_wrapper ends here -->
				
				<div class="clear"></div>
			</div><!-- dashboard_body ends here -->

			<div class="clear"></div>
		</section><!-- Dashboard section ends here -->

		<!-- <footer>
			<p>&copy;Copyright 2018, All rights reserved. Developed By <a href="https://www.g-nextdesigns.com">G-Next Designs</a> </p>
		</footer> -->

		<div class="clear"></div>
	</div><!-- Wrapper class ends here -->
</body>
</html>