<?php include("header.php"); ?>

   

   

<body onload="myFunction()" style="margin:0;">

<div id="overlay" style="margin-bottom=100px;">
	<div id="loading"></div>
    
</div>

<!--pembuka-->
<div style="display:none;" id="myDiv" class="animate-bottom">
<!--penutup-->

<div class="container" style="height:500px; width:100%; background:#bdc3c7; margin-top:100px;">

        <div class="col-md-12" style="padding-top:30px;">

            <div class="col-md-6" style="background:#fff; height:300px; ">
                <div class="form-group">
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


</div>

  

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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/stylebayar.css">
    
        
<script>
    var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loading").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}
</script>



<?php include("footer.php"); ?>
    
