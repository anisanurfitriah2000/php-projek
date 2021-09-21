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
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?> ">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('freshfish') ?>">freshfish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('history') ?>">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="freshfish mt-5">Edit freshfish</h3>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p> Silahkan edit data pada form dibawah ini ! </p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h4>Periksa isian form anda kembali! </h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('freshfish/saveEdit/' . $freshfish->id_ikan) ?>">
        <?= csrf_field(); ?>
        <div class="mb-3">
                <label for ="namaikan" class="form-label">Nama ikan</label>
                <input type="text" class="form-control" value="<?= $freshfish->nama_ikan ?>" id="nama_ikan" 
                name="nama_ikan" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" value="<?= $freshfish->harga ?>" 
                id="harga" name="harga" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="idikan" class="form-label">Stok</label>
                <input type="text" class="form-control" value="<?= $freshfish->stok ?>" id="stok" 
                name="stok" aria-describedby="">
                <div class="mb-3">
                Publish
         <input type="radio" class="" id="status" name="status" value="published"  aria-describedby="" <?php  if($freshfish->status=='published') echo 'checked';  ?> >
         Ya
         <input type="radio" class="" id="status" name="status" value="no"  aria-describedby="" <?php  if($freshfish->status=='no') echo 'checked';  ?>>
         Tidak
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<footer class="jumbroton jumbroton-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> Anisa </div> 
</footer>

            <!-- Jquery dan Bootstrap JS -->
            <script src="<? base_url('js/query.min.js') ?>"</script>
            <script src="<? base_url('js/bootstrap.min.js') ?>"</script>
        </body>
    </html>