<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
 <!--Bootstrap CSS-->
 <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"/>
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
<td>
		<a href='co'>CHECK OUT</a>
</td>
  <header class="jumbotron">
            <div class="container">
             <div class="row">
                <div class="col-md-12">
                  <h3 class="h3">HALAMAN PENGISIAN CHECK OUT</h3>
                  </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p> Silahkan tinggalkan pesan untuk saya</p>
                    <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                      <input type="email" class="from-control" id="exampleInputEmail"aria-describedby="emailHelp">
                      <div id ="emailHelp" class="from-text">kami tidak menyebarkan alamat anda,</div>
                      </div>
                      <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NO WHATSAAP</label>
                      <textarea class="from-control"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Kirim</button>
                      </from>
                      </div>
                    </div>
                    </div>
             <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
                <div class="container text-center">Copyright &copy <?= Date('Y')?> Anisa </div>
            </footer>
          <!-- Jquery dan Bootsrap JS -->
      <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script>                  
</body>
</html>