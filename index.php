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

					<li class="active"> <a href="index"> <i class="fa fa-dashboard"></i> Dashboard </a> </li>
					<li> <a href="employee"> <i class="fa fa-group"></i> Employees </a> </li>
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
				<h6>Dashboard</h6>

				<div class="clear"></div>
			</div><!-- dashboard_header ends here -->

			<div class="dashboard_body">				

				<div class="dashboard_body_wrapper">

					<div class="dashboard_body_header">
						<h6>Statistics</h6>
					</div><!-- dashboard_body_header ends here -->
			       	
					<div class="progress" value="70">
						
					</div>

					<div class="progress" value="35">
						
					</div>

					<div class="progress" value="85">
						
					</div>

					<div class="progress" value="60">
						
					</div>

					<script type="text/javascript">

						var startColor = '#F00';
						var endColor = '#F00';

						$('.progress').each(function(i) {
						    var circle = new ProgressBar.Circle(this, {
							    color: startColor,
							    easing: 'linear',
							    strokeWidth: 2,
							    duration: 1500,
							    text: {
							        value: '0'
							    }
							});
						    
						    var value = ($(this).attr('value') / 100);

							circle.animate(value, {
							    from: {
							        color: startColor
							    },
							    to: {
							        color: endColor
							    },
							    step: function(state, circle, bar) {
							        circle.path.setAttribute('stroke', state.color);
							        console.log(circle);
							        circle.setText((circle.value() * 100).toFixed(0));
							    }
							});
						});

					</script>

					<div class="clear"></div>
			       	
				</div><!-- dashboard_body_wrapper ends here -->

				<div class="dashboard_body_wrapper_col1">
					
					<div class="dashboard_body_header">
						<h6>EMPLOYEES</h6>
					</div><!-- dashboard_body_header ends here -->

					<table class="table-striped">
						<thead>
							<tr>
								<th>EMP_ID</th>
								<th>EMP_Name</th>
								<th>EMP_Desig</th>
								<th>EMP_Depart</th>
								<th>EMP_Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>EMP_001</td>
								<td>John Doe</td>
								<td>Web Developer</td>
								<td>I.T.</td>
								<td>Employee</td>
							</tr>
							<tr>
								<td>EMP_002</td>
								<td>Will Turner</td>
								<td>Web Developer</td>
								<td>I.T.</td>
								<td>Intern</td>
							</tr>
							<tr>
								<td>EMP_003</td>
								<td>Alizabeth</td>
								<td>Graphics Designer</td>
								<td>Marketing</td>
								<td>Employee</td>
							</tr>
							<tr>
								<td colspan="5" style="border: none; text-align: center;">View All Employees</td>
							</tr>
						</tbody>
					</table>

					<div class="clear"></div>
				</div><!-- dashboard_body_wrapper ends here -->

				<div class="dashboard_body_wrapper_col1">
					
					<div class="dashboard_body_header">
						<h6>USERS</h6>
					</div><!-- dashboard_body_header ends here -->

					<table class="table-striped">
						<thead>
							<tr>
								<th>U_ID</th>
								<th>U_Name</th>
								<th>U_Type</th>
								<th>EMP_Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>U_001</td>
								<td>John Doe</td>
								<td>Employee</td>
								<td>Active</td>
							</tr>
							<tr>
								<td>U_002</td>
								<td>Will Turner</td>
								<td>Admin</td>
								<td>Active</td>
							</tr>
							<tr>
								<td>U_003</td>
								<td>Alizabeth</td>
								<td>Employee</td>
								<td>Active</td>
							</tr>
							<tr>
								<td colspan="5" style="border: none; text-align: center;">View All Users</td>
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