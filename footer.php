<!-- footer section starts  -->
<!DOCTYPE html> 
      <html>
      <head>
        <title>Sign in</title>
        <style type = "text/css">
*{
 /* color:#eee;*/
}
.footer{
   height: auto; 
   width: 100vw;
   background:#333;
  
}

.footer .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  justify-content:space-around;
}

.footer .box-container .box{
  padding:1rem 0;
  flex:1 1 25rem;
  color:#eee;
}

.footer .box-container .box h3{
  font-size: 2.5rem;
  padding:.7rem 0;
  color:#fff;
}

.footer .box-container .box p{
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}

.footer .box-container .box a{
  display: block;
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}

.footer .box-container .box a:hover{
  color:var(--orange);
  text-decoration: underline;
}

.footer .credit{
  text-align: center;
  padding:2rem 1rem;
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: normal;
  color:#fff;
  border-top: .1rem solid rgba(255,255,255,.2);
}

.footer .credit span{
  color:var(--orange);
}

.footer .box-container .box a i{
  color:#eee;
}

</style>
</head>
<body>
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="packages.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> our history</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="contact.php"> <i class="fas fa-phone"></i> +94-71 226 5358 </a>
         <a href="contact.php"> <i class="fas fa-phone"></i>+94-41 432 2344 </a>
         <a href="contact.php"> <i class="fas fa-envelope"></i> nolimiteadventure@gmail.com</a>
         <a href="contact.php"> <i class="fas fa-map"></i>No32/1 , Wijerama Mawatha , Nugegoda </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="www.facebok.com"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="www.whatsapp.com"> <i class=" fab fa-whatsapp"></i> whatapp </a>
      </div>

   </div>

    <h1 class="credit">     </h1>

</section>
</body>
</html>

<!-- footer section ends -->