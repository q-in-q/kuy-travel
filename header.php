
<!DOCTYPE html>
<html lang="en" ng-app="testApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--js-->
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    <script src="js/popper.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--angularjs-->
    <script src="angularjs/js/angular-min-js.js"></script>
    <script src="angularjs/controler/controler.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Travel jogja</title>
</head>
<body>
     <!--Navbar-->
     
    <nav class="kepala navbar navbar-expand-lg navbar-light fixed-top">

            <a class="navbar-brand" href="">Travel Jogja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#" onclick="window.location.href='jancok.php'">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rekomendasi Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Paket Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Promo</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" data-toggle="modal" data-target="#centralModallg" aria-label="Search">
                <button type="button" class="btn btn-primary" onclick="window.location.href='login.php'">LOGIN</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='jancok.php'">JANCOK</button>
              </form>
            </div>
          </nav>


          <!--modal-->

          <!-- Central Modal Small -->
          <div class="modal fade" id="centralModallg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


              <div class="modal-content">
                <div class="modal-header">
                  <form action="" class="col-md-6">
                        <input class="form-control" type="search" placeholder="search your destination" ng-model="hasil">
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

