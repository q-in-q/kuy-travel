<?php include("header.php");?>

<br><br><br><br>
<div class="container pesan2" >

	
	
	 <div class="col-md-12" style="background:#bdc3c7; height:500px;">
		<div class="traveler">
				<h2 style="color:#fff;">Isi Data Traveler Anda</h2>
		</div>
		<div class="row" style="padding-top:20px; padding-left:20px; padding-right:20px; height:400px;">
			<div class="col-md-7">
				
				<div class="col-md-12" style="background:#ffffff; height:75%;">
						<h3>Detail Traveler</h3><hr>
						<div class="form-group">
										<div class="col-md-6" style="text-align:-webkit-left; padding-top:10px;">
											<label for="form-select">Nama Traveler 1</label>
										</div>

										<input   type="text"class="form-control col-md-10" placeholder="Isikan Nama Traveler" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Isikan Nama Traveler'">
										<br>
										<div class="col-md-6" style="text-align:-webkit-left">
										<label for="form-select" >Titel</label>
										</div>
								
										<div class="form-select col-md-4">
											<select>
												
												<option value="1">--Titel--</option>
												<option value="1">Tuan</option>
												<option value="1">Nyonya</option>
												<option value="1">Nona</option>
												
											</select>
										</div>
						</div>
					
				</div>
				
				
				
			</div>

			<div class="col-md-5" >

				<div class="col-md-10" style="background:#ffffff; height:100%; ">
					<br>
				<h5>Detail Armada dan Titik Jemput</h5><hr>
						<div class="form-group">
									
										<div class="col-md-6" style="text-align:-webkit-left">
											<label for="form-select" >Pilih Armada</label>
											</div>
									
											<div class="form-select col-md-4">
												<select>
												
												<option value="1">--Armada--</option>
												<option value="1">Elf</option>
												<option value="1">Hiace</option>
												<option value="1">Bus</option>
												
											</select>
										</div><br><br>


										<div class="col-md-6" style="text-align:-webkit-left">
											<label for="form-select" >Pilih Titik Jemput</label>
										</div>
									
										<input   type="text"class="form-control col-md-12" placeholder="Isikan Titik Penjemputan" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Isikan Titik Penjemputan'">

										<div class="col-lg-12 text-center" style="margin-top:50px;">
											<button type="button" class="btn btn-light" onclick="window.location.href='bayar.php'" style= " letter-spacing: .25rem;
        							 
          								
          								border-radius: 10px;
								  transition: color 0.15s ease-in-out, 
								  background-color 0.15s ease-in-out,
								   border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; ">Lakukan Pembayaran</button>
										</div>


						</div>

						
				</div>
			</div>

		</div>
		

	 </div>
	



</div>

<link rel="stylesheet" href="css/stylepesan2.css">

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
  
  


	<link rel="stylesheet" href="css/nice-select.css">

    
<?php include("footer.php"); ?>