<?php include("header.php");?>
<br><br><br>


	<!--================ Start Book a Trip Area =================-->
	<section class="trip-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="trip-form-section">
						<h1>Pesan Untuk Liburan <br>
							Hanya di KuyTravel</h1>
						<form class="trip-form-area trip-page-form trip-form text-right" id="myForm" action="mail.html" method="post">
							<div class="form-group col-md-12">
								<div class="col-md-6" style="text-align:-webkit-left">
									<label for="form-select" style="color:#fff; ">Pilih Paket</label>
								</div>
								
								<div class="form-select">
									<select>
										
										<option value="1">Prambanan</option>
										<option value="1">Museum Merapi</option>
										<option value="1">Monjali</option>
                                        <option value="1">Goa Pindul</option>
                                        <option value="1">Air Terjun Sri Gethuk</option>
										<option value="1">Taman Pintar</option>
                                        <option value="1">Pantai Indrayanti</option>
                                        <option value="1">Tebing Breksi</option>
                                        <option value="1">Kraton Jogja</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control"      placeholder="To" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'To'">
							</div>
							<div class="form-group col-md-12">
								<input  class="form-control"   placeholder="From" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'From'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Return" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Return'">
							</div>
							<div class="form-group col-md-12">
								 <div class="col-md-6" style="text-align:-webkit-left">
									<label for="form-select" style="color:#fff; ">Dewasa</label>
								</div>
								
								<input type="number" class="form-control" id="number" name="number" placeholder="0" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = '0'">
								 
							</div>
							<div class="form-group col-md-12">
							<div class="col-md-6" style="text-align:-webkit-left">
									<label for="form-select" style="color:#fff; ">Anak-anak</label>
								</div>
								
								<div class="form-select">
									<select>
										
										<option value="1">0</option>
										<option value="1">1</option>
										<option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
										<option value="1">5</option>
                                        <option value="1">6</option>
                                        <option value="1">7</option>
                                        <option value="1">8</option>
										<option value="1">9</option>
										<option value="1">10</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn text-uppercase">Pesan Sekarang</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
    </section>
    
    <script src="js/jquery.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/prism.js"></script>
  
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