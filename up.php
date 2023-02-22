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
       * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  
}


body {
  min-height: 100vh;
  width: 100%;
  background-image: url(images/gallery4.jpg);
  background-size: cover;
  background-position: center;
  font-family: "Nunito", sans-serif;
  
  
}

body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 120%;
  width: 101.6%;
  background-color: rgba(0,0,0,0.7);
}
section{
  position: relative;
  z-index: 3;

}
.container{
  margin-top:80px;
}

.signup-box {
  
  width: 560px;
  height: 670px;
  margin: auto;
  background-color: white;
  border-radius: 3px;
  
}


h1 {
  text-align: center;
  padding-top: 15px;
  color:#444;
  font-size:45px;
 
  
}
h1>span{
  color:#ffa500;
}
h4 {
  text-align: center;
  text-transform:uppercase;
  font-size:16px;
}

form {
  width: 350px;
  margin-left: 95px;
  
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 15px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 350px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #ffa500;
  color: white;
  font-size: 18px;
  cursor: pointer;
}
input[type="button"]:hover{
  border:1px solid #ffa500;
  color:black;
  background-color:white;
  transition:1s;
}

.sign-up{
  width: 350px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #ffa500;
  color: white;
  font-size: 18px;
  cursor: pointer;
}

.sign-up :hover{
  border:1px solid #ffa500;
  color:black;
  background-color:white;
  transition:1s;
}

p {
  margin-left:100px;
  padding-top: 20px;
  font-size: 15px;
}

.para-2 {
  text-align: center;
  color: black;
  font-size: 15px;
  margin-top: -10px;
  margin-left:-40px;
}
.para-2 a {
  color: #ffa500;
 
}
.center{
  margin-top:-20px;
  margin-left:120px;
}
    </style>
   
  </head>
  <body>
  <header>
<?php @include 'header.php'; ?>
</header>
<section>
  <div class="container">
    <div class="signup-box">
      <h1><span class="yellow">Sign</span> Up</h1>
      <h4>face to your fears</h4>
      <div class="col-lg-12">
		<div class="alert alert-danger" role="alert" id="error" style="display: none; color:red;"><h2>...</h2></div>
      <form id="signUp-form" name="signUp_form" role="form" style="display: block;" method="post">
        <label> First Name:</label>
        <input type="text" name="f_name" id="f_name" tabindex="1" class="form-control" placeholder="First Name" value=""  required>
        <div>
        <label>Last Name</label>
        <input type="text" name="l_name" id="l_name" tabindex="1" class="form-control" placeholder="Last Name" value=""  required>
        </div>
        <div>
        <label>Email</label>
        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value=""  required>
        </div>
        <div>
        <label>Password</label>
        <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value=""  required>
        </div>
        <div>
        <label>Confirm Password</label>
        <input type="password" name="c_password" id="c_password" tabindex="1" class="form-control" placeholder="Confirm Password" value=""  required>
        <div class="alert alert-danger" role="alert" id="p_error" style="display: none; color:red;"><h2>...</h2></div>
        </div>
      
        <div class="col-xs-12 form-group pull-right">     
        <button type="submit" name="sign-up" id="sign-up" tabindex="4" class="sign-up">
        <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Sign Up
        </button>
        </div>
		</form>
    <p>
        By clicking the Sign Up button,you agree to our<br />
      <p class="center">  <a href="#" >Terms and Condition</a> and <a href="#">Policy Privacy</a></p>

      </p>
      <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
</div>
</div>
    </div>
</div>
</section>
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
