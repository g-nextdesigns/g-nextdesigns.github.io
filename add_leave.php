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
							<li> <a href="holidays"> Holidays </a> </li>
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
				<h6>Add Leave Request</h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">		

				<div class="dashboard_body_wrapper">

					<form action="#" method="POST">

						<div class="leaveForm">
							
							<div class="leaveForm_group">
								<label>Leave Type</label>
								<select name="leave_type" class="leave_drp" required="required">
									<option value="0">-- Select Leave Type --</option>
									<option value="Casual Leave">Casual Leave</option>
									<option value="Medical Leave">Medical Leave</option>
									<option value="Loss of Pay">Loss of Pay</option>
								</select>
							</div>

							<div class="leaveForm_group">
								<label>From</label>
								<input type="date" name="from" class="leave_txt" required="required">
							</div>

							<div class="leaveForm_group">
								<label>To</label>
								<input type="date" name="to" class="leave_txt" required="required">
							</div>

							<div class="leaveForm_group">
								<label>No of Days</label>
								<input type="text" name="no_of_days" placeholder="No of Days" class="leave_txt" required="required">
							</div>

							<div class="leaveForm_group">
								<label>Remaing Leaves</label>
								<input type="text" name="remaining_leaves" placeholder="Remaing Leaves" class="leave_txt" required="required">
							</div>

							<div class="leaveForm_group">
								<label>Leave Reason</label>
								<textarea name="leave_reason" class="leave_txtarea" required="required"></textarea>
							</div>

							<div class="clear"></div>
						</div>						

						<div class="btn_wrapper">
							<input type="submit" name="submit" value="Send Leave Request" class="emp_btn">
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