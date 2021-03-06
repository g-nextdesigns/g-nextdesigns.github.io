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
					<li class="active"> <a href="employee"> <i class="fa fa-group"></i> Employees </a> </li>
					<li> <a href="leave"> <i class="fa fa-calendar-times-o"></i> Leave </a> </li>
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
				<h6>Add Employee</h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">		

				<div class="dashboard_body_wrapper">

					<form action="#" method="POST">

						<div class="form_group">
							<label>First Name</label>
							<input type="text" name="first_name" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Last Name</label>
							<input type="text" name="last_name" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Username</label>
							<input type="text" name="username" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Email</label>
							<input type="text" name="email" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Password</label>
							<input type="text" name="password" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Confirm Password</label>
							<input type="text" name="confirm_password" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Employee ID</label>
							<input type="text" name="emp_id" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Joining Date</label>
							<input type="Date" name="joining_date" class="emp_txt" style="height: 18px;">
						</div>

						<div class="form_group">
							<label>Phone</label>
							<input type="text" name="phone" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Company</label>
							<input type="text" name="company" class="emp_txt">
						</div>

						<div class="form_group">
							<label>Designation</label>
							<input type="text" name="designation" class="emp_txt">
						</div>

						<table class="table-striped">
							<thead>
								<tr>
									<th>Module Permission</th>
									<th>Read</th>
									<th>Write</th>
									<th>Create</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text_align">Holiday</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>

								<tr>
									<td class="text_align">Leave Request</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Clients</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Projects</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Tasks</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Chats</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Assets</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
								<tr>
									<td class="text_align">Timing Sheets</td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
									<td><input type="checkbox" name=""></td>
								</tr>
							</tbody>
						</table>

						<div class="btn_wrapper">
							<input type="submit" name="submit" value="Create Employee" class="emp_btn">
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