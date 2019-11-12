<?php
            include 'koneksi.php';
            
            if (isset($_POST["submit"])){
             
              $nama_lengkap = $_POST["nama_lengkap"];
              $username = $_POST["username"];
              $email = $_POST["email"];
              $password = $_POST["password"];
              $no_hp = $_POST["no_hp"];
              $jenis_kelamin = $_POST["jenis_kelamin"];


                //cek apakah email sudah digunakan
              $ambil = $koneksi->query("SELECT * FROM pelamar
                WHERE email='$email'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok==1) {
                echo "<script>alert('Gagal Mendaftar, Email Sudah Digunakan');</script>";
                echo "<script>location='form_daftar.php'</script>";
              }
              else {
                  //query insert ke tabel pelamar
                $koneksi->query("INSERT INTO pelamar
                  (username,email,password,nama,no_hp,jenis_kelamin)
                  VALUES('$username','$email','$password','$nama_lengkap','$no_hp','$jenis_kelamin') ");

                echo "<script>alert('Pendaftaran Berhasil, Silahkan Login');</script>";
                echo "<script>location='./users/login.php'</script>";
              }
                

            }


            ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>People Factory</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php 
     include('layout/header.php');
    ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    
         
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>126</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--  form daftar  -->
             <section class="section colored">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-heading" style="border: 20px;">
                       <form method="post">
                        <h1>Daftar</h1>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" >
                               
                            </div>
                        </div>
                    </div>

                     

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" >
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" name="email" class="form-control" >
                                
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nohp">No Telp</label>
                                <input type="number" name="no_hp" class="form-control" >
                               
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jeniskelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required="" >
                                    <option value="">--Pilih--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Password</label>
                                <input type="password" name="pasconf" class="form-control" id="exampleInputPassword2" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                    </div>


                        
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                                            
                </div>
            <!-- ***** Section Title End ***** -->

        </div>
    </section>
        
    <!-- ***** End Form daftar***** -->
    
    <!-- ***** Footer Start ***** -->
    <?php
    include('layout/footer.php')
    ?>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>