<?php 
include "ceksession.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  <link rel="stylesheet" href="DataTables/jquery.dataTables.min.css">
  <link rel="stylesheet" href="DataTables/buttons.dataTables.min.css">
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <title>Aplikasi Struktur Organisasi</title>
</head>
<body>
  <nav style="background-color:#D4A4DB ;" class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h5>Struktur Organisasi</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?hal=home" ><h5>Home</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?hal=biodata"><h5>Biodata</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?hal=struktur"><h5>Struktur</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kembali.php"><h5>Kembali</h5></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <?php
  include "koneksi.php";
  @$hal = $_GET['hal'];
  if ($hal == 'struktur') {
    include "struktur.php";
  } else if ($hal == 'biodata') {
       include "biodata.php"; 
   }
   else if ($hal == 'home' || $hal == ''){
    include "home.php";
   }
   ?>
</div>
</body>
<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="DataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="DataTables/buttons.print.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('#tabelbiodata').DataTables( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
  </script>

</html>
</script>
</html>