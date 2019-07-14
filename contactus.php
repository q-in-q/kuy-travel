<?php include("header.php"); ?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap"
async defer></script>
<script src="js/googlemap.js" type="text/javascript"></script>

<style>
    body  {
        font-family: 'Poppins',sans-serif;
    }

</style>

<div id="googleMap" style="
margin-top: 100px;
width:100%;
height:500px;"></div>

<div class="container-fluid"
style="margin-top: 50px;
font-family: 'Poppins', sans-serif;
margin-bottom: 20px;">
    <h2 style="margin-left: 200px;
    margin-bottom: 20px;"> CONTACT US </h2>
    <div class="row">
      <div class="col-md-6"
      style="margin-left: 40px;">
      <form method="post" action="">
			<div class="form-group">
                <label class="sr-only" for="fname">First Name *</label>
                <input class="required form-control" id="fname" name="fname" placeholder="First Name&nbsp;*" type="text">
            </div>
            <div class="form-group">
                <label class="sr-only" for="lname">Last Name *</label>
                <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;*" type="text">
            </div>
            <div class="form-group">
                <label class="sr-only" for="contactEmail">Email *</label>
                <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text">
            </div>
            <div class="form-group">
                <label class="sr-only" for="contactPhone">Phone *</label>
                <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Phone&nbsp;*" type="text">
            </div>
            <div class="form-group">
                <label class="sr-only" for="comment">Type your message here</label>
                <textarea class="required form-control" id="comment" name="comment" placeholder="Type your message here&nbsp;*" rows="6"></textarea>
            </div>
				<button class="btn btn-info" type="submit">Submit</button>  
            </form>
			</div>
            <div class="col-md-3 contact-info"
            style="padding-left: 60px;">
            <div class="phone">
                <h2>Call</h2>
                <a href="tel:+4046872730">tel:+4046872730</a>
            </div>
            <div class="email">
                <h2>Email</h2>
                <a href="#">KuyTravel.com</a>
            </div>
            <div class="location">
                <h2>Visit</h2>
                    <p>Jln. Nusa Indah </br>
                    No.7 Depok</br>
                    Sleman </br>
                    Daerah Istimewa Yogyakarta
                    <br>
                    <br>
                </p>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>