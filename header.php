<!DOCTYPE html>
<html lang="en" ng-app="testApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--js-->
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    <script src="js/popper.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css">
   <link rel="stylesheet" href="css/style.css">
    
    <script src="js/countdown.js" type="text/javascript"></script>

    <!--angularjs-->
    <script src="angularjs/js/angular-min-js.js"></script>
    <script src="angularjs/controler/controler.js"></script>
  

    <!-- Lnk script -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,600i,700,800,900|Poiret+One&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Poppins:300,400,500,600,600i,700,800,800i,900&display=swap&subset=latin-ext" rel="stylesheet">
     
     	
    <link rel="shortcut icon" href="image/logo.ico">

    <!--countdown-->
    
    <title>KuyTravel</title>


    <style>
  
 


    /*Navbar*/

.kepala{
  background-color: transparent;
}

  /* adds some margin below the link sets  */
.navbar .dropdown-menu div[class*="col"] {
    margin-bottom:1rem;
 }
 
 .navbar .dropdown-menu {
   border:none;
   background-color:#f5f6fa!important;
 }
 
 /* breakpoint and up - mega dropdown styles */
 @media screen and (min-width: 992px) {
   
   /* remove the padding from the navbar so the dropdown hover state is not broken */
 .navbar {
   padding-top:0px;
   padding-bottom:0px;
 }
 
 /* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
 .navbar .nav-item {
   padding:.5rem .5rem;
   margin:0 .25rem;
 }
 
 /* makes the dropdown full width  */
 .navbar .dropdown {position:static;}
 
 .navbar .dropdown-menu {
   width:100%;
   left:0;
   right:0;
 /*  height of nav-item  */
   top:45px;
 }
   
   /* shows the dropdown menu on hover */
 .navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
   display:block!important;
   
  
 }

 .collapse ul li a:hover{
    background-color: #bdc3c7;
    border-radius: 5px;
    

 }
   
   .navbar .dropdown-menu {
     border: 1px solid rgba(0,0,0,.15);
     background-color: #fff;
   }
 
 }
    
    
    </style>
  

    
</head>
<body onload="myFunction()" style="margin:0;">


<nav class="kepala navbar navbar-expand-lg navbar-light fixed-top" style="
background:white;
font-family: 'Poppins', sans-serif;">
   

    
    <a class="navbar-brand" href="#" style="color:black;" onclick="window.location.href='index.php'"><img src="image/logo2.png" alt="" style="width:100px; height:50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <form class="col-md-4 form-inline my-2 my-lg-0">
              <input style="background:#ecf0f1;" class="form-control" type="search" placeholder="Cari Destinasi wisata" data-toggle="modal" data-target="#centralModallg" aria-label="Search">
            </form>
                    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">
    
          <li class="nav-item red ">
            <a class="nav-link" href="#" onclick="window.location.href='index.php'" style="color:black;"
            >Beranda </a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="#" onclick="window.location.href='rekomendasi.php'"  style="color:black;">Rekomendasi</a>
         </li>
          <li class="nav-item">
           <a class="nav-link" href="#" onclick="window.location.href='paket.php'"  style="color:black;">Paket</a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link" href="#" style="color:black" onclick="window.location.href='pesan.php'">Pesan</a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="window.location.href='promo.php'" style="color:black;">Diskon</a>
          </li>
          
        
        </ul>
        <ul class="navbar-nav mr-auto">
         
        <li class="nav-item ">
          <button type="button" class="btn btn-light" onclick="window.location.href='login.php'">LOGIN</button>
          <button type="button" class="btn btn-light" onclick="window.location.href='profil.php'">PROFIL</button>
        </li>
      </ul>
    </div>
</nav>-->


 <!--modal-->

          <!-- Central Modal Small -->
          <div class="modal fade" id="centralModallg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


              <div class="modal-content">
                <div class="modal-header">
                  <form action="" class="col-md-6">
                        <input class="form-control" type="search" placeholder="Silahkan cari daftar wista di jogja" ng-model="hasil">
                  </form>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body listdestinasi" >
                  <div class="col-md-12" ng-controller="namadestinasi">
                    <ul class="">
                      <li ng-repeat = "dd in datadestinasi | filter : hasil ">
                        <h5>
                          <a href="#">{{dd.destinasi}}</a>
                        </h5>
                      </li>
                    </ul>
                    <h4 ></h4>
                  </div>
                </div>
                <!--<div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>-->
              </div>
            </div>
          </div>

          <!--modal serching-->



     
  

  




 

