<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aduan-Masyarkat-Pemalang</title>
    
     <link rel="stylesheet" href="<?=URL::to('/')?>/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
  <div class="container py-3">
    <a class="navbar-brand" href="#">Aduan Masyarkat
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link fs-5" aria-current="page" href="<?= URL::to('/')?>/Users/pengaduan_saya">Aduan-Saya</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link fs-5" href="<?= URL::to('/')?>/Users/pengaduan_baru">Tambah-Aduan</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link fs-5" href="<?= URL::to('/')?>/logut">Logut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('users')

<script src="<?php URL::to('/')?>/js/bootstrap.bundle.js"></script>
<script src="<?php URL::to('/')?>/js/bootstrap.min.js"></script>

<!-- <script src="./js/bootstrap.bundle.js"></script>
<script src="./js/bootstrap.min.js"></script> -->
</body>
</html>