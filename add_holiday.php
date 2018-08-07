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
					<li class="active"> <a href="leave"> <i class="fa fa-calendar-times-o"></i> Leave </a> </li>

						<ul>
							<li class="submenu_active"> <a href="holidays"> Holidays </a> </li>
							<li> <a href="attendance"> Attendance </a> </li>
							<li> <a href="leaveType"> Leave Type </a> </li>
						</ul>
					
					<li> <a href="recruitments"> <i class="fa fa-user-plus"></i> Recruitments </a> </li>
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
				<h6>Add Holidays</h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">		

				<div class="dashboard_body_wrapper">

					<form action="#" method="POST">

						<div class="leaveForm">							
							

							<div class="leaveForm_group">
								<label>Holiday Name</label>
								<input type="text" name="from" class="leave_txt" placeholder="Holiday Name" required="required">
							</div>

							<div class="leaveForm_group">
								<label>Holiday Date</label>
								<input type="date" name="to" class="leave_txt" required="required">
							</div>

							<div class="leaveForm_group">
								<label>Reapets Anually</label>
								<input type="checkbox" name="anually" >
							</div>

							<div class="leaveForm_group">
								<label>Full Day/Half Day</label>
								<select name="leave_type" class="leave_drp" required="required">
									<option value="0">Full Day/Half Day</option>
									<option value="Casual Leave">Full Day</option>
									<option value="Medical Leave">Half Day</option>
								</select>
							</div>

							<div class="clear"></div>
						</div>						

						<div class="btn_wrapper">
							<input type="submit" name="submit" value="Add Holiday" class="emp_btn">
						</div>
					</form>
					
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