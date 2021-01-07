<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.custom.css" crossorigin="anonymous" />

    <style>
      * {box-sizing: border-box;}
    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">

      <!-- Menu Kiri -->
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('data-siswa') ?>">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('info-kegiatan') ?>">Info Kegiatan</a>
        </li>
      </ul>

      <!-- Menu Kanan -->
      <ul class="navbar-nav mr-auto ">
      	<?php if (session()->get('logged_in') === true): ?>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="<?php echo base_url('home') ?>">Data</a>
	        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php //session()->remove(['role','logged_in']); ?>">Logout</a>
          </li>
        <?php else: ?>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url('login') ?>">Login </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url('registrasi') ?>">Registrasi</a>
	        </li>
	 	   <?php endif; ?>
      </ul>


	  </div>
  </div>
</nav>

<?php $this->renderSection('content') ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>