<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?= base_url('dist')?>/css/bootstrap.min.css" rel="stylesheet" />
    <?php if ($title):?>
      <title>Mahasiswa | <?= $title?></title>
    <?php else: ?>  
      <title>Mahasiswa | Index</title>
    <?php endif;?>  
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('/')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/about')?>">About</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/login')?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/register')?>">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mb-2 mt-2">
      <?= $this->renderSection('content')?>
    </div>
    <script src="<?= base_url('dist')?>/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
