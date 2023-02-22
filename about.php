
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');
 
:root{
  --orange:#ffa500;
}

*{
    font-family: 'Poppins',sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    transition: all .2s linear;
    color: black;  
    list-style: none;
    
}

.about-us{
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    color:#ffff;
   
}
.image{
    height: auto;
    width:50%;  
    bottom: 5%;
    position: relative;

}
.card{
    width: 90%;
    height: auto;
    margin: 10px 70px 20px 10px;
    color: black;
    text-align: center;
    border:1px solid rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.1);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0,0,0,0.3);
    backdrop-filter:blur(5px);
    
}

.card .about-main{
    max-width: 100%;
    margin: 0 auto;   
}

.card h1{
    font-size: 80px;
    margin-top: 10px;
    text-transform: capitalize;
    margin-bottom: 10px;
    color:black;
}

.card h3{
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 20px;
    letter-spacing: 5px;
    color:black;
}

span{
    color: var(--orange);
}
.card p{
    font-size: 18px;
    letter-spacing: 1px;
    line-height: 28px;
    text-align: justify;
    padding: 10px;
    margin: 10px 10px 30px 10px;
    
}

.card .button{
    
    text-decoration: none;
    border: 2px solid var(--orange);
    font-weight: bolder;
    padding: 13px 30px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 18px;
    transition: .4s;
    text-transform: capitalize;
    margin-bottom: 35px;
    color:black;
}

.button:hover{
    border: 2px solid var(--orange);
    background-color: var(--orange);
   
}

 ul.social_links {
    display: block;
    padding: 20px 0px 0px;
    color:black;
}

li {
    display: inline-block;
    font-size: 18px;
    padding: 0px 10px;
    gap: 35px;
    color:black;
}

ul.social_links i {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    transition: background .5s;
    color:black;
}

ul.social_links i:hover{
    background-color: var(--orange);
}


.our-team{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.our-team .card-item{
    width: 330px;
    height:416px;
    padding: 60px 30px;
    margin: 20px;
    background: rgba(255,255,255,0.1);;
    box-shadow: 0 4px 30px rgba(0,0,0,0.3);
    backdrop-filter:blur(5px);
    border-radius: 16px;
    
}

.our-team .card-item .content{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.our-team .card-item .content .imgBox {
    width: 160px;
    height: auto;
    aspect-ratio: 1/1;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 40px;
    position: relative;
    
 }

.our-team .card-item .content .imgBox img{
     position: absolute;
     object-fit: cover;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
   
}

.our-team .card-item .content .contentBox h4{
    color: black;
    font-size: 20px;
    text-align: center;
    letter-spacing: 1px;
}

.our-team .card-item .content .contentBox h5{
    color: #6c758f;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    letter-spacing: 0.9px;
}

.our-team .card-item .content .social-media {
    margin-top: 20px;
    
}
.our-team .card-item .content .social-media i{
    text-decoration: none;
    font-size: 25px;
    margin: 10px;
    transition: color 0.4s;
    
}
.our-team .card-item .content .social-media i:hover{
    color: var(--orange);
}



h1{
    font-size: 70px;
    margin-top: 20px;
    text-transform: capitalize;
    margin-bottom: 10px;
    text-align: center;
}

    </style>*/
    
</head>
<body>

<header>
<?php @include 'header.php'; ?>
</header>    
	
   
    <div class="about-us" style="margin-top:100px;">
        
            <img src="images/aboutus.jpg" class="image"  >
        <div class="card">
            <div class="about-main">
                <h1>About <span>Us</span></h1>
                <h3>Adventure <span>Sports</span></h3>
                <p>At Adventure Sports we create, organise and deliver hundreds of events every year, from daily adventures from once in a lifetime experiences.

Our fantastic Warwick location gives us all the space and countryside to create amazing activities, from paintball courses to hovercraft grounds, and means we are always coming up with great new adventures you can enjoy.

    At Adventure Sports we've got a lot more than just thrilling activities on offer, we've also have many additional services like room hire and catering, to really make your experience amazing.
  

              </p>   
                 
                <a href="contact.php" class="button" onclick="contact()">Contact Our Team</a>

                <ul class="social_links">
                    <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
   

    <h1>Our <span>Team</span></h1>
    <div class="our-team">
        
        <div class="card-item">
            <div class="content">
                <div class="imgBox">
                    <img src="images/mem1.jpg">
                </div>
                <div class="contentBox">
                    <h4>Sylvester Stallone</h4>
                    <h5>Guide</h5>
                </div>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="content">
                <div class="imgBox">
                    <img src="images/mem2 (1).jpg">
                </div>
                <div class="contentBox">
                    <h4>Thomas Canestraro</h4>
                    <h5>Guide</h5>
                </div>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="content">
                <div class="imgBox">
                    <img src="images/mem2 (2).jpg">
                </div>
                <div class="contentBox">
                    <h4>Velizar Binev</h4>
                    <h5>Guide</h5>
                </div>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="card-item">
            <div class="content">
                <div class="imgBox">
                    <img src="images/mem2 (3).jpg">
                </div>
                <div class="contentBox">
                    <h4>Victor Ortiz</h4>
                    <h5>Guide</h5>
                </div>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>


    </div>
    <footer>
     <?php @include 'footer.php'; ?>
</footer>
</body>
</html>