<?php
error_reporting(1);
$tgl_sekarang = date("Y-m-d");
$tglY = date("Y");
$tglm = date("m");
$tgld = date("d");
include "conf/koneksi.php";

$sql_cari_data_pasien="select nm_pasien, tgl_lahir, no_rkm_medis, no_ktp from pasien";
$regis="select reg_periksa.kd_poli, reg_periksa.no_rawat, reg_periksa.no_rkm_medis, pasien.nm_pasien, dokter.nm_dokter, dokter.kd_dokter FROM `reg_periksa` INNER JOIN pasien INNER JOIN dokter WHERE dokter.kd_dokter = reg_periksa.kd_dokter AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli NOT IN ('IGDK') AND reg_periksa.tgl_registrasi = '$tgl_sekarang'";
$sql_jumlah = $conect->query($regis);
$cek_row = mysqli_num_rows($sql_jumlah);
// IGD
$regisIGD="select reg_periksa.kd_poli, reg_periksa.no_rawat, reg_periksa.no_rkm_medis, pasien.nm_pasien, dokter.nm_dokter, dokter.kd_dokter FROM `reg_periksa` INNER JOIN pasien INNER JOIN dokter WHERE  dokter.kd_dokter = reg_periksa.kd_dokter AND reg_periksa.no_rkm_medis=pasien.no_rkm_medis AND reg_periksa.kd_poli = ('IGDK') AND reg_periksa.tgl_registrasi = '$tgl_sekarang'";
$sql_jumlah_IGD = $conect->query($regisIGD);
$cek_rowIGD = mysqli_num_rows($sql_jumlah_IGD);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <!-- <meta http-equiv="refresh" content="5" /> -->
    <title>Print barcode RM</title>
    <link rel="icon" type="image/x-icon" href="assets/img/barcode.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">

<!-- toastr -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="toast.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- END toastr -->

   <!-- Custom fonts for this template -->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
  <!-- Custom styles for this template -->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom styles for this page -->
<link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- <script type="text/javascript">
      function dataTable(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("load").innerHTML = this.responseText;
        }
        xhttp.open("GET", "load.php");
        xhttp.send();
      }
        setInterval(function(){
        }, 1);
    </script> -->
    
    <!-- Custom styles for this template -->
    <link href="assets/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation" >
  <div class="container-fluid">
    
  </div>
</nav> -->
    <ul class="navbar navbar-expand-lg fixed-top navbar-dark bg-light justify-content-center" aria-label="Main navigation">
      <li class="nav-item">
        <a class="navbar-brand">
          <img src="assets/img/logo.png" alt="" width="120" height="30" class="d-inline-block align-text-top" style="margin-right: 20px;">
        </a>
      </li>
    </ul>

<div class="nav-scroller shadow-sm bg-purple">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link text-white active" aria-current="page" href="http://192.168.0.21/kantor(tema)/app/page/bridging/">Dashboard</a>
    <a class="nav-link text-white" href="#">
      Data Pendaftaran Poliklinik Masuk
      <span class="badge bg-light text-dark rounded-pill align-text-bottom"><?php echo $cek_row; ?></span>
    </a>
    <a class="nav-link text-white" href="#">
      Data Pendaftaran IGD Masuk
      <span class="badge bg-light text-dark rounded-pill align-text-bottom"><?php echo $cek_rowIGD; ?></span>
    </a>
    <!-- <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a> -->
  </nav>
</div>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="assets/img/barcode.png" alt="" width="48" height="38" style="margin-right:5px;">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Aplikasi Cetak Barcode Rekam Medis</h1>
      
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Registrasi Poli Hari Ini Masuk Task ID Tanggal :  <?php echo"$tgl_sekarang"; ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Aksi</th>
                <th>Nama pasien</th>
                <th>No. RM</th>
                <th>Tanggal Lahir</th>
                <th>NIK</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Aksi</th>
                <th>Nama pasien</th>
                <th>No. RM</th>
                <th>Tanggal Lahir</th>
                <th>NIK</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
                // $poli="'IGDK','U0001','U0002','U0037','U0038'";
                    $sql = $conect->query($sql_cari_data_pasien);
                    while ($data=$sql->fetch_assoc()) {            
                ?>
                <tr>
                  <td>
                    <form metho="POST" action="index_cetak.php" target="_blank">
                    <input type="hidden" name="no_rm" value="<?php echo $data['no_rkm_medis']; ?>"><br>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                    </form>
                  </td>
                  <td><?php echo $data['nm_pasien'];?></td>
                  <td><?php echo $data['no_rkm_medis'];?></td>
                  <td><?php echo $data['tgl_lahir'];?></td>
                  <td><?php echo $data['no_ktp'];?></td>
                </tr>
                <?php
                  }
                ?>
            </tbody>
          </table>
       </div> 
    </div>
  </div>

</main>

<div class="card" style="text-align:center;">
  <h5 class="card-header"></h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <footer>&copy; Copyright 2024 Bootstrap5.Andeska Mawardi, S.Kom</footer>
    <a href="https://github.com/andeska-voyage" class="btn btn-primary" target="_blank">Silahkan Berkunjung</a>
  </div>
</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/offcanvas.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script>
            // 
    </script>
  </body>
</html>
