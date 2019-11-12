


<?php $ambil = $koneksi->query("SELECT * FROM pelamar "); ?>
    <?php while ($pecah = $ambil->fetch_assoc()) {
      ?>
 <ul class="navbar-nav">
          <!-- <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href="home.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="icons.html">
              <i class="ni ni-planet text-blue"></i> Icons
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="maps.html">
              <i class="ni ni-pin-3 text-orange"></i> Maps
            </a>
          </li> -->

          
          <li class="nav-item">
            <a class="nav-link " href="index.php?halaman=profile&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-single-02 text-yellow"></i> Profil Saya
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?halaman=data_pribadi&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Data Pribadi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?halaman=data_pelamar&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Data Pelamar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=test_profiling&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-ruler-pencil text-info"></i> Test Profiling
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=document&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-single-copy-04 text-pink"></i>Document
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=logout&id=<?php echo $pecah['user_id']; ?>">
              <i class="ni ni-button-power text-blue"></i>Keluar
            </a>
          </li>
        </ul>
   
        <?php } ?>
