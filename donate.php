<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate</title>
    <!-- favicons Icons -->

    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="keywords" content="rescue street dogs, care for stray animals, adopt rescued pets, pet rescue stories, community animal aid, compassionate animal care   " />
    <meta name="description" content="A community-driven platform to help street animals in need. Report rescues, connect with local teams, share animal stories, and inspire kindness. Join us in making every paw count.

" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">


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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    <!-- /.preloader -->
    <div class="page-wrapper">


        <?php include 'header.php'; ?>
        <!-- /.main-header -->
        <section class="page-header">
            <div class="page-header__bg11"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Donate</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Donate</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- /.about-one -->

        <!-- /.funfact-one -->







        <!-- /.team-one -->

        <!-- /.client-carousel -->
        <section class=" register-page__wrap pb-30 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-two__image wow fadeInLeft animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
                            <img src="assets/images/resources/scanner.jpg" alt="careox">


                            <div class="about-two__image__shape-one"><img src="assets/images/shapes/about-2-shape-1.png" alt="careox"></div>
                            <div class="about-two__image__shape-two"><img src="assets/images/shapes/about-2-shape-2.png" alt="careox"></div>
                        </div><!-- /.why-choose-two__image -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <form class="register-page__form"  id="donationForm" method="POST" action="submit.php"> -->
                        <form class="register-page__form" id="donationForm">


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="name" placeholder="First Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="lastname" placeholder="Last Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="email" name="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="phoneno" placeholder="Phone No*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="city" placeholder="City*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="donation" placeholder="Donation Amount *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="panno" placeholder="PAN Number*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="register-page__form-input-box">
                                        <input type="text" name="address" placeholder="Address *" required>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="careox-btn text-center"><span>Pay Now </span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- Donation Modal -->
        <div class="modal fade" id="donationModal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content p-4 rounded-4 shadow position-relative">

                    <!-- Custom Close Button -->
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" id="closePopup" aria-label="Close"></button>

                    <div class="row justify-content-center text-center">
                        <div class="col-12 mb-3" style="background-color: #F5F5F5; padding: 15px; border-radius: 10px;">
                            <h5>Complete your donation in <span id="countdown" class="fw-bold">00:30</span> minutes</h5>
                        </div>

                        <div class="col-md-12 mb-3">
                            <img src="assets/images/instagram/barcode.jpeg" alt="Scan to pay" class="img-fluid rounded" style="width: 50%; max-width: 300px;" />
                        </div>
                    </div>

                    <div class="text-center mt-3" id="successMsg" style="display:none;">
                        <p class="text-success">Donation submitted successfully!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exit Confirmation Modal -->
        <div class="modal fade" id="exitConfirmModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4" style="border-radius: 15px;">
                    <div class="modal-body">
                        <h5 class="mb-3">Are you sure you want to exit?</h5>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-danger px-4" id="exitYes">Yes</button>
                            <button class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>


        <script>
            const form = document.getElementById('donationForm');
            const donationModalEl = document.getElementById('donationModal');
            const donationModal = new bootstrap.Modal(donationModalEl);
            const exitModal = new bootstrap.Modal(document.getElementById("exitConfirmModal"));
            let countdown;
            let timeLeft = 30;

            form?.addEventListener('submit', function(event) {
                event.preventDefault();
                donationModal.show();
                startCountdown();
            });

            document.getElementById('payNowBtn')?.addEventListener('click', function() {
                const amount = document.getElementById('donationAmount').value;
                if (amount) {
                    document.getElementById('amountInput').value = amount;
                    fetch('submit.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: new URLSearchParams(new FormData(form))
                        })
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('successMsg').style.display = 'block';
                            clearInterval(countdown);
                            setTimeout(() => donationModal.hide(), 2000);
                        });
                }
            });

            function startCountdown() {
                timeLeft = 30;
                updateTimer();
                countdown = setInterval(() => {
                    timeLeft--;
                    updateTimer();
                    if (timeLeft <= 0) {
                        clearInterval(countdown);
                        donationModal.hide();
                    }
                }, 1000);
            }

            function updateTimer() {
                const countdownElement = document.getElementById('countdown');
                const minutes = String(Math.floor(timeLeft / 60)).padStart(2, '0');
                const seconds = String(timeLeft % 60).padStart(2, '0');
                countdownElement.textContent = `${minutes}:${seconds}`;
                countdownElement.style.color = timeLeft <= 20 ? 'red' : '';
            }

            // Exit Modal Trigger on Close Button
            document.getElementById("closePopup")?.addEventListener("click", () => {
                exitModal.show();
            });

            // Handle YES in Exit Modal
            document.getElementById("exitYes")?.addEventListener("click", () => {
                exitModal.hide();
                donationModal.hide();
                clearInterval(countdown);
            });
        </script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#donationForm').on('submit', function(e) {
                    e.preventDefault(); // Stop form from reloading page

                    $.ajax({
                        url: 'submit.php',
                        type: 'POST',
                        data: $(this).serialize(), // Send all form fields
                        success: function(response) {
                            if (response.trim() === 'success') {
                                $('#successMsg').show(); // Show success message
                                $('#donationModal').modal('show'); // Show modal
                                $('#donationForm')[0].reset(); // Reset form
                            } else {
                                alert("Error occurred: " + response); // Show server response
                            }
                        },
                        error: function() {
                            alert("Something went wrong. Try again.");
                        }
                    });
                });

                $('#closePopup').on('click', function() {
                    $('#donationModal').modal('hide');
                });
            });
        </script>