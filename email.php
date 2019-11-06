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
             <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="konten">
            <form method="POST" action="">
            <fieldset>
                <legend>Form Member</legend>
                <label>username</label>
                <input type="text" name="username" />
                <label>email</label>
                <input type="text" name="email" />
                <label>password</label>
                <input type="password" name="password" />
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
            </form>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['submit'])) {
 

//the subject
$sub = "Your subject";
//the message
$msg = "Your message";
//recipient email here
$rec = "hendrawyt34@gmail.com";
//send email
mail($rec,$sub,$msg);


 
    }
?>
                       
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

        </div>
    </section>

    <style type="text/css">
        
        #konten {
    margin: 20px auto;
    width: 300px;
    font-family: Helvetica;
    font-size: 0.8em;
}
#konten form fieldset label, #konten form fieldset input  {
    width: 100%;
    float: left;
    margin-top: 5px;
}
#konten form fieldset legend {
    padding: 5px;
    background-color: #DBEAF9;
    font-weight: bold;
}
#konten form fieldset {
    background-color: #ECF4FC;
    border: 1px solid #DBEAF9;
}
#konten form fieldset input[type=submit] {
    width: 30% !important;
    margin-top: 20px;
}
    </style>
        
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