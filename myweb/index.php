<?php
include_once 'admin/constants.php';



$sql = "SELECT * FROM cv";
$result = mysqli_query($conn, $sql);

if ($result) {
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $files = [];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saditha Web</title>
  <link rel="stylesheet" href="styles.css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- swipers css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

</head>
<body>
  
  <!-- header section -->

  <header class="header">

    <a href="" class="logo"> Saditha Fernando </a>

    <input type="checkbox" id="check">

    <label for="check" class="icons">
      <i class="bx bx-menu" id="menu-icon"></i>
      <i class="bx bx-x" id="close-icon"></i>
    </label>

    <nav class="navbar">
      <a href="#home" style="--i:0">Home</a>
      <a href="#about" style="--i:1">About</a>
      <a href="#services" style="--i:2">Services</a>
      <a href="#testimonials" style="--i:3">Testimonials</a>
      <a href="#contact" style="--i:4">Contact</a>
    </nav>

  </header>



  <!-- home section code -->
  <section class="home" id="home">


    <div class="home-content">
      <h3>Hi,Myself</h3>
      <h1>Saditha Fernando</h1>
      <h3>I am a <span class="multiple-text">Boxer</span></h3>

      <p>
        I am a person who interested in Sports Management and Journalism with IT and Management skills.
        I am a individual who has experience in Web Development, Events Logistic Management and I can work under stress to achive the goals.
      </p>

      <div class="social-media">
        <a href="https://github.com/sadithaboxrec" target="_blank"><i class='bx bxl-github'></i></a>

        <a href="https://www.instagram.com/alexandertg2002/" target="_blank"><i class='bx bxl-instagram' ></i></a>

        <a href="https://www.linkedin.com/in/sadithafernando" target="_blank"><i class='bx bxl-linkedin' ></i></a>
        <a href="sadithafernandods2002@gmail.com" target="_blank"><i class='bx bx-envelope' ></i></a>
      </div>

      <!-- <a href="#" class="btn">Download Cv</a> -->

      <!-- <a href="admin/file.php?file_id=3" class="btn">Download CV</a> -->

      <?php foreach ($files as $file): ?>
    <a href="admin/file.php?file_id=<?php echo $file['id']; ?>" class="btn">
        Download CV 
    </a>
<?php endforeach; ?>



    </div><!-- home content end -->


    <div class="home-img">
      <img src="images/saditha1.jpeg" alt="my pic">
    </div>

  </section>


       <!--  About section code -->
  <section class="about" id="about">


        <div class="about-img">
          <img src="images/saditha.jpg" alt="me">
        </div>
    
    
        <div class="about-content">
    
          <h2 class="heading">About<span> me</span></h2>
          <h3>I am a <span>Web Developer</span></h3>
          <p>
            I studied in DS Senanayake College and I have done my A/l in 2021.  After finishing my school I enrolled in boxing where i fell in love with sport journalism.  Later I enrolled in NSBM Green University to study Management Information Systems.   
            <br><br>
            Currently I develop web applications and work  as Logistic planner for Sports Events.
          </p>
          
          <a href="#" class="btn">Read More</a>
    
        </div>
    
    
  </section>
    

  
  <!-- services section code -->

  <section class="services" id="services">

    <h2 class="heading">My <span> Services </span></h2>

    <div class="container">


      <div class="card">
        <div class="imgbox" data-text="WEB">
          <img src="images/illustration.png" alt="">
        </div>
        <div class="content">
          <div class="design">
            <h3>Web Development</h3>
            <p>
              I primarily develop portfolio websites and ECommerce Websites.<br><br>
              I create  attrative user interfaces with mobile responding features.<br><br>
              I use PHP for Backend Development ensuring highest security for website and it's data.
            </p>
          </div>
        </div>
      </div>
  
  
      <div class="card">
        <div class="imgbox" data-text="LOGISTIC">
          <img src="images/planning.png" alt="">
        </div>
        <div class="content">
          <div class="design">
            <h3>Logistic Planning</h3>
            <p>
               I have been a member of the Logistic Committee of <a href="https://www.karmafightleague.com/">Karma Fight League </a>
               (South Asia's largest K1 Organization) and also enrolled in organization of several School Boxing tournaments. 
               <br><br>
               Also worked as Logistic Committee president in CISS society of NSBM Green University.

            </p>
          </div>
        </div>
      </div>
  
  
      <div class="card">
        <div class="imgbox" data-text="Analyzing">
          <img src="images/evaluation.png" alt="">
        </div>
        <div class="content">
          <div class="design">
            <h3>Data Analyzing</h3>
            <p>
              I specialize in analyzing sports data to uncover patterns and insights. By leveraging data trends and statistical models, I make accurate predictions that help inform decisions and strategies in the sports industry.
            </p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="imgbox" data-text="QA">
          <img src="images/quality-assurance.png" alt="">
        </div>
        <div class="content">
          <div class="design">
            <h3>Quality Assurance</h3>
            <p>
              I ensure the highest standards of quality by meticulously testing and reviewing products, identifying issues, and providing feedback for improvement. My goal is to guarantee that each product meets or exceeds expectations, ensuring a seamless and reliable user experience.
            </p>
          </div>
        </div>
      </div>
  
    </div>
<!-- container end -->

      

  </section>




   <!-- testimonial section code -->
   <section class="testimonials" id="testimonials">


    <div class="testimonial mySwiper">

          <div class="testi-content swiper-wrapper">

            <div class="slide swiper-slide">

              <img src="images/saditha.jpg" alt="" class="image">

              <i class="bx bxs-quote-alt-left quote-icon"></i>

              <p>
                I still don't have reviewes I will post that later. This is just to showcase my webskills
              </p>

              <i class="bx bxs-quote-alt-right quote-icon"></i>

              <div class="details">
                <span class="name">Saditha Fernando</span>
                <span class="job">Mis Undergraduate</span>
              </div>


            </div>
<!-- slider end -->




            <div class="slide swiper-slide">

              <img src="images/saditha.jpg" alt="" class="image">

              <i class="bx bxs-quote-alt-left quote-icon"></i>

              <p>
                I still don't have reviewes I will post that later. This is just to showcase my webskills
              </p>

              <i class="bx bxs-quote-alt-left quote-icon"></i>

              <div class="details">
                <span class="name">Saditha Fernando</span>
                <span class="job">Mis Undergraduate</span>
              </div>


            </div>
<!-- slider end -->





            <div class="slide swiper-slide">

              <img src="images/saditha.jpg" alt="" class="image">

              <i class="bx bxs-quote-alt-left quote-icon"></i>

              <p>
                I still don't have reviewes I will post that later. This is just to showcase my webskills
              </p>

              <i class="bx bxs-quote-alt-left quote-icon"></i>

              <div class="details">
                <span class="name">Saditha Fernando</span>
                <span class="job">Mis Undergraduate</span>
              </div>


            </div>
<!-- slider end -->

     

      </div>
  <!-- testi content end -->

        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>




    </div>
    <!-- testimonial end -->

  </section>


     <!-- contact section code -->

  <section class="contact" id="contact">

      <h2 class="heading">Contact <span>me</span></h2>
  
   
      <form action="send-email.php" onsubmit="return validateForm()" method="post">

        <div class="input-box">
          <input type="text" id="fullName" placeholder="Full Name" name="fullName">
          <input type="email" id="email" placeholder="Email Address" name="email">
        </div>
        <div class="input-box">
          <input type="text" id="phoneNumber" placeholder="Phone Number" name="phoneNumber"> 
          <input type="text" id="emailSubject" placeholder="Email Subject" name="emailSubject">
        </div>
      
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
      
        <input type="submit" value="Send Message" class="btn" name="submit" >
      
      </form>
      
  
  </section>
  
  
     <!-- footer section code -->
  <footer class="footer">
  
        <div class="social">
          <a href="https://github.com/sadithaboxrec" target="_blank"><i class='bx bxl-github'></i></a>

          <a href="https://www.instagram.com/alexandertg2002" target="_blank"><i class='bx bxl-instagram' ></i></a>

          <a href="https://www.linkedin.com/in/sadithafernando" target="_blank"><i class='bx bxl-linkedin' ></i></a>
          <a href="sadithafernandods2002@gmail.com" target="_blank"><i class='bx bx-envelope' ></i></a>
        </div>
  
        <p class="copyright">
          &copy;Saditha Fernando || All right reserved in 2024
        </p>
  
  </footer> 


  
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>  
  <!-- swiper js -->
<script src="swiper-bundle.min.js"></script>


<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script src="script.js"></script>
    

 <script>

  var messageText="<?= $_SESSION['status'] ?? '' ?>";

  if(messageText != ''){

    Swal.fire({
  title: "Thank You",
  text: messageText,
  icon: "success"
});

<?php unset($_SESSION['status']) ?>

  }



 </script>

  
</body>
</html>