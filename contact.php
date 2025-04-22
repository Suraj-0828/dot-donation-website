<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <!-- favicons Icons -->
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/fav.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/fav.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/fav.png" /> -->
  <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
  <meta name="keywords" content="rescue street dogs, care for stray animals, adopt rescued pets, pet rescue stories, community animal aid, compassionate animal care   " />
  <meta name="description" content="A community-driven platform to help street animals in need. Report rescues, connect with local teams, share animal stories, and inspire kindness. Join us in making every paw count.

" />

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">


  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/vendors/icofont/icofont.min.css" />
  <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
  <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
  <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
  <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
  <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
  <link rel="stylesheet" href="assets/vendors/careox-icons/style.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

  <!-- template styles -->
  <link rel="stylesheet" href="assets/css/careox.css" />
</head>

<body class="custom-cursor">

  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>


  <!-- /.preloader -->
  <div class="page-wrapper">
    <!-- /.topbar-two -->


    <?php include 'header.php'; ?>
    <!-- /.main-header -->
    <section class="page-header">
      <div class="page-header__bg11"></div>
      <!-- /.page-header__bg -->
      <div class="container">
        <h2 class="page-header__title bw-split-in-left">Contact Us</h2>
        <ul class="careox-breadcrumb list-unstyled">
          <li><a href="index.php">Home</a></li>
          <li><span>Contact Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
      </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="contact-one contact-one--page">
      <div class="contact-one__shape" style="background-image: url(assets/images/shapes/contact-1-shape-2.png);"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="contact-one__image">
              <div class="contact-one__image__shape" style="background-image: url(assets/images/shapes/contact-1-shape-1.png);"></div>
              <img src="assets/images/resources/contact-1-1.png" alt="careox">
              <div class="contact-one__image__icon"><img src="assets/images/shapes/icon-1.png" alt="careox"></div>
              <div class="contact-one__image__info">
                <div class="contact-one__image__info__icon"><i class="icofont-phone-circle"></i></div>
                <p class="contact-one__image__info__title">Need Help Now?</p>
                <p class="contact-one__image__info__text"><a href="tel:+91-9769292824">9769292824</a></p>
              </div>
            </div>
          </div><!-- /.col-xl-5 -->
          <div class="col-xl-7">
            <form action="send.php" method="post" onsubmit="return validateLocation();" enctype="multipart/form-data">
              <div class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
                <div class="sec-title text-left">
                  <h6 class="sec-title__tagline bw-split-in-right">
                    <span class="sec-title__tagline__border"></span>OUR CONTACT NOW
                  </h6>
                  <h3 class="sec-title__title bw-split-in-left">Together, We Can Make a Difference</h3>
                </div>
                <div class="form-one__group">
                  <div class="form-one__control">
                    <input type="text" name="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-one__control">
                    <input type="email" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="form-one__control">
                    <input type="tel" name="phone" placeholder="Phone No" required>
                  </div>
                  <div class="form-one__control">
                    <input type="date" name="date" placeholder="Date of Birth" required>
                  </div>
                  <div class="form-one__control form-one__control--full">
                    <textarea name="message" placeholder="Write a Message" required></textarea>
                  </div>

                  <!-- Auto Location (required) -->
                  <div class="form-one__control form-one__control--full">
                    <label for="shareLocation" style="font-weight: bold;">Share My Current Location <span style="color: red">*</span></label>
                    <button type="button" onclick="getLocation()" class="careox-btn" style="margin-top: 5px;"><span>Enable Location</span></button required>
                    <input type="hidden" name="latitude" id="latitude" required>
                    <input type="hidden" name="longitude" id="longitude" required>
                    <p id="locationStatus" style="font-size: 13px; color: green; margin-top: 5px;"></p>
                  </div>
                  <div class="form-one__control form-one__control--full">
                    <label style="font-weight: bold;">Capture Photo <span style="color: red">*</span></label>
                    <input type="file" accept="image/*" capture="environment" name="photo" id="photo" required onchange="previewImage(this)">
                    <div id="imagePreview" style="margin-top: 10px;"></div>
                  </div>

                  <div class="form-one__control form-one__control--full">
                    <button type="submit" class="careox-btn"><span>Send Request</span></button>
                  </div>
                </div>
              </div>
            </form>


          </div>
        </div><!-- /.col-xl-7 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
  </section><!-- /.contact-one -->

  <section class="cta-two">
    <div class="cta-two__shape" style="background-image: url(assets/images/shapes/cta-2-shape-1.png);"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="sec-title text-left">

            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>BECOME A VOLUNTEER</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title bw-split-in-left">Let’s Make a Difference</h3><!-- /.sec-title__title -->
          </div><!-- /.sec-title -->
        </div>
        <div class="col-md-5">
          <div class="cta-two__button">
            <img src="assets/images/shapes/arrow-1.png" alt="careox">
            <a href="#  " class="careox-btn"><span>Become A Volunteer</span></a>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
  </section><!-- /.cta-two -->




  <?php include 'footer.php'; ?>


  <script>
    function getLocation() {
      const status = document.getElementById('locationStatus');
      const latInput = document.getElementById('latitude');
      const lonInput = document.getElementById('longitude');

      if (navigator.geolocation) {
        status.innerText = "Getting your location...";
        navigator.geolocation.getCurrentPosition(
          (position) => {
            latInput.value = position.coords.latitude;
            lonInput.value = position.coords.longitude;
            status.innerText = "Location captured ✔️";
          },
          (error) => {
            status.innerText = "Location access denied ❌";
            alert("You must allow location access to submit the form.");
          }
        );
      } else {
        status.innerText = "Geolocation not supported ❌";
        alert("Your browser does not support location sharing.");
      }
    }

    function validateLocation() {
      const lat = document.getElementById('latitude').value;
      const lon = document.getElementById('longitude').value;

      if (!lat || !lon) {
        alert("Please share your location before submitting.");
        return false;
      }

      return true;
    }
  </script>