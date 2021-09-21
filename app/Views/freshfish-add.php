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
  <?php include 'navbar.php'?>
<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="freshfish mt-5">Tambah freshfish</h3>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p> Silahkan isi form dibawah ini untuk menambahkan freshfish ! </p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            </div>
        </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('freshfish/save') ?>">
        <?= csrf_field(); ?>
        <?php  foreach ($freshfishx as $row){}  ?>
        <?php  $s= substr('ikan-04', 0, 4);$l= substr($row->id_ikan, 3); ?>

        <div class="mb-3">
                <label for ="idikan" class="form-label">ID ikan</label>
                <input type="text" class="form-control" id="id_ikan" name="id_ikan" aria-describedby="" readonly value="<?= $s, ++$l; ?>" >
        </div>
        <div class="mb-3">
                <label for ="namaikan" class="form-label">Nama ikan</label>
                <input type="text" class="form-control" id="nama_ikan" name="nama_ikan" aria-describedby=""  >
        </div>
        <div class="mb-3">
                <label for ="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="idikan" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" aria-describedby="">
        </div>
        <div class="mb-3">
                Publish
                <input type="radio" class="" id="status" name="status" value="published"  aria-describedby="" checked="checked" >
                Ya
                <input type="radio" class="" id="status" name="status" value="no"  aria-describedby="">
                Tidak
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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

