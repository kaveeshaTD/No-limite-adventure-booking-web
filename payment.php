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
  display: flex;
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

.container form .submit-btn{
  width: 85%;
  padding:12px;
  font-size: 17px;
  border: none;
  background-color: #ffa500;
  border-radius: 6px;
  color: white;
  margin-top: 5px;
  cursor: pointer;
  margin-left:35px;
}

.container form .submit-btn:hover{
  background: #ffa500;
}
.yellow{
  color:#ffa500;
}</style>
</head>

<body>
<header>
<?php @include 'header.php'; ?>
</header>
  <section>
       
        <div class="container">
    <form action="" id="payment-form">
      <div class="row">
            <div class="col">
            <h3 class="title">payment</h3>
<div class="inputBox">
                    <p>cards accepted :</p>
                    <img src="images/card-img.jpg" alt="">
                </div>
                <div class="inputBox">
                    <p>name on card :</p>
                    <input type="text" placeholder="Mr.Kumara" required>
                </div>
                <div class="inputBox">
                    <p>credit card number :</p>
                    <input type="number" placeholder="071-1234567" required>
                </div>
                <div class="inputBox">
                    <p>exp month :</p>
                    <input type="text" placeholder="january" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <p>exp year :</p>
                        <input type="number" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <p>CVV :</p>
                        <input type="text" placeholder="1234" required>
                    </div>
                </div>

            </div>
    

       <input type="submit" id="payment" value="proceed to checkout" class ="submit-btn">
    </form>

</div>   
      
  </section>

  <footer >
    <?php @include 'footer.php'; ?>
</footer>

</body>
</html>