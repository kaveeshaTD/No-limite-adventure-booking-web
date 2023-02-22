<?php 
	include_once("../connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

	$query    = "SELECT * FROM `book` WHERE status='PENDING'";
    $result   = mysqli_query($conn, $query);

	$query2    = "SELECT Emp_name FROM `employee` WHERE Emp_id IN (SELECT Emp_id FROM `driver`)";
	$result2 = mysqli_query($conn, $query2);

	$drivers = [];
	$i=0;
	while ($i< mysqli_num_rows($result2)){
		array_push($drivers, mysqli_fetch_array($result2)['Emp_name']);
		$i++;
  	}

	$query3   = "SELECT Emp_name FROM `employee` WHERE Emp_id IN (SELECT Emp_id FROM `guide`)";
	$result3 = mysqli_query($conn, $query3);
  
	$guides = [];
	$i=0;
	while ($i< mysqli_num_rows($result2)){
		array_push($guides, mysqli_fetch_array($result3)['Emp_name']);
		$i++;
	}

	$query4   = "SELECT Vehicle_id FROM `vehicle`";
	$result4 = mysqli_query($conn, $query4);
  
	$vehicles = [];
	$i=0;
	while ($i< mysqli_num_rows($result4)){
		array_push($vehicles, mysqli_fetch_array($result4)['Vehicle_id']);
		$i++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="../libs/common.js"></script>
	<style type="text/css">
		.Action{
  background-color: #ffa500; 
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
}

	</style>
}

</head>
<body>

    <input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2>  ADVENTURE</h2>
			<!-- <img src="glazel.png "> -->

		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="admindashboard.php" class="active" <?php $page='dashboard' ?>><span class="las la-igloo"></span> <span>Dasboard</span></a>
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
					<a href="drivers.php" class="inactive" <?php $page='driver' ?>><span class= "las la-user-secret"></span> <span>Driver</span></a>
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
							<h2>New Bookings</h2>

						
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
								<thead>
									<tr>
										<td>Booking Id</td>
										<td>Customer Id</td>
										<td>Contact Number</td>
										<td>Book Date</td>
										<td>Address</td>
										<td>Driver</td>
										<td>Guide</td>
										<td>Vehicle</td>
										<td>Action</td>
										
									</tr>
								</thead>
								<tbody>
									<?php
										$i = 0; // this is the counter
										$packages=[];

										while($row = mysqli_fetch_array($result)) {
									?>
											<tr>
										<td><p id="id"><?php echo $row['book_id'] ?></p></td>
										<td><?php echo $row['UserID'] ?></td>
										<td><?php echo $row['contactNum'] ?></td>
										<td><?php echo $row['BookDate'] ?></td>
										<td><?php echo $row['address'] ?></td>
										<td><select name="driver" id="driver" class="form-control">
											<option selected="selected">Choose Driver</option>
											<?php
											foreach($drivers as $item){
												echo "<option value={$item}>$item</option>";
											}
											?>
										</select></td>

										<td><select name="guide" id="guide" class="form-control">
											<option selected="selected">Choose Guide</option>
											<?php
											foreach($guides as $item){
												echo "<option value={$item}>$item</option>";
											}
											?>
										</select></td>

										<td><select name="vehicle" id="vehicle" class="form-control">
											<option selected="selected">Choose Vehicle</option>
											<?php
											foreach($vehicles as $item){
												echo "<option value={$item}>$item</option>";
											}
											?>
										</select></td>
										
										<td><button type="submit" name="booking-confirm" class="Action" id="booking-confirm" value="<?php echo $row['book_id'] ?>">Confirm</button></td>
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