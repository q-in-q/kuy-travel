<?php include("header.php");?>

<br><br><br><br>
<!-- destinasi -->
<div class="home">
        <h2>DISKON</h2>
        <div class="underline"></div>
    </div>

    <div  class="container-fluid">

        <div class="row">

        

            <div class="destinasi col-md-4 ">
              
                <div class="produk1">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="image/timang.jpg" />
                      </div>
                      <div class=fullwidth>

                      </div>

                      <div class="carousel-caption">
                        <h1>Diskon Paket Travel 1 hari di Pantai Timang</h1>
                        <div class="container text-transparent">
                            <ul class="countdown">
                                
                                <h4 >Berlaku hingga</h4>
                                <li><span id="days"></span>Hari</li>
                                <li><span id="hours"></span>Jam</li>
                                <li><span id="minutes"></span>Menit</li>
                                <li><span id="seconds"></span>Detik</li>
                            </ul>
                         </div>
                         <button type="button" class="btn btn-primary" onclick="window.location.href='promo2.php'" >Detail</button><br>
                      </div>
                    </div>
                   
              </div>

            </div>

            <div class="destinasi col-md-4 ">
              
              <div class="produk1">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="image/nglambor.jpg" />
                      </div>

                      <div class="carousel-caption">
                        <h1>Diskon 50% biaya travel di Pantai Nglombor</h1>
                        <div class="container text-transparent">
                            <ul class="countdown">
                                
                                <h4 class="berakhir">Promo berakhir</h4>
                                <li><span id="days"></span>Hari</li>
                                <li><span id="hours"></span>Jam</li>
                                <li><span id="minutes"></span>Menit</li>
                                <li><span id="seconds"></span>Detik</li>
                            </ul>
                         </div>
                        <button type="button" class="btn btn-primary">Detail</button>
                      </div>
                    </div>
              </div>

          </div>

          <div class="destinasi col-md-4 ">
              
              <div class="produk1">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="image/pindul.jpg" />
                      </div>

                      <div class="carousel-caption">
                        <h1>Gratis Pemandu Wisata di Goa Pindul </h1>
                        <div class="container text-transparent">
                            <ul class="countdown">
                                
                                <h4 class="berakhir">Promo berakhir</h4>
                                <li><span id="days"></span>Hari</li>
                                <li><span id="hours"></span>Jam</li>
                                <li><span id="minutes"></span>Menit</li>
                                <li><span id="seconds"></span>Detik</li>
                            </ul>
                         </div>
                      
                        <button type="button" class="btn btn-primary">Detail</button>
                      </div>
                    </div>
              </div>

          </div>



              <div class="clear"></div>

        </div>

    </div>

   

</div> <!--tutup-->


<!--modal promo-->



<div class="modal fade" id="promo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
  
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


<div class="modal-content">
  <div class="modal-header">
    <h4>Promo Kami</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="modal-body " >
    <div class="col-md-12" >
            <div class="text-center">
                <img src="image/timang1.jpg" stye="height:100%; width:100%;">
            </div>
    </div>

    <div class="col-md-12">
    
            <div class="form-group">
            
            <h5>Syarat dan Ketentuan Promo</h5>  
            <p>  1. Promo hanya berlaku untuk transaksi minimum Rp 1.000.000<br>
                 2. Promo hanya berlaku untuk satu kali transaksi pemesanan<br>
                 3. Promo tidak dapat di gabung dengan promo lain</p>
            </div>

            <div class="form-group">
                <div class="col-md-3">
                  <label for="">Kode Promo</label>
                  <p id="pr1">RONDANI27</p>
                  <button onclick="copyToClipboard('#pr1')">Copy Kode</button>
                </div>
                <div class="col-md-3">
                  <label for="">Copy Kode</label>
                  <button onclick="copyToClipboard('#pr1')">Copy Kode</button>
                </div>
            </div>
      

    
     </div>
    </div>
  </div>

</div>



</div>


<!--tutup-->

<link rel="stylesheet" href="css/stylecountdown.css">
<link rel="stylesheet" href="css/style.css">






<?php include("footer.php");?>