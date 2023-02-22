<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script> -->

    <style type="text/css">

        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
:root{
  --orange:#ffa500;
}

*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
  transition: all .2s linear;
}

*::selection{
  background:var(--orange);
  color:#fff;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top: 6rem;
  scroll-behavior: smooth;
}

section{
  padding:2rem 9%;
}

.heading{
  text-align: center;
  padding:2.5rem 0
}

.heading span{
  font-size: 3.5rem;
  background:rgba(255, 165, 0,.2);
  color:var(--orange);
  border-radius: .5rem;
  padding:.2rem 1rem;
}

.heading span.space{
  background:none;
}


header{
  position: fixed;
  top:0; left: 0; right:0;
  background:#333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:2rem 9%;
}

header .logo{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#fff;
  text-transform: uppercase;
}

header .logo span{
  color:var(--orange);
}

header .navbar a, .admin{
  color:#fff;
  font-size: 2rem;
  margin:0 .8rem;
}

header .navbar a:hover{
  color:var(--orange);
}
.admin:hover{
  color:var(--orange);
}
header .icons i{
  font-size: 2.5rem;
  color:#fff;
  cursor: pointer;
  margin-right: 2rem;
}

header .icons i:hover {
  color:var(--orange);
}


.login-form-container{
  position: fixed;
  top:-120%; left: 0;
  z-index: 10000;
  min-height: 100vh;
  width:100%;
  background:rgba(0,0,0,.7);
  display: flex;
  align-items: center;
  justify-content: center;
}

.login-form-container.active{
  top:0;
}

.login-form-container form{
  margin:2rem;
  padding:1.5rem 2rem;
  border-radius: .5rem;
  background:#fff;
  width:50rem;
}

.login-form-container form h3{
  font-size: 3rem;
  color:#444;
  text-transform: uppercase;
  text-align: center;
  padding:1rem 0;
}

.login-form-container form .box, .container-admin form .box{
  width:100%;
  padding:1rem;
  font-size: 1.7rem;
  color:#333;
  margin:.6rem 0;
  border:.1rem solid rgba(0,0,0,.3);
  text-transform: none;
}

.login-form-container form .box:focus{
  border-color: var(--orange);;
}

.login-form-container form #remember .container-admin form #remember{
  margin:2rem 0;
}

.login-form-container form label, .container-admin form label{
  font-size: 1.5rem;
}

.login-form-container form .btn, .container-admin form .submit{
  display: block;
  width:100%;
}

.login-form-container form p, .container-admin form p{
  padding:.5rem 0;
  font-size: 1.5rem;
  color:#666;
}

.login-form-container form p a,.container-admin form p a{
  color:var(--orange);
}

.login-form-container form p a:hover, .container-admin form p a:hover{
  color:#333;
  text-decoration: underline;
}

.login-form-container #form-close{
  position: absolute;
  top:2rem; right:3rem;
  font-size: 5rem;
  color:#fff;
  cursor: pointer;
}

#menu-bar{
  color:#fff;
  border:.1rem solid #fff;
  border-radius: .5rem;
  font-size: 3rem;
  padding:.5rem 1.2rem;
  cursor: pointer;
  display: none;
}


.btn, .submit{
  display: inline-block;
  margin-top: 1rem;
  background:var(--orange);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid var(--orange);
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover, .submit:hover{
  background:rgba(255, 165, 0,.2);
  color:black;
}






.container-admin
       {
        position: absolute;
        top:0%; left: 0;
        z-index: 10000;
        min-height: 100vh;
        width:100%;
        background:rgba(0,0,0,.7);
        display: none;
        align-items: center;
        justify-content: center;
		
       }

      .container-admin form{
        margin:2rem;
        padding:1.5rem 2rem;
        border-radius: .5rem;
        background:#fff;
        width:55rem;
        height:35rem;
      }
        
      .container-admin h2{
        font-size: 3rem;
        color:#444;
        text-transform: uppercase;
        text-align: center;
        padding:1rem 0;
        margin-bottom:20px;
      }

      .container-admin #closeBtn{
      position: absolute;
      top:2rem; right:3rem;
      font-size: 5rem;
      color:#fff;
      cursor: pointer;
      }
		span{
			color:var(--orange);
		}

    #admin{
      cursor:pointer;
    }

    .dropbtn {
  background-color: #ffa500;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ffa500;}
</style>
</head>

<body>

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>NO  LIMIT  </span>  ADVENTURE</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About </a>
            <a href="packages.php">packages</a>
            <a href="contact.php">contact</a>
            <a href=<?php if(isset($_SESSION['user_session'])){ echo "book.php";} else{echo "login.php";}?>>booking</a>
        
        </nav>

        <div class="icons">

            <div class="dropdown">
            <?php 
              if( isset($_SESSION['user_session'])){ ?>
                  <button class="dropbtn">Hi, <?php echo $_SESSION['user_session']; ?></button>
                  <div class="dropdown-content">
                    <a href="myBookings.php">My Bookings</a>
                    <a href="logout.php">Log Out</a>

                  </div>
             </div>
              <?php
              }else{
                ?>
                  <!-- <a class="fas fa-user" id="login-btn" href="login.php"></a> -->
            <a id="admin" class="admin" href="login.php">Login</a>
            <?php
              }
            ?>
            
        </div>
</header>

<script >
// let formBtn = document.querySelector('#login-btn');
// let loginForm = document.querySelector('.login-form-container');
// let formClose = document.querySelector('#form-close');
// let menu = document.querySelector('#menu-bar');
// let navbar = document.querySelector('.navbar');

// window.onscroll = () =>{
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');
//     loginForm.classList.remove('active');
// }

// menu.addEventListener('click', () =>{
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active');
// });


// formBtn.addEventListener('click', () =>{
//     loginForm.classList.add('active');
// });

// formClose.addEventListener('click', () =>{
//     loginForm.classList.remove('active');
// });


// document.getElementById("admin").addEventListener("click",function(){
//         document.querySelector(".container-admin").style.display="flex";})

//         document.getElementById("closeBtn").addEventListener("click",function(){
//         document.querySelector(".container-admin").style.display="none";})     

</script>
</body>
</html>