<?php 
	include_once("../connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

	$query    = "SELECT Driver_id, driver.Emp_id,Emp_name FROM `driver` INNER JOIN `employee` ON driver.Emp_id=employee.Emp_id";
    $result   = mysqli_query($conn, $query);
	$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<style type="text/css">
	</style>

</head>
<body>

    <input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2>  ADVENTURE</h2>
			<!-- <img src="glazel.png "> -->

		</div>
		<div class="sidebar-menu">
			<?php $page = ''; ?>
			<ul>
				<li>
					<a href="admindashboard.php" class="inactive" <?php $page='dashboard' ?>><span class="las la-igloo"></span> <span>Dasboard</span></a>
				</li>

				<li>
					<a href="customers.php" class="inactive" <?php $page='customers' ?>><span class="las la-users"></span> <span>Customers</span></a>
				</li>
				<li>
					<a href="package.php" class="inactive" <?php $page='packages' ?>><span class="las la-clipboard-list"></span> <span>Package</span></a>
				</li>
				
				
				<li>
					<a href="guide.php" class="inactive" <?php $page='guide' ?>><span class="las la-hiking"></span> <span>Guide</span></a>
				</li>
				<li>
					<a href="vehicles.php" class="inactive" <?php $page='vehicle' ?>><span class="las la-car-alt"></span> <span>Vehicle</span></a>
				</li>
				<li>
					<a href="drivers.php" class="active" <?php $page='driver' ?>><span class= "las la-user-secret"></span> <span>Driver</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<h1>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h1>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>
			

		</header>

<main>
<div class="cards">
				<?php include('panel.php') ?>
				
			</div>
			<div class="recent-grid">
				<div class="projects">
				<div class="card">
						<div class="card-header">
							<h2>Drivers</h2>

						
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
								<thead>
									<tr>
										<td>Employee Id</td>
										<td>Driver Id</td>
										<td>Driver Name</td>
										
									</tr>
								</thead>
								<tbody>
									<?php
										$i = 0; // this is the counter
										while($row = mysqli_fetch_array($result)) {
									?>
											<tr>
										<td><?php echo $row['Emp_id'] ?></td>
										<td><?php echo $row['Driver_id'] ?></td>
										<td><?php echo $row['Emp_name'] ?></td>
									</tr>
									<?php
											$i++; // the counter counts
										}
									?>

								</tbody>

								
							</table>
								
							</div>
						</div>
					</div>
				</div>
				
			</div>

</main>
</div>

</body>
</html>