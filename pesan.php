<?php include("header.php");?>
<br><br><br>
<!--================Home Banner Area =================-->
	<!--<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="book-trip.html">Book a Trip</a>
					</div>
					<h2>Book a Trip</h2>
				</div>
			</div>
		</div>
	</section>-->
	<!--================End Home Banner Area =================-->

	<!--================ Start Book a Trip Area =================-->
	<section class="trip-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="trip-form-section">
						<h1>Book a Trip <br>
							for your next Tour</h1>
						<form class="trip-form-area trip-page-form trip-form text-right" id="myForm"  method="post">
                            
                            <div class="form-group col-md-12"  >
								<div class="form-control">      
                                        <select class="lebar wide">
                                            <option data-display="Select">Nothing</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3" disabled>A disabled option</option>
                                            <option value="4">Potato</option>
                                        </select> 
								</div>
                            </div>
                            
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="To" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'To'">
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control" id="email" name="email" placeholder="From" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'From'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Return" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Return'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Adults" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Adults'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Child" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Child'">
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn text-uppercase">Search Flights</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</section>
    <!--================ End Book a Trip Area =================-->
    
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>

    <!--niceselect-->

    <script src="js/jquery.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/prism.js"></script>
  <link rel="stylesheet" href="css/nice-select.css">

  <script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();      
      FastClick.attach(document.body);
    });    
  </script>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64633646-1', 'auto');
    ga('send', 'pageview');
  </script>
    
    <?php include("footer.php"); ?>