<?php include("header.php"); ?>

<style>
      .contact-section .form-control{
  border: 1px solid  #2fbfbc;
    border-top: none;
    border-left: none;
    border-right: none;
    box-shadow: none;
}
.contact-fields {
  padding:40px 0px 0px;
}
.phone {
  padding-top: 50px;
}
.phone,
.email,
.working-hours {
  margin-bottom:30px;
}
.phone h2,
.email h2,
.working-hours h2 {
  margin-top:0px;
}
.phone a,
.email a,
.location a {
  color: #fd4f00;
  font-size:18px;
}
.contact-h2 {
  color: #fd4f00;
  padding-top:20px;
}
.contact-fields .form-group {
  margin-bottom: 35px;
}
.contact-info {
  margin-top: -40px;
}
.contact-fields .form-group input,
.contact-fields .form-group textarea {
  font-size: 16px;
}
.location a.btn.btn-accent {
  padding: 12px 26px 10px;
  margin-top: 30px;
  font-size: 16px;
}
.location a.btn.btn-accent img {
  margin-right: 20px;
}
.location hr {
  margin-bottom: 10px;
}
.btn {
    font-size: 15px;
    padding: 22px 46px 18px;
    line-height: 1;
    text-transform: uppercase;
    border: none;
    border-radius: 0;
    position: relative;
    letter-spacing: 0.3px;
}
.btn.btn-accent {
    background: #2fbfbc;
    color: white;
}
.btn.btn-accent:hover {
    background: #269694;
}
.ct-newsletter-section .container {
    width: 100%;
    max-width: 1360px;
}
h2 {
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    color: #101f1d;
    font-size: 35px;
    letter-spacing: 1.25px;
}
.ct-section-head {
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    color: #101f1d;
    font-size: 35px;
    text-transform: uppercase;
    padding-top: 45px;
    letter-spacing: 1.25px;
    margin-bottom: 5px;
}
.ct-section-header {
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    color: #101f1d;
    font-size: 35px;
    text-transform: uppercase;
    text-align: center;
    padding-top: 45px;
    letter-spacing: 1.25px;
    margin-bottom: 5px;
}
.ct-newsletter-inline {
    display: table;
    width: 100%;
    color: white;
    margin: 69px 0 138px;
    text-align: center;
}
.ct-newsletter-inline__facebook {
    background-color: #3b5997;
}
.ct-newsletter-inline__facebook, .ct-newsletter-inline__twitter {
    width: 16%;
}
a {
    -webkit-transition: all 250ms cubic-bezier(0.55, 0, 0.1, 1);
    transition: all 250ms cubic-bezier(0.55, 0, 0.1, 1);
}
.ct-newsletter-inline__facebook i, .ct-newsletter-inline__twitter i {
    font-size: 109px;
    padding-top: 25px;
}
.ct-newsletter-inline__facebook span, .ct-newsletter-inline__twitter span {
    font-family: 'Raleway', sans-serif;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 4px;
    display: block;
    padding-top: 15px;
}
.ct-newsletter-inline__twitter {
    background-color: #2fc2ee;
}
.ct-newsletter-inline__facebook, .ct-newsletter-inline__twitter {
    width: 16%;
}
.ct-newsletter-inline__facebook i, .ct-newsletter-inline__twitter i {
    font-size: 109px;
    padding-top: 25px;
}
.ct-newsletter-inline__facebook span, .ct-newsletter-inline__twitter span {
    font-family: 'Raleway', sans-serif;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 4px;
    display: block;
    padding-top: 15px;
}
.ct-newsletter-inline__form {
    background-color: #fd4f00;
    padding: 24px;
}
.ct-newsletter-inline__form .ct-newsletter {
    text-align: left;
    width: 100%;
    max-width: 668px;
    margin: 0px auto;
}
.ct-newsletter-inline__form .form-inline {
    display: table;
    width: 100%;
    height: 65px;
}
.ct-newsletter-inline__form .form-inline input {
    width: 50%;
    width: calc(100% - 137px);
    padding: 0 40px;
    font-size: 16px;
    letter-spacing: 0.3px;
    color: #111f1d;
    text-transform: uppercase;
}
.ct-newsletter-inline__form .form-inline input, .ct-newsletter-inline__form .form-inline .btn {
    display: table-cell;
    vertical-align: middle;
    height: 65px;
    border: none;
    margin: 0;
}
.ct-newsletter-inline__form .form-inline .btn {
    width: 137px;
    font-family: 'Oswald', sans-serif;
    font-size: 25px;
    padding-left: 0;
    padding-right: 3px;
    text-align: center;
}
.ct-newsletter-inline__form .form-inline input, .ct-newsletter-inline__form .form-inline .btn {
    display: table-cell;
    vertical-align: middle;
    height: 65px;
    border: none;
    margin: 0;
}
.btn.btn-dark {
    background: #111f1d;
    color: white;
}
.btn {
    font-size: 15px;
    padding: 22px 46px 18px;
    line-height: 1;
    text-transform: uppercase;
    border: none;
    border-radius: 0;
    position: relative;
    letter-spacing: 0.3px;
}
@media screen and (min-width: 980px) {
  .contact-info {
    padding-left: 110px;
  }
}
  </style>

<div class="container">
<div class="contact-section">
    <h2 class="ct-section-head">
                        CONTACT US
                    </h2>
    <div class="row contact-fields">
      <div class="col-md-8 left-form">
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
				<button class="btn btn-accent" type="submit">Submit</button>  
      </form>
			</div>
        <div class="col-md-4 contact-info">
            <div class="phone">
                <h2>Call</h2>
                <a href="tel:+4046872730">555.555.5555</a>
            </div>
            <div class="email">
                <h2>Email</h2>
                <a href="mailto:info@decidedekalb.com">info@webcorpco.com</a>
            </div>
            <div class="location">
                <h2>Visit</h2>
                <p>One Town Center </br>
                    123 Easy Street </br>
                    Suite 1000 </br>
                    Orlando, FL 32803
                    <br>
                    <a class="btn btn-accent" href="" target="_blank"
                    id="googleMap"><img src="https://www.solodev.com/assets/contact-us-page/map-marker.png" alt="Map Marker">Google Maps</a>
                </p>
            </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>