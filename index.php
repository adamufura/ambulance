<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>
<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $number = $_POST['number'];
  $location = $_POST['location'];
  $patients = $_POST['patients'];


  $query =  "INSERT INTO bookings (email, number, location, patients) VALUES('{$email}', '{$number}', '{$location}', '{$patients}') ";
  if(mysqli_query($connection, $query)){
    $message = "Ambulance successfully booked, wait for arrival!";
  }else {
    $message = "Cant book, try again!";
  }
}


?>
<style>
  .sec_three {
    background-image: url(assets/img/home.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Platform for ordering ambulance transportation</h1>
        <h2>Door-to-door medical transport ordering service to various private clients, business, federal, state and local government agencies</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <video src="assets/img/WhatsApp Video 2022-12-06 at 10.03.13.mp4" controls autoplay autoplay></video>
      </div>
    </div>
  </div>

</section>

<main id="main">

  <section class=" P-5">
    <form action="" method="POST">
      <div class="container " data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 offset-sm- mt-lg-0 align-items-stretch">
            <div class="card shado info">
              <div class="card-header text-center">
                <h1 class="page-header">Book for available ambulance</h1>
              </div>
              <div class="card-body">
                <p class="text-info">
                  <?php
                  if(isset($message)){
                    echo $message;
                  }
                  ?>
                </p>
                <div class="form-group col-lg-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" required name="email" placeholder="Enter Email">
                </div>
                <div class="form-group col-lg-12">
                  <label for="name">Phone Number</label>
                  <input type="text" class="form-control" required name="number" placeholder="Enter Number">
                </div>
                <div class="form-group col-lg-12">
                  <label for="name">Location</label>
                  <input for="name" class="form-control" required name="location" placeholder="Enter Location">
                </div>

                <div class="p-3">
                  <label for="number">Enter number of patients</label>
                  <select name="patients" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                </div>
                <div class="text-center p-4"><button class="reg_button" name="submit" type="submit">Send</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </form>
  </section>
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about ">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Develop leaders of character across some pillars like
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Academic</li>
            <li><i class="ri-check-double-line"></i> Social</li>
            <li><i class="ri-check-double-line"></i> Athletic</li>
            <li><i class="ri-check-double-line"></i> Artistic</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>The heart of our mission is to educate leaders of character who will value and improve the world thet inherit
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Call To Action</h3>
          <p> Read our news feed, blog and social media to keep informed on news about the school as it is happening</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact sec_three">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Reach us via our handles to get started</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>AUK, Batagarawa</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>ssadamu16@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+2348169694243</p>
            </div>
          </div>

        </div>

        <?php
        if (isset($_POST['contact'])) {
          $cname = $_POST['cname'];
          $cemail = $_POST['cemail'];
          $csubject = $_POST['csubject'];
          $cmessage = $_POST['cmessage'];

          $query =  "INSERT INTO contacts (cname, cemail, csubject, cmessage) VALUES('{$cname}', '{$cemail}', '{$csubject}',
     '{$cmessage}' ) ";
          $rcontact = mysqli_query($connection, $query);
        }
        ?>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch ">
          <form action="" method="POST" class="php-email-form ">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="cname" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="cemail" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="csubject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="cmessage" rows="2" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button name="contact" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php include "includes/footer.php"; ?>
<audio src="assets/img/sound.mp3" autoplay autoplay></audio>