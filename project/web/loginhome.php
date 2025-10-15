<?php
session_start();

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: loginpage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>S&J House&Interior Designing</title>
  <link rel="stylesheet" href="./loginhomecss.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->

<body>
  <!-- Navigation Section.. -->

  <header id="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#badroom">Badroom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#livingroom">Living room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kitchen" aria-disabled="true">Kitchen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contect">Contect us</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" type="submit">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <!-- Navigation Section End.. -->

  
  <main>
    <div class="container">
      <section id="home" class="cover-sect">
        <div class="title-text">
          <img id="header-img" src="../logo1.png" alt="company-logo">
          <h1>S&J</h1>
          <p>~ THE HOUSE&INTERIOR DESIGNING ~</p>
        </div>
        <div class="box-feature">
          <img class="cover-image" src="../loginhead.jpg" alt="S&J HOUSE&INTERIOR"/>
        </div>
      </section>
      
      <!-- Badroom Section.. -->

      <div class="section-text">
        <h2>BadRoom Design</h2>
      </div>
      <section id="badroom" class="story-sect">
        <div class="row">
          <div class="col-md-4 imgdiv">
            <a href="../bad.jpeg"><img cl.ass="myimage img-responsive thumbnail"  src="../bad.jpeg" alt="Badroom"></a>
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad1.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad1.jpeg" alt=""></a>
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad2.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad2.jpeg" alt=""></a> 
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 imgdiv">
           <a href="../bad3.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad3.jpeg" alt=""></a>
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad4.jpeg"> <img  class="myimage img-responsive thumbnail" src="../bad4.jpeg" alt=""></a>
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad5.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad5.jpeg" alt=""></a> 
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 imgdiv">
           <a href="../bad6.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad6.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad7.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad7.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../bad8.jpeg"><img  class="myimage img-responsive thumbnail" src="../bad8.jpeg" alt=""></a> 
          </div>
      </div>
      </section>
      
      <!-- Badroom Section End.. -->


      <!-- living Room Section.. -->

      <section id="livingroom" class="samples">
        <div class="section-text">
          <h2>Living-Room Design</h2>
        </div>
        <div class="featured">
          <div class="cont">
            <figure>
             <a href="../living.jpg"> <img src="../living.jpg" alt="modern style living room"></a>
            </figure>
          </div>
          
          <div class="cont">
            <figure>
             <a href="../living1.jpg"><img src="../living1.jpg" alt="Grey sofa in minimalist living room"></a> 
            </figure>
          </div>
          
          <div class="cont">
            <figure>
             <a href="../living2.jpg"><img src="../living2.jpg" alt="Living Room Modern Interior"></a> 
            </figure>
          </div>
          
        </div>
        <div class="video-section">
          <iframe id="video" src="https://player.vimeo.com/video/323262733" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </section>

      <!-- living Room Section End.. -->


      <!-- Kitchen Section.. -->

      <div class="section-text">
        <h2>Kitchen Design</h2>
      </div>
      <section id="kitchen" class="story-sect">
        <div class="row">
          <div class="col-md-4 imgdiv">
           <a href="../kitch.jpeg"><img class="myimage img-responsive thumbnail"  src="../kitch.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch1.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch1.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch2.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch2.jpeg" alt=""></a> 
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 imgdiv">
           <a href="../kitch3.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch3.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch4.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch4.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch5.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch5.jpeg" alt=""></a>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 imgdiv">
           <a href="../kitch6.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch6.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch7.jpeg"><img  class="myimage img-responsive thumbnail" src="../kitch7.jpeg" alt=""></a> 
          </div>
          <div class="col-md-4 imgdiv">
           <a href="../kitch8.jpeg"> <img  class="myimage img-responsive thumbnail" src="../kitch8.jpeg" alt=""></a>
          </div>
      </div>
      </section>

      <!-- Kitchen Section End.. -->

      
      <!-- About us section.. -->

      <section id="contect" class="contact-section">
        <div class="section-text">
          <h2>Get in touch</h2>
          <p>We would love to hear from you! <br><br>If you would like to receive our monthly catalogue subscribe by filling in the form with your name and email address</p>
        </div>
        <div class="contact-info">
          <div class="form-box">
            <form id="form" class="contact-form" action="https://www.freecodecamp.com/email-submit">
              <label for="name" class="form-entry">Name <br>
                <input name="name" id="name" type="text" class="txt-box" placeholder="&nbsp&nbsp;Enter name" required><br>
              </label>
              <label for="email" class="form-entry">Email <br>
                <input name="email" id="email" type="email" class="txt-box" placeholder="&nbsp&nbsp;Enter email" required><br>
              </label>
              <label for="message" class="form-entry">Message<br>
                <textarea name="message" id="message" type="textarea" class="txt-box" placeholder="&nbsp;Optional"></textarea><br>
              </label><br>
              <input class="btn" id="submit" type="submit" value="Submit">
            </form>
          </div>
        </div>
      
      </section>

      <!-- About us Section End.. -->


    </div>
  
  </main>

  <!-- Footer Section.. -->

  <footer class="footer-section">
    <div class="footer-info">
      <ul style="list-style:none;">
        <li><a href="privacypolicy.html">Privacy</a></li>
        <li><span>Terms</span></li>
        <li><span>Contact</span></li>
      </ul>
    </div>
    <span class="personal-info">Thanks for Visite<br>Reach out on insta @sidan_007</span>
    <span> © Copyright 2025</span>
  </footer>
  
  <!-- Footer Section End.. -->


</body>
<!-- partial -->
  
</body>
</html>
