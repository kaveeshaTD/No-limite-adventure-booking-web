<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="libs/common.js"></script>
    <style type="text/css">
       @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  
}
      body {
      background-image:url(images/gallery4.jpg);
      background-size:cover;
      background-position:center;
      font-family: "Nunito", sans-serif;
      background-repeat:no-repeat;
      min-height:100vh;
     
}
body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 114%;
  width: 100%;
  background-color: rgba(0,0,0,0.7);
}

.signup-box {
  width: 400px;
  height: 650px;
  margin: auto;
  background-color: white;
  border-radius: 3px;
  position: relative;
  z-index: 3;
  margin-top:90px;
  margin-bottom:90px;
}


.signup-box h1 {
  text-align: center;
  text-transform:uppercase;
  padding-top:25px;
  font-size:35px;
}

.signup-box h4 {
  text-align: center;
  text-transform:uppercase;
  font-size:16px;
}

.signup-box form {
  width: 300px;
  margin-left: 20px;
}

.signup-box form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
  margin-left:25px;
}

.signup-box form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
  margin-left:25px;
}
.signup-box input[type="button"] {
  width: 100%;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #ffa500;
  color: white;
  font-size: 18px;
}

.container form{
  padding:20px;
  width:450px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  position: absolu;
}



.container{
  display: none;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  position: absolute;
  top:0%;
  left:0%;
  background:rgba(0,0,0,.7);
  width:100%;
  z-index: 3;
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col h3{
  font-size: 20px;
  color:#333;
  text-align: center;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox p{
  
   display: flex;
  margin-top: 20px;
  font-size: 18px;
  margin-left:35px;

}

.container form .row .col .inputBox input{
   width: 80%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
  margin-left:35px;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form  .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
  margin-left:35px;
}

.container form #booking-btn #booking-submit .spinner{
  width: 85%;
  padding:12px;
  font-size: 17px;
  border: none;
  background-color: #ffa500;
  border-radius: 6px;
  color: white;
  margin-top: 5px;
  cursor: pointer;
  margin-left:10px;

}

.container form .submit-btn:hover{
  background: #ffa500;
}
.yellow{
  color:#ffa500;
}
    </style>
   
  </head>
  <body>
  <header>
<?php @include 'header.php'; 

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

  include_once("connection.php");
  $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql = "SELECT * FROM pakages";
  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
  $packages = [];
  $packageIds = [];
	$i=0;
	while ($i< mysqli_num_rows($resultset)){
    $array = mysqli_fetch_array($resultset);
		array_push($packages, $array['name']);
    array_push($packageIds, $array['id']);
		$i++;
	}

  if(isset($_GET['pakage'])){
    $selector = $_GET['pakage'];
  }else{
    $selector = null;
  }
  
?>
</header>
    <div class="signup-box">
      <h1><span class="yellow">Booking</span> form</h1>
      <h4>face to your fears</h4>
      <div class="col-lg-12">
		<div class="alert alert-danger" role="alert" id="error" style="display: none; color:red;"><h2>...</h2></div>
      <form id="booking-form" name="booking_form" role="form" style="display: block;" method="post">
      <div>
      <select name="package" id="package" class="form-control">
        
        <?php
        if($selector!=null){
          echo "<option selected={$selector}>{$packages[$selector]}</option>" ;
        }else{
          echo "<option selected='selected'>Choose Package</option>" ;
        }
        $i=0;
        foreach($packages as $item){
						echo "<option value={$item}>$item</option>";
            $i++;
				}
        ?>
      </select>
      </div>
        <label> First Name:</label>
        <input type="text" name="f_name" id="f_name" tabindex="1" class="form-control" placeholder="First Name" value=""  required>
        <div>
        <label>Last Name</label>
        <input type="text" name="l_name" id="l_name" tabindex="1" class="form-control" placeholder="Last Name" value=""  required>
        </div>
        <div>
        <label>Address</label>
        <input type="text" name="address" id="address" tabindex="1" class="form-control" placeholder="Address" value=""  required>
        </div>
        <div>
        <label>Date:</label>
        <input type="date" name="date" id="date" tabindex="1" class="form-control" placeholder="Date" value=""  required>
        </div>
        <div>
        <label>Phone Number:</label>
        <input type="text" name="contact" id="contact" tabindex="1" class="form-control" placeholder="Contact Number" value=""  required>
        </div>
        <div>
        <label>NIC OR Passport Number:</label>
        <input type="text" name="id" id="id" tabindex="1" class="form-control" placeholder="NIC OR Passport Number" value=""  required>
        </div>
        <div class="col-xs-12 form-group pull-right" id="booking-btn">     
        <button type="submit" name="booking-submit" id="booking-submit" tabindex="4" class="form-control btn btn-primary">
        <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Book Now
        </button>
        </div>
		</form>
</div>
</div>
    </div>
  
<footer >
    <?php @include 'footer.php'; ?>
</footer>
<script >
    // document.getElementById("submit-btn").addEventListener("click",function(){
    //     document.querySelector(".container").style.display="flex";
    // })
</script>
  </body>
</html>
