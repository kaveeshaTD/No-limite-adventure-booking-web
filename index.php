<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The most experienced adventure sports</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>
    <?php @include 'header.php'; ?>
</header>    

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <br>
        <br>
        <br>
        <h3>face to your fears</h3>
        
        <?php if(!isset($_SESSION['user_session'])){ ?>
            <a href="up.php" class="btn">SIGN UP</a>
        <?php } ?>
        
    </div>

    <div class="controls">
        <span class="vid-btn active " data-src="images/vid0.mp4"></span>
        <span class="vid-btn" data-src="images/vid2.mp4"></span>
        <span class="vid-btn" data-src="images/vid3.mp4"></span>
        
    </div>

    <div class="video-container">
        <video src="images/vid0.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->


<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>
          <h1 class="heading"> 
        <span>f</span>
        <span>o</span>
        <span>r</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
        </h1> 
    <div class="box-container">

        <div class="box">
            <img src="images/pac1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Personal </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $30.00 <span>$50.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pac2.jpg" alt="">
            <div class="content">

                <h3> <i class="fas fa-map-marker-alt"></i> Basic </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $70.00 <span>$90.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pac3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Standard </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $80.00 <span>$100.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>
    </div>

  <h1 class="heading">
        <span>l</span>
        <span>o</span>
        <span>c</span>
        <span>a</span>
        <span>l</span>
         </h1>
    <div class="box-container">

        <div class="box">
            <img src="images/pac1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Personal </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  Rs.9 000.00 <span> Rs.15 000.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pac2.jpg" alt="">
            <div class="content">

                <h3> <i class="fas fa-map-marker-alt"></i> Basic </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">  Rs.21 000.00 <span> Rs.27 000.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pac3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Standard </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rs.24 000.00 <span> Rs.30 000.00</span> </div>
                <a href="packages.php" class="btn">book now</a>
            </div>
        </div>
    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>equipment</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p></p>
        </div>
        <div class="box">
            <i class=" fas fa-skiing"></i>
            <h3>training guides</h3>
            <p></p>
        </div>
      
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p></p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>s</span>
        <span>p</span>
        <span>o</span>
        <span>r</span>
        <span>t</span>
        <span>s</span>
       
    </h1>


    <div class="box-container">

        <div class="box">
            <img src="images/gallery2.jpeg" alt="">
            <div class="content">
                <h3>sky diving</h3>
                <p>Parachuting, including also skydiving, is a method of transiting from a high point in the atmosphere to the surface of Earth with the aid of gravity, involving the control of speed during the descent using a parachute or parachutes.</p>
                <a href="gallery.php"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery3.jpg" alt="">
            <div class="content">
                <h3>water rafting</h3>
                <p>Rafting and whitewater rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water. This is often done on whitewater or different degrees of rough water. Dealing with risk is often a part of the experience.</p>
                <a href="gallery.php" ></a>
            </div>
        </div>  -->
        <div class="box">
            <img src="images/gallery4.jpg" alt="">
            <div class="content">
                <h3>camping</h3>
                <p>Camping is an outdoor activity involving overnight stays away from home, either without shelter or using basic shelter such as a tent or a recreational vehicle. Typically participants leave developed areas to spend time outdoors in more natural ones in pursuit of activities providing them enjoyment or an educational experience.</p>
                <a href="gallery.php"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery5.jpg" alt="">
            <div class="content">
                <h3>flying rawana</h3>
                <p>Flying Ravana Adventure park is one of a kind experience available in Sri Lanka, located amidst the luscious green estates of Ella. Completed with its pride, the Sri Lanka’s first ever Mega zip-line.</p>
                <a href="gallery.php"></a>
            </div>
        </div>
        
        <div class="box">
            <img src="images/gallery7.jpg" alt="">
            <div class="content">
                <h3>Mountain Biking</h3>
                <p>Mountain Biking</h3>
                <p>When talking about different types of adventure sports, the list would be incomplete without mountain biking. A sport that satisfies the hunger for height, speed, and a ton of kick, it sure will get your heart racing, quite literally.</p>
                <a href="gallery.php"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery8.jpg" alt="">
            <div class="content">
                <h3>Kayaking </h3>
                <p>From head to head racing to a classic Grand Prix, go karting at Adventure Sports is brilliant fun for people of all ages, with special Junior sessions for younger drivers.</p>
                <a href="gallery.php" ></a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery9.jpg" alt="">
            <div class="content">
                <h3>atv adventure</h3>
                <p>Our ATV Adventure is designed with a more in depth, more private and unique journey that will see you and your group traverse the winding sugarcane field trails from estate to estate coupled with a first-hand view of the majestic Wingfield Mountains, centuries-old Sugar Plantation ruins, the Brimstone Hill Fortress, remote villages, local farms, and exotic wildlife.</p>
                <a href="gallery.php"></a>
            </div>
        </div>
 <div class="box">
            <img src="images/gallery10.jpg" alt="">
            <div class="content">
                <h3>paintbal fire</h3>
                <p>Paintball is an exciting mix of action, teamwork and tactics that's loads of fun whether you're planning a party or just want something fun to do this weekend!</p>
                <a href="gallery.php"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery13.jpg" alt="">
            <div class="content">
                <h3>Rock Climbing</h3>
                <p>Rock climbing is a sport in which participants climb up, down or across natural rock formations or artificial rock walls.</p>
                <a href="gallery.php" ></a>
            </div>
        </div>  
  <div class="box">
            <img src="images/gallery12.png" alt="">
            <div class="content">
                <h3>jeski ride</h3>
                <p>Jet Ski is the brand name of a personal watercraft (PWC) manufactured by Kawasaki, a Japanese company. The term is often used generically to refer to any type of personal watercraft used mainly for recreation, and it is also used as a verb to describe the use of any type of PWC.</p>
                <a href="gallery.php"></a>
            </div>
        </div>  
    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/cus2.jpeg" alt="">
                    <h3>Danuja Nimantha</h3>
                    <p>A+++.. Super service..I like to get this opportunity again...quickly react and solve our problems</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/cus1.jpeg" alt="">
                    <h3>Amashi Rathnayak</h3>
                    <p>Amazing experience..highly recommended.. staf is very friendly</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/cus3.jpeg" alt="">
                    <h3>Udara Galagamage</h3>
                    <p>The best
                      The best. Thanks for making my dreams affordable.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/cus4.jpeg" alt="">
                    <h3>Akash Rathnayaka</h3>
                    <p>Highly Recommended
                       Fast and friendly service, great price, what's not to like?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->


<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>
<footer>
    <?php @include 'footer.php'; ?>
</footer>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js">
    

</script>

</body>
</html>