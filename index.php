<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/71aa3b06af.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- css file link -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="bg">
<!-- header section starts -->
<header class="header" id="header">
  
  <a href="#" class="logo">
    <img src="assets/img/logo/logo.png" alt="logo" srcset="">
  </a>

  <nav class="navbar">
    <a data-aos="fade-in" data-aos-delay="100" href="#home">Home</a>
    <a data-aos="fade-in" data-aos-delay="200" href="#menu">Menu</a>
    <a data-aos="fade-in" data-aos-delay="300" href="#products">Products</a>
    <a data-aos="fade-in" data-aos-delay="400" href="#about">About</a>
    <a data-aos="fade-in" data-aos-delay="500" href="#review">Review</a>
    <a data-aos="fade-in" data-aos-delay="600" href="#contact">Contact</a>
  </nav>

  <div class="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
  </div>
  <div class="icons">
    <i class="fa-solid fa-magnifying-glass search-btn"></i>
    <i class="fa-solid fa-cart-shopping cart-btn"></i>
    <i class="fa-solid fa-bars menu-btn"></i>
  </div>

</header>
<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
  <div class="content">
    <h3 data-aos="fade-in"><span>Coffee</span> in the morning</h3>
    <hr data-aos="fade-left" >
    <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque magnam corrupti illum, voluptate numquam cupiditate sint at veritatis adipisci quasi. Ut labore repellendus beatae explicabo aliquam, voluptates cupiditate debitis nostrum.</p>
    <a data-aos="fade-up" data-aos-delay="100" href="" class="btn">get yours now</a>
  </div>
  <div class="img" data-aos="fade-down">
    <img src="assets/img/banner/coffee-cup.png" alt="coffee-cup">
  </div>
</section>

<!-- home section ends -->
</div>

<!-- card start -->
<div class="card">
        <div class="section">
            <h2>Coffee</h2>
            <p class="number" data-target="9">0</p>
        </div>
        <div class="section">
            <h2>Products</h2>
            <p class="number" data-target="9">0</p>
        </div>
        <div class="section">
            <h2>Customers</h2>
            <p class="number" data-target="2000">0</p>
        </div>
</div>
<!-- card end -->

<!-- quote start -->
<div class="quote-container">
  <div class="blockquote-wrapper">
    <div class="blockquote">
      <h1>
      Life is too short for bad coffee
      </h1>
      <h4>&mdash;Steven Pressfield</h4>
    </div>
  </div>
  <div class="blockquote-wrapper">
    <div class="blockquote">
      <h1>
      Life begins after coffee
      </h1>
      <h4>&mdash;Louisa May Alcott</h4>
    </div>
  </div>
  <div class="blockquote-wrapper">
    <div class="blockquote">
      <h1>
      Coffee is a hug in a mug
      </h1>
      <h4>&mdash;Howard Schultz</h4>
    </div>
  </div>
</div>
<!-- quote end -->

<!-- menu section starts -->
<section class="menu" id="menu">

  <h1 class="heading">Popular Beverages<h1>
  <p class="caption">For more products , Check out our menu</p>  
  <div class="box-container">

  <div class="box">
         <img src="./assets/img/menu/set3.jpeg" alt="" />
         <div class="menu-content">
            <h3>Set</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="menu.php">More Menu</a>
         </div>
    </div>

    <div class="box">
         <img src="./assets/img/menu/coffee2.jpg" alt="" />
         <div class="menu-content">
            <h3>Coffee</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="menu.php">More Menu</a>
         </div>
    </div>

    

    <div class="box">
         <img src="./assets/img/menu/cake3.jpeg" alt="" />
         <div class="menu-content">
            <h3>Cake</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="menu.php">More Menu</a>
         </div>
    </div>
  </div>
</section>

<!-- menu section ends -->

<!-- about section starts -->

<section class="about" id="about">
  <h1 class="heading"> <span>about</span> us </h1>

  <div class="row ">
      <div class="image">
        <img src="images/about.jpg" alt="" class="about-img">
      </div>
      <div class="content">
        <h3>what makes our coffee special?</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius id dolores illo ea porro laborum facilis, laudantium inventore! Tempora sequi, laudantium repellendus saepe corrupti soluta quis quidem est ratione ipsum!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quaerat voluptatum? Sapiente inventore placeat quos nam quaerat? Quia, molestiae ad.</p>
        <a href="signup.php" class="btn">Become a Membership</a>
      </div>
  </div>
</section>
<!-- about section ends -->

<!-- feedback section starts -->

<section class="review" id="review">

  <h1 class="heading">feedback</h1>

  <div class="box-container">

    <div class="box">
      <img src="images/quote.png" alt="">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nam minus animi veritatis, consectetur voluptatibus tenetur alias distinctio, maxime eius facere inventore dignissimos saepe voluptas labore quam expedita nisi dolorum?</p>
      <h3>-- john doe --</h3>
    </div>
    <div class="box">
      <img src="images/quote.png" alt="">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nam minus animi veritatis, consectetur voluptatibus tenetur alias distinctio, maxime eius facere inventore dignissimos saepe voluptas labore quam expedita nisi dolorum?</p>
      <h3>-- john doe --</h3>
    </div> 
    <div class="box">
      <img src="images/quote.png" alt="">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nam minus animi veritatis, consectetur voluptatibus tenetur alias distinctio, maxime eius facere inventore dignissimos saepe voluptas labore quam expedita nisi dolorum?</p>
      <h3>-- john doe --</h3>
    </div>
  </div>

</section>

<!-- feedback section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
  <h1 class="heading"><span>contact</span> us</h1>
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96729.04650511633!2d-74.07760278740872!3d40.74480671076137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259f809dae747%3A0xcc77ed69118b67af!2sCopper%20Mug%20Coffee!5e0!3m2!1sen!2smm!4v1720954138773!5m2!1sen!2smm" width="550" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="info">
      <p>Opening Hours: 7:00 AM - 11:00 AM</p>
      <p>Monday - Sunday</p>
      <br>
      <p>Address - Somewhere U.S</p>
      <p>Phone: +95 9237555698</p>
      <p class="email">Email: example@gmail.com</p>
      
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-x-twitter"></i>
      <i class="fa-brands fa-snapchat"></i>
    </div>
  </div>
</section>

<!-- contact section ends -->

<!-- footer section starts -->

<section class="footer">
  <div class="credit">Copyright &copy; | All Rights Reserved</div>
</section>



<!-- footer section ends -->

  <!-- javascript file link -->
  <script src="js/app.js"></script>
</body>
</html>