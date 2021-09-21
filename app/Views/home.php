<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Website anisa Nurfitiah</title>
      <!--Bootstrap CSS-->
      <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>"/>
   </head>
   <style>
body{
background-image: url('2.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
</style>
   <body>
      <?php include 'navbar.php'?>
      <header class="jumbotron jumbotron-fluid">
         <div class="container">
            <div class="row">
               <div class="h3"> website penjualan ikan</h3>
               </div>
            </div>
         </div>
      </header>
      <div class="container">
         <div class="row">
            <div class="col-md-12 my-2 card bg-info text-white">
               <div class="card-body">
                  <h5 class="h5">Yeay</h5>
                  <p> SELAMAT ANDA BERHASIL MASUK WEBSITE penjualan ikan segar  !!</p>
               </div>
            </div>
         </div>
         <div class="row">
            <?php 
               foreach($freshfishx as $v){
               	?>
            <div class="col col-md-3">
               <div class="card"">
                  <img class="card-img-top" src="<?php echo base_url();?>/<?php echo  $v->gambar;?>" alt="Card image">
                  <div class="card-body">
                     <h4 class="card-title"><?php echo  $v->nama_ikan;?></h4>
                     <p class="card-text"><?php echo  number_format($v->harga);?></p>
                     <a href="<?php echo base_url('shop/beli/?id='.$v->id_ikan); ?>" class="btn btn-primary">Beli</a>
                  </div>
               </div>
            </div>
            <?php 
               }
                ?>
         </div>
      </div>
      <footer class="jumbotron jumbotron-flued mt-5 mb-0">
         <div class="container text-center">copyright &copy <?= Date('Y') ?> Anisa</div>
      </footer>
      <!-- Jquery dan Bootsrap JS -->
      <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
   </body>
</html>
