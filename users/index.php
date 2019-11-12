
<?php

session_start();
  //koneksi ke database
  include 'koneksi.php';

if (!isset($_SESSION['pelamar']))
{
  echo"<script>alert('Anda Harus Login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
    
      <?php 
       include ('users_layout/header.php') ;
       ?> 
  
    <!-- End Navbar -->
    <!-- Header -->
    
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          
          </div>
        </div>
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            
              <?php
        if (isset($_GET['halaman']))
        {
          if ($_GET['halaman']=='profile') {
            include 'profile.php';
          }elseif ($_GET['halaman']=='data_pribadi') {
            include 'data_pribadi.php';
          }elseif ($_GET['halaman']=='data_pelamar') {
            include 'data_pelamar.php';
          }
          elseif ($_GET['halaman']=='test_profiling') {
            include 'test_profiling.php';
          }
          elseif ($_GET['halaman']=='document') {
            include 'document.php';
          }
          elseif ($_GET['halaman']=='logout') {
            include 'logout.php';
          }
        }else {
          include 'home.php';
        }
        ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php 
       include ('users_layout/footer.php') ;
       ?>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>