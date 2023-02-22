<?php 
    include_once("../connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

	$query1    = "SELECT * FROM `contact_us`";
    $result1   = mysqli_query($conn, $query1);
	$num1 = mysqli_num_rows($result1);

    $query2    = "SELECT * FROM `book` WHERE status='PENDING'";
    $result2   = mysqli_query($conn, $query2);
	$num2 = mysqli_num_rows($result2);

	$query3    = "SELECT * FROM `book` WHERE status='CONFIRMED'";
    $result3   = mysqli_query($conn, $query3);
	$num3 = mysqli_num_rows($result3);
?>

<div class="card-single">
	<div>
		<h1><?php echo $num1 ?></h1>
		<span><a href="contactUs.php" style="color:black;">Messages</a></span>
	</div>
	<div>
		<span class="las la-users"></span>
	</div>
</div>
				
<div class="card-single">
	<div>
		<h1><?php echo $num2 ?></h1>
		<span><a href="newBookings.php" style="color:black;">New Booking</a></span>
	</div>
	<div>
		<span class="las la-clipboard-list"></span>
	</div>
</div>
				
<div class="card-single">
	<div>
		<h1><?php echo $num3 ?></h1>
		<span><a href="confirmedBookings.php" style="color:black;">Confirm Booking</a></span>
	</div>
	<div>
		<span class="las la-clipboard-list"></span>
	</div>
</div>