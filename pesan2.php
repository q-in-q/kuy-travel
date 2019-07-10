<?php include("header.php");?>

<br><br><br><br>
<div class="container pesan2" >

	
	
	 <div class="col-md-12" style="background:#bdc3c7; height:500px;">
		<div class="traveler">
				<h2 style="color:#fff;">Isi Data Pemesan Anda</h2>
		</div>
		<div class="row" style="padding-top:20px; padding-left:20px; padding-right:20px; height:300px;">
			<div class="col-md-8">
				
				<div class="col-md-12" style="background:#ffffff; height:65%;">

						<div class="form-group">
										<div class="col-md-6" style="text-align:-webkit-left; padding-top:10px;">
											<label for="form-select">Nama Traveler 1</label>
										</div>

										<input   type="text"class="form-control" placeholder="Isikan Nama Traveler" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Isikan Nama Traveler'">

										<div class="col-md-6" style="text-align:-webkit-left">
										<label for="form-select" >Titel</label>
										</div>
								
										<div class="form-select col-md-3">
											<select>
											
											<option value="1">Tuan</option>
											<option value="1">Nyonya</option>
											<option value="1">Nona</option>
											
										</select>
									</div>
						</div>
					
				</div>
				
				
				
			</div>

			<div class="col-md-4" >

				<div class="col-md-10" style="background:#ffffff; height:100%; ">

						
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
  
  

	<link rel="stylesheet" href="css/stylepesan.css">
	<link rel="stylesheet" href="css/nice-select.css">

    
<?php include("footer.php"); ?>