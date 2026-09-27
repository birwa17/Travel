<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Skytravel </title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--font awesome cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!--custom css file link-->
    <link rel="stylesheet" href="index.css" />
    <link rel="shortcut icon" href="media/Sky-Travel-TourLogo-Preview.jpg" type="image/x-icon">
  </head>
  <body>
    <!--header section starts-->

    <header>
      <!--menu-bar section start-->
      <div id="menu-bar" class="fas fa-bars"></div>
      <!--menu-bar section end-->

      <a href="#" class="logo"><span>s</span>kytravel</a>
 
      <nav class="navbar">
        <a href="#Home">Home</a>
        <a href="#Book">Book</a>
        <a href="#Packages">Packages</a>
        <a href="#Services">Services</a>
        <a href="#Gallery">Gallery</a>
        <a href="#Review">Review</a>
        <a href="#Contact">Contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>
      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search Here....." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>
  <!--header section ends-->

<!--login form container-->
<div class="login-form-container" id="login-form-container">
  <i class="fas fa-times" id="form-close"></i>

  <form action="login.php" method="POST">
    <h3>Login</h3>
    <input type="email" name="email" class="box" placeholder="Enter your email" required />
    <input type="password" name="password" class="box" placeholder="Enter your password" required />
    <input type="submit" value="Login now" class="btn" />
    <input type="checkbox" id="Remember" name="Remember" />
    <label for="Remember">Remember me</label>
    <p>Forgot password? <a href="forgot_password.php">Click Here</a></p>
    <p>Don't have an account? <a href="registor.php">Register Now</a></p>
    <a href="logout.php"  class="btn" style="color: black; text-align:center">Logout</a>
  </form>
</div>
<!--login form container end-->


    <!--Home section starts-->
      <section class="home" id="Home">
      <div class="content">
        <h3>namaste , welcome to skytravel</h3>
        <p>Adding a joy to your journey</p>
        <a href="#Packages" class="btn">discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="media/vid1.mp4"></span>
        <span class="vid-btn" data-src="media/vid2.mp4"></span>
        <span class="vid-btn" data-src="media/vid3.mp4"></span>
        <span class="vid-btn" data-src="media/vid4.mp4"></span>
        <span class="vid-btn" data-src="media/vid5.mp4"></span>
      </div>

      <div class="video-container">
        <video src="media/vid1.mp4" id="video-slider" loop autoplay muted></video>
      </div>
    </section>
    <!--home section ends-->

    <!--book section start-->
    <section class="book" id="Book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="media/map.jpg" />
        </div>
        <form action="connect.php" method="POST">
          <div class="inputbox">
            <h3>Where to</h3>
            <input type="text" name="pname" placeholder=" place name" />
          </div>
          <div class="inputbox">
            <h3>how many</h3>
            <input type="number" name="nguest" placeholder=" number of guests" />
          </div>

          <div class="inputbox">
            <h3>arrivals</h3>
            <input type="date"name="date" />
          </div>

          <div class="inputbox">
            <h3>leaving</h3>
            <input type="date" name="ldate" />
          </div>

          <input type="submit" name="submit" class="btn" value="Book Now" />
        </form>
      </div>
    </section>
<!--book section end-->

    <!--packages section start-->
    <section class="packages" id="Packages">
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

<section class="box-container">
 <div class="box">
   <a href="kedarnath.html"><img src="media/pa1.jpg" /></a>
   <div class="content">
     <h3><i class="fas fa-map-marker-alt"></i>Kedarnath</h3>
  <p> temple of the lord of the field,  is a Hindu temple (shrine) dedicated to the Hindu God, Shiva. 
    According to Hindu legends, the temple was initially built by Pandavas, and is one of the twelve Jyotirlingas, 
    the holiest Hindu shrines of Shiva.</p>
  <div class="stars">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
  </div>
 <div class="price">Rs. 20,000 <span>Rs. 30,000</span></div>
 <a href="kedarnath.html" class="btn">book now</a>          
</div>
 </div>

 <div class="box">
  <a href="agra.html"><img src="media/pa2.jpg" /></a>
     <div class="content">
       <h3><i class="fas fa-map-marker-alt"></i>Agra</h3>
    <p>The city of Agra holds an indelible mark in the history of India. 
      Home to one of the Seven Wonders of the World, the Taj Mahal, Agra is also known for other architectural wonders from Mughal Era.
       Each famous site,</p>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="far fa-star"></i>
    </div>
   <div class="price">Rs.8500<span> Rs.10,000.00</span></div>
   <a href="agra.html" class="btn">book now</a>          
  </div>
   </div>

   <div class="box">
    <a href="mumbai.html"><img src="media/pa3.jpg" /></a>
     <div class="content">
       <h3><i class="fas fa-map-marker-alt"></i>Mumbai</h3>
    <p>Mumbai (formerly known as Bombay) is the capital of the Indian state of Maharashtra and the most populous Indian city. 
      Mumbai is located on an island off the west coast of India. The city,
     which has a deep natural harbour, is also the largest port in western India</p>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="far fa-star"></i>
    </div>
   <div class="price">Rs.34,000.00<span> Rs.40,000.00</span></div>
   <a href="mumbai.html" class="btn">book now</a>          
  </div>
   </div>

 <div class="box">
  <a href="Goa.html"><img src="media/pa4.jpg" /></a>
     <div class="content">
     <h3><i class="fas fa-map-marker-alt"></i>Goa</h3>
    <p>Goa is India's smallest state in terms of area and the second smallest in terms of population after Sikkim. 
      It is located on the west coast of India,</p>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="far fa-star"></i>
    </div>
   <div class="price">Rs40,000.00<span> Rs.60000.00</span></div>
   <a href="Goa.html" class="btn">book now</a>          
  </div>
   </div>

   <div class="box">
    <a href="lucknow.html"><img src="media/pa5.jpg" /></a>
     <div class="content">
       <h3><i class="fas fa-map-marker-alt"></i>Lucknow</h3>
    <p>Lucknow, city, capital of Uttar Pradesh state, northern India. It is located roughly in the centre of the state on the Gomati River.
       The Rumi Darwaza, or Turkish Gate, in Lucknow, Uttar Pradesh, India.</p>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="far fa-star"></i>
    </div>
   <div class="price">Rs.12000<span> Rs.15000.00</span></div>
   <a href="lucknow.html" class="btn">book now</a>          
  </div>
   </div>

   <div class="box">
    <a href="dwarka.html"><img src="media/pa6.jpg" /></a>
     <div class="content">
       <h3><i class="fas fa-map-marker-alt"></i>Dwarka</h3>
    <p>Dwarka is one of the Chardhams, four sacred Hindu pilgrimage sites, and is one of the Sapta Puri, 
      the seven most ancient religious cities in the country, the ancient kingdom of Krishna, 
      and is believed to have been the first capital of Gujarat.</p>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
    </div>
   <div class="price">Rs.9500.00<span> 15000</span></div>
   <a href="dwarka.html" class="btn">book now</a>          
  </div>
   </div>

  </section>
</section>
<!--packages section end-->

<!--services section starts-->
<section class="services" id="Services">
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
        <i class="fas fa-hotel"></i>
        <h3>affordable hotel</h3>
        <p> The hotel industry in India is a part of the travel and tourism industry. Business travellers are It has observed a shift in favor of the mid-market and budget hotel segments.</p>
      </div>

      <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p>These findings contrast the Indian vegetarian ideology meat-eating is brown/​non-vegetarian/non-veg marks on all packaged foods/drinks in India.</p>
      </div>

      <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>safety guide</h3>
        <p>management of safety and health risks at workplaces and to provide . </p>
      </div>

      <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>around the world</h3>
        <p>And part of that experience is being thrown in with people from all around the world. 
          Organisers often go the extra mile when designing sets,</p>
      </div>

      <div class="box">
        <i class="fas fa-plane"></i>
        <h3>fastest travel</h3>
        <p>Overview India is now one of the fastest growing outbound tourism markets in the world, second only to China. The United Nations World</p>
      </div>

      <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p>Adventure tourism is a tourist activity that includes a physical activity, 
          As travelers seek new and different experiences, adventure tourism continues to grow in </p>
      </div>

    </div>
</section>
<!--services section end-->

<!--gallery section start-->

<section class="gallery" id="Gallery">
  <h1 class="heading">
    <span>g</span>
    <span>a</span>
    <span>l</span>
    <span>l</span>
    <span>e</span>
    <span>r</span>
    <span>y</span>
  </h1>

  <div class="box-container">
    <div class="box">
      <img src="media/q1.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Jammu & Kashmir its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q2.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Assam its best places to visit </p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q3.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on mumbai its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q4.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Goa its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q5.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Gujarat its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q6.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on kerala its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q7.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Rishikesh its best places to visit</p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q8.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Sikkim its best places to visit </p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>

    <div class="box">
      <img src="media/q9.jpg">
      <div class="content">
        <h3>amezing places</h3>
        <p>Travel and holiday guide on Manali its best places to visit </p>
        <a href="#Packages" class="btn">see more</a>
      </div>
    </div>
</div>
</section>
<!--gallery section end-->

<!--review section start-->
<!--review section start-->
<h1 class="heading">
    <span>r</span>
    <span>e</span>
    <span>v</span>
    <span>i</span>
    <span>e</span>
    <span>w</span>
  </h1>
<section class="review">
  <div class="swiper-container review-slider">
    <?php include 'load_reviews.php'; ?>
  </div>

  <!-- Review Form -->
  <div class="review-form-container">
    <h3>Add Your Review</h3>
    <form id="review-form" action="submit_review.php" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="location" placeholder="Location" required>
      <textarea name="review" placeholder="Your Review" required></textarea>
      <input type="number" name="rating" placeholder="Rating (1-5)" min="1" max="5" required>
      <button type="submit" class="btn">Submit Review</button>
    </form>
  </div>
</section>
  <!--review section end-->
<!--contact section start-->

<section class="contact" id="Contact">

  <h1 class="heading">
    <span>c</span>
    <span>o</span>
    <span>n</span>
    <span>t</span>
    <span>a</span>
    <span>c</span>
    <span>t</span>
  </h1>

<div class="row">
<div class="image">
<img src="media/t1.jpg">
</div>

<form action="conn.php" method="POST">
  <div class="inputBox">
   <input type="text" name="name" placeholder="Name"> 
   <input type="email" name="email" placeholder="Email"> 
  </div>
  <div class="inputBox">
    <input type="number" name="mobile" placeholder="Number"> 
    <input type="text" name="subject" placeholder="subject"> 
   </div>
<textarea  placeholder="message" name="message"  id="" cols="30" rows="10"></textarea>
<input type="submit" class="btn" name="submit" value="submit" >
</form>

</div>
</section>
<!--contact section end-->
<!--brand section start-->

<section class="brand-container" >
  <div class="swiper-container  brand-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="media/z1.jpg"> </div> 
      <div class="swiper-slide"><img src="media/z2.jpg"> </div> 
      <div class="swiper-slide"><img src="media/z3.jpg"> </div>     
      <div class="swiper-slide"><img src="media/z4.jpg"> </div> 
      <div class="swiper-slide"><img src="media/z5.jpg"> </div> 
    </div>
  </div>
</section>

<!--brand section end-->
<!--footer section start -->
<section class="footer">
  <div class="box-container">

    <div class="box">
      <h3>about us</h3>
      <p>Discover the world with Skytravel — your gateway to unforgettable journeys, personalized recommendations, and expert travel guides</p>
    </div>

    <div class="box">
      <h3>branch locations</h3>
      <a href="#">Agra</a>
      <a href="#">Delhi</a>
      <a href="#">Mumbai</a>
      <a href="#">Dehradun</a>
      <a href="#">udipur</a>
    </div>

    <div class="box">
      <h3>quick links</h3>
      <a href="#Home">Home</a>
      <a href="#Book">Book</a>
      <a href="#Packages">Packages</a>
      <a href="#Services">Services</a>
      <a href="#Gallery">Gallery</a>
      <a href="#Review">Review</a>
      <a href="#Contact">Contact</a>
    </div>

    <div class="box">
      <h3>follow us</h3>
      <a href="https://www.facebook.com/">facebook</a>
      <a href="https://www.instagram.com/">instagram</a>
      <a href="https://www.twitter.com/">twitter</a>
      <a href="https://www.linkein.com/">linekdin</a>

    </div>
</div>
<h1 class="credit">created by <span>Parthi, Birwa & Priya</span> </h1>
</section>

 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--js file link-->
  <script src="index.js"></script>
  </body>
</html>