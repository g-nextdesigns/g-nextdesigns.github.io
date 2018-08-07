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
				<h6>Leaves Details</h6>

				<h6><a href="add_leave"> <i class="fa fa-plus"></i> Add Leave </a></h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">		

				<div class="dashboard_body_header">
					<form action="#" method="post">

						<input type="text" name="emp_name" placeholder="Employee Name" class="srch_leave_txt">

						<select name="leave_type" class="srch_leave_drp">
							<option value="0">-- Leave Type --</option>
						</select>

						<select name="leave_status" class="srch_leave_drp">
							<option value="0">-- Leave Status --</option>
						</select>

						<input type="date" name="from" placeholder="From" class="srch_leave_txt">

						<input type="date" name="to" placeholder="To" class="srch_leave_txt">						

						<input type="submit" name="submit" value="Search" class="srch_leave_btn">

					</form>

					<div class="clear"></div>
				</div><!-- dashboard_body_header ends here -->		

				<div class="dashboard_body_wrapper">

					<table class="table-striped">

						<thead>
							<tr>
								<th>Employee Name</th>
								<th>Leave Type</th>
								<th>From</th>
								<th>To</th>
								<th>No of Days</th>
								<th>Reason</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>Casual Leave</td>
								<td>1 Jan 2013</td>
								<td>4 Jan 2013</td>
								<td>4</td>
								<td>Going to Hospital</td>
								<td>Approved</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> Andrew Smith <p>Web Developer</p></span></td>
								<td>Casual Leave</td>
								<td>20 Feb 2013</td>
								<td>21 Feb 2013</td>
								<td>1</td>
								<td>Family</td>
								<td>Approved</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> Alizabeth <p>Web Developer</p></span></td>
								<td>Medical Leave</td>
								<td>5 Jan 2013</td>
								<td>7 Jan 2013</td>
								<td>3</td>
								<td>Hospitalized</td>
								<td>Approved</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>Casual Leave</td>
								<td>1 Jan 2013</td>
								<td>4 Jan 2013</td>
								<td>4</td>
								<td>Going to Hospital</td>
								<td>Approved</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>

							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>Casual Leave</td>
								<td>1 Jan 2013</td>
								<td>4 Jan 2013</td>
								<td>4</td>
								<td>Going to Hospital</td>
								<td>Approved</td>
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