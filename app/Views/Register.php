<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
  </head>
  <style>
body{
background-image: url('6.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
</style>
  
  <body>
  <?php include 'navbar.php'?>
<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:cyan">Register Form</h3>
            <!-- <h3> class="h3">Nama Saya : <?= $nama ?>!</h3>-->
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="color:cyan">
        Silahkan Daftarkan Identitas Anda
        <hr />
        <?php if (!empty(session()->getFlashdata('error'))):?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4 style="color:cyan">Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/register/process">
            <?=csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label" style="color:cyan">Email</label>
                <input type="text" class="form-control" id="email" name ="email">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label" style="color:cyan">Username</label>
                <input type="text" class="form-control" id="username" name ="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color:cyan">Password</label>
                <input type="password" class="form-control" id="password" name ="password">
            </div>
            <div class="mb-3">
                <label for="password_conf" class="form-label" style="color:cyan">Confirm Password</label>
                <input type="password" class="form-control" id="password_conf" name ="password_conf">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label" style="color:cyan">Name</label>
                <input type="text" class="form-control" id="name" name ="name">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</label>
            </div>
        </form>
        </hr />
        </div>
    </div>
</div>
<footer class="jumbroton jumbroton-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> Anisa </div> 

        <!-- Jquery dan Bootstrap JS -->
            <script src="<? base_url('js/query.min.js') ?>"</script>
            <script src="<? base_url('js/bootstrap.min.js') ?>"</script>
    </body>
</html>