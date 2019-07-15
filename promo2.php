<?php include("header.php"); ?>


<div class="container" style="background:#ecf0f1; height:950px;">

        <div class="col-md-12 text-center" >
                
                <img src="image/timang2.jpg" alt="" srcset="" style="margin-top:50px;">
        </div>

        <div class="col-md-12">
    
    <div class="form-group">
    <br>
    <h5>Syarat dan Ketentuan Promo</h5>  
    <p>  1. Promo hanya berlaku untuk transaksi minimum Rp 1.000.000<br>
         2. Promo hanya berlaku untuk satu kali transaksi pemesanan<br>
         3. Promo tidak dapat di gabung dengan promo lain</p>
    </div>

    <div class="form-group">
        <div class="col-md-3">
          <label for="">Kode Promo</label>
          <p id="pr1">RONDANI27</p>
        </div>
        <div class="col-md-3">
          <button onclick="copyToClipboard('#pr1')" class="btn btn-light" >Copy Kode</button>
        </div>
    </div>



</div>



</div>




<!--ajaxxxxxx-->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script>
  function copyToClipboard(element) {
    var $temp = $("<input>");
     $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    }

</script>

<?php include("footer.php") ?>