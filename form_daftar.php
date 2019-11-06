<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Softy Pinko - Bootstrap 4.0 Theme</title>
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
                       <form>
                        <h1>Daftar</h1>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" >
                               
                            </div>
                        </div>
                    </div>

                     

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" >
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" class="form-control" >
                                
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telp</label>
                                <input type="number" class="form-control" >
                               
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <select class="form-control" required="" >
                                    <option value="">--Pilih--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="L">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                        </div>
                    </div>


                        
                              <button type="submit" class="btn btn-primary">Submit</button>
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