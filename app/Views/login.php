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
        <div class="row ">
            <div class="col-md-12 ">
            <h1 style="color:cyan">FROM LOGIN</s
            </div>
        </div>
    </div>
</header>

<header class="jumbroton">
    <div class="container">
    
    <div class="container2">
    </div>
        <div class="row">
            <div class="col-md-12">
            <?php if (!empty(session()->getFlashdata('error'))):?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?=csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:cyan">Username</label>
                <input type="text" name="username" id="username" class="form-control" aria-describedby="">
                <div id="usernameHelp" class="form-text" style="color:cyan">Isikan username anda.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color:cyan">Password</label>
                <input type="password" name="password" id="password" class="form-control"
                id="exampleInputPassword1"> 
            </div>
                <button type="submit" class="btn btn-primary">Login</label>
        </form>
        </hr />
        </div>
    </div>
</div>

<footer class="jumbroton jumbroton-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> Anisa </div> 
            
        <!-- Jquery dan Bootstrap JS -->
            <script src="<? base_url('assets/js/query.min.js') ?>"</script>
            <script src="<? base_url('assets/js/bootstrap.min.js') ?>"</script>
    </body>
</html>

