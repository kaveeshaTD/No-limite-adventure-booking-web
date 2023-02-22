<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Responsive Contact Us Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script type="text/javascript" src="libs/common.js"></script>
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

:root{
  --orange:#ffa500;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Nunito', sans-serif;
}

body {
  min-height: 100vh;
  width: 100%;
  background-image: url(images/admin.jpg);
  background-size: cover;
  background-position: center;
  
}

body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(0,0,0,0.7);
}

section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
  
}

.container {
  max-width: 1080px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
  margin-bottom:50px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  margin-top:80px;
  color: #FFF;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header p {
  color: #FFF;
}

.row  {
  display: flex;
  flwx-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 50%;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}

.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon i {
  font-size: 30px;
  line-height: 70px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content h4 {
  color: #ffa500;
  font-size: 1.4em;
  margin-bottom: 5px;
}

.contact-info-content p {
  color: #FFF;
  font-size: 1em;
}

.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
  color: #333;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 5px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #666;
}

.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: #444;
  font-size: 12px;
  transform: translateY(-20px);
}

.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #ffa500;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #ffa500;
  transition: 0.5s;
}

.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: black;
  font-weight:bold;
}

span{
  color:#ffa500;
}

@media (max-width: 991px) {
  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .row {
    flex-direction: column;
  }
  
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }

}</style>
</head>

<body>
  <header>
    <?php @include 'header.php'; 
    include_once("connection.php");
    $db = new dbObj();
    $conn =  $db->getConnstring();

    $userId = $_SESSION['user_id'];
    $sql1 = "SELECT * FROM book WHERE UserID= '$userId' and `status`='PENDING'";
    $resultset1 = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));
    
    $sql2 = "SELECT * FROM book WHERE UserID= '$userId' and `status`='CONFIRMED'";
    $resultset2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
    ?>
  </header>
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>My <span>Bookings<span></h2>
       
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
      <div class="contact-form">
        <div class="col-lg-12">
		<h2>Pending <span>Bookings<span></h2>
        <div class="card-body">
							<div class="table-responsive">
								<table width="100%">
								<thead>
									<tr>
										<th>Booking Id</th>
                                        <th>Book Date</th>
																
									</tr>
								</thead>
								<tbody>
                                <?php
										$i = 0; // this is the counter
										while($row = mysqli_fetch_array($resultset1)) {
									?>
											<tr>
										<td><?php echo $row['book_id'] ?></td>
										<td><?php echo $row['BookDate'] ?></td>
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
        
        <div class="contact-form">
        <div class="col-lg-12">
		<h2>Confirmed <span>Bookings<span></h2>
        <div class="card-body">
							<div class="table-responsive">
								<table width="100%">
								<thead>
                                <tr>
										<th>Booking Id</th>
                                        <th>Book Date</th>
										<th>Your Driver</th>
										<th>Your Guide</th>
										<th>Your Vehicle</th>
										
									</tr>
								</thead>
								<tbody>
                                <?php
										$i = 0; // this is the counter
										while($row = mysqli_fetch_array($resultset2)) {
									?>
											<tr>
										<td><?php echo $row['book_id'] ?></td>
										<td><?php echo $row['BookDate'] ?></td>
										<td><?php echo $row['Driver_name'] ?></td>
										<td><?php echo $row['Guid_name'] ?></td>
                                        <td><?php echo $row['Vehicle_id'] ?></td>
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
    </div>
  </section>
  
  <footer >
    <?php @include 'footer.php'; ?>
</footer>
</body>
</html>