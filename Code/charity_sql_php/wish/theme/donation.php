<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WishFund,business,company,agency,multipurpose,modern,bootstrap4">

  <meta name="author" content="themefisher.com">

  <title>Charity Info- Nonprofit Charity Management System</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bulma/bulma.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/modal-video/modal-video.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Header Start -->
<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="columns is-gapless is-justify-content-space-between is-align-items-center">
				<div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
					<div class="header-top-info">
						<a href="tel:+23-345-67890"><i class="icofont-phone mr-2"></i><span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="icofont-email mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
				<div class="column is-6-desktop is-8-tablet">
					<div class="header-top-right has-text-right-tablet has-text-centered-mobile">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="icofont-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="icofont-github"></i></a>
						<a href="#" target="_blank"><i class="icofont-pinterest"></i></a>
						<a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
						<a href="donation.php" class="top-btn">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="index.html">
					<img src="images/logo.png" alt="logo">
				</a>
				<button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>

			<div class="navbar-menu mr-0" id="navigation">
				<ul class="navbar-end">
					<li class="navbar-item">
						<a class="navbar-link" href="index.html">Home</a>
					</li>


					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Get Involved<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
              <a class="navbar-item" href="contact.php">Become a Donor</a>
              <a class="navbar-item" href="donation.php">Donation</a>
							<a class="navbar-item" href="volunteer.php">For Charity Companies</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Pages<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="event.php">Event</a>
              <a class="navbar-item" href="http://localhost/charityhw/tableInfo.php?table_name=logs">Logs</a>

            </div>
					</li>

				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Header Close -->
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <span class="text-white">Donation confirmation</span>
               <h1 class="is-capitalize text-lg">Donation details</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section donation">
	<div class="container">
		<div class="columns is-multiline is-desktop">
			<div class="column is-8-desktop">
				<div class="donation-wrap">
					<h2 class="text-md mb-5">I want to support you</h2>
					<p class="mb-6 is-size-5">Please fill in your details so that we can contact you further.</p>

					<form action="addgifts.php" method="post">
						<fieldset>
						</fieldset>
						<h2 class="mb-5 mt-6 border-bottom pb-3">Donor Details</h2>（匿名捐款请将donor id填为1，代表Anonymous，然后在下面打勾确认）

            <div class="columns is-gapless is-align-items-center is-multiline">
              <label class="column is-3-desktop has-text-weight-bold">Gift Id</label>
              <div class="column is-9-desktop">
                <input type="number" class="input" name="giftid" placeholder="(optional)">
              </div>
            </div>

            <div class="columns is-gapless is-align-items-center is-multiline">
              <label class="column is-3-desktop has-text-weight-bold">Donor Id</label>
              <div class="column is-9-desktop">
                <input type="number" class="input" name="DonorId" placeholder="Your Donor ID">
              </div>
            </div>

            <div class="columns is-gapless is-align-items-center is-multiline">
              <label class="column is-3-desktop has-text-weight-bold">Charity ID</label>
              <div class="column is-9-desktop">
                <input type="number" class="input" name="charityid" placeholder="Charity ID">
              </div>
            </div>

            <div class="columns is-gapless is-align-items-center is-multiline">
              <label class="column is-3-desktop has-text-weight-bold">Date</label>
              <div class="column is-9-desktop">
                <input type="date" class="input" name="date" placeholder="yyyy-mm-dd">
              </div>
            </div>

            <div class="columns is-gapless is-align-items-center is-multiline">
              <label class="column is-3-desktop has-text-weight-bold">Amount</label>
              <div class="column is-9-desktop">
                <input type="text" class="input" name="money" placeholder="Your Donation number">
              </div>
            </div>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<div class="column is-3-desktop has-text-weight-bold">
								<strong>Anonymous donation?</strong>
							</div>
							<div class="column is-9-desktop">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Check1">
									<label class="form-check-label" for="gridCheck135">
										Hide my personal info from donators list
									</label>
								</div>
							</div>
						</div>
						<div class="columns is-gapless is-align-items-center is-multiline">
							<div class="column sm-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Check2">
									<label class="form-check-label" for="gridCheck232">
										I give my <span class="has-text-weight-bold">consent for authorized representatives</span>
										of Smile Foundation to contact me occasionally by mobile and email for informing on the
										latest developments and updated offerings.
									</label>
								</div>
							</div>
						</div>

						<div class="columns is-gapless is-multiline mt-4">
							<div class="column sm-10">
                <input type="submit" class="btn btn-main-2 is-rounded" value="DONATE NOW" >
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="column is-4-desktop">
				<div class="offline-donation">
					<h4 class="mb-5">In order to make an offline donation we ask that you please follow these instructions:
					</h4>

					<ul class="list-unstyled">
						<li>1. Make a check payable to <span>"Charite"</span></li>
						<li>2. On the memo line of the check, please indicate that the donation is for <span>"Charite"</span>
						</li>
						<li>3. Please mail your check to:

							<address>
								Chariti
								111 Not A Real St.
								Anytown, CA 12345
							</address>
						</li>
						<li>4. Email us in detials : <span>donation@chareti.org</span></li>
						<li>5. Contact us at Phone: <span>+91-11-41716555, Mob: +91 8130088239</span></li>
					</ul>

					<p>All contributions will be gratefully acknowledged and are tax deductible.</p>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Section About End -->
<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-4-desktop is-6-tablet">
				<div class="footer-widget widget">
					<h4 class="is-capitalize mb-4 text-white">Company</h4>
					<p>Flat 20, Reynolds Neck, North <br>Helenaville, FV77</p>

					<ul class="list-unstyled footer-menu mt-4">
						<li><a href="#"><i class="icofont-phone"></i>+2(305) 587-3407</a></li>
						<li><a href="#"><i class="icofont-email"></i>info@example.com</a></li>
					</ul>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="column is-2-desktop is-6-tablet">
				<div class="widget footer-widget">
					<h4 class="is-capitalize mb-4 text-white">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>

			<div class="column is-3-desktop is-6-tablet">
				<div class="footer-widget widget">
					<h4 class="is-capitalize mb-4 text-white">Subscribe Us</h4>
					<p class="mb-4">Subscribe to get latest news article and resources  </p>

					<form action="#" class="sub-form">
						<input type="text" class="input mb-4 text-white" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small is-rounded">subscribe</a>
					</form>
				</div>
			</div>

			<div class="column is-3-desktop is-6-tablet">
				<div class="widget footer-widget">
					<h4 class="is-capitalize mb-4 text-white">Gallery</h4>

					<div class="gallery-wrap">
						<div class="gallery-img">
							<img src="images/blog/gallery-1.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/gallery-2.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/gallery-3.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/gallery-6.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/gallery-5.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/gallery-2.jpg" alt="" class="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-5">
			<div class="columns is-justify-content-center">
				<div class="column is-12">
					<div class="copyright has-text-centered">
						<small>&copy; Copyright Reserved to WishFund by <a href="https://themefisher.com/" target="_blank" class="text-color">Themefisher</a></small>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <script src="plugins/modal-video/jquery-modal-video.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="js/script.js"></script>

  </body>
  </html>