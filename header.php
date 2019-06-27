
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
    
<nav class="kepala navbar navbar-expand-lg navbar-light fixed-top">

            <a class="navbar-brand" href="">Travel Jogja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" data-toggle="modal" data-target="#centralModallg" aria-label="Search">
              </form>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#" >Home <span class="sr-only">(current)</span></a>
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
            
            </div>
          </nav>

            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="image/walp.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="image/wapl2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="image/wapl2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

