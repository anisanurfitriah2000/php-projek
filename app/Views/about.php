<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>"/>
    <style>
body{
background-image: url('2.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
</style>
</head>
<body>
   <?php include 'navbar.php'?>
        <header class="jumbotron">
            <div class="container">
             <div class="row">
                <div class="col-md-12">
                  <h3 class="h3">About us</h3>
                  <h3 class="h3">Nama saya:<?=$nama?>!</h3>
                  <div class="container">
            <div class="row">
                <div class="col-md-12 bg-secondary">
                <p> Melihat banyaknya bidang usaha ikan secara konvensional saat ini maka tidak mudah bagi penjual yang menjual ikannya untuk mendapatkan hasil yang diinginkan. 
                Dengan banyaknya penjual ikan secara konvensional untung yang didapatkan tidak banyak karena setiap penjual mungkin sudah punya langganan masing-masing. 
                Bagi yang ingin membuat usaha ikan yang menjadi kendala adalah tempat, banyaknya penjual ikan, kurangnya konsumen karena tidak sempat waktunya untuk membeli.
                 Dengan berkembangnya zaman dan padatnya aktivitas banyak dari masyarakat yang tidak sempat waktunya untuk membeli ke pajak.
                 Selain itu setiap konsumen yang mau membeli ikan ke pajak biasanya menggunakan jasa angkutan umum atau kendaraan pribadi.
                 Bagi masyarakat yang mau ke pajak menggunakan angkutan umum harus membayar jasa angkutan umum. Lain hal lagi waktu dan tenaga berkurang.
                 Dan pengaruh cuaca juga penyebab konsumen tidak membeli ikan ke pajak.
                Setiap bidang usaha harus dapat megenalkan diri dan jenis-jenis ikan yang mereka jual sehingga konsumen yang belum tahu akan mengenalnya, yang sudah mengetahui akan semakin percaya. 
                Sehingga akan mudah mendapat perhatian masyarakat.
                 Teknologi komputer berkembang sangat pesat dengan munculnya internet dimana komputer-komputer dapat saling terhubung membentuk jaringan luas yang terdiri dari ribuan komputer diseluruh dunia. 
                Siapapun yang mempunyai akses kedalam jaringannya dapat saling bertukar informasi berbagai macam bentuk data teks, gambar, suara, file dan sebagainya. 
                Lebih dari itu jaringan ini dapat diakses selama 24 jam. 
                Berdasarkan latar belakang tersebut diatas maka topik yang diambil adalah penjualan ikan secar online. </p>

                </div>
            </div>
        </div>
                  </div>
                </div>
            </div>
        </header>
    
            <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
                <div class="container text-center">Copyright &copy <?= Date('Y')?> Anisa </div>
            </footer>
          <!-- Jquery dan Bootsrap JS -->
      <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script>                  
</body>
</html>