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
				<h6>Employees Details</h6>

				<h6><a href="add_emp"> <i class="fa fa-plus"></i> Add Employee </a></h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">		

				<div class="dashboard_body_header">
					<form action="#" method="post">

						<input type="text" name="emp_id" placeholder="Employee ID" class="srch_emp_txt">
						<input type="text" name="emp_name" placeholder="Employee Name" class="srch_emp_txt">
						<select name="Designs" class="srch_emp_drp">
							<option value="0">-- Select Designation --</option>
						</select>
						<input type="submit" name="submit" value="Search" class="srch_emp_btn">

					</form>

					<div class="clear"></div>
				</div><!-- dashboard_body_header ends here -->		

				<div class="dashboard_body_wrapper">

					<table class="table-striped">

						<thead>
							<tr>
								<th>Employee Name</th>
								<th>Employee ID</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Join Date</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
								<td><a href="#"><i class="fa fa-ellipsis-v"></i></a></td>
							</tr>
						</tbody>

						<tbody>
							<tr>
								<td class="text_align"><div class="user_pic_list"></div><span class="alignment"> John Doe <p>Web Developer</p></span></td>
								<td>EMP_001</td>
								<td>johndoe@gmail.com</td>
								<td>9876543210</td>
								<td>1 Jan 2013</td>
								<td>Web Developer</td>
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