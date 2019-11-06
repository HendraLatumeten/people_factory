<?php
    $kode = $_GET['kode'];
    $username = $_GET['username'];
 
    $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('coba',$koneksi);
 
    $query = mysql_query("UPDATE test SET aktif = 'Y' WHERE kode = '".$kode."'") or die (mysql_error());
 
    if($query) {
        echo "Member dengan username <strong>".$username."</strong> telah diaktifkan";
    } else {
        echo "Gagal diaktifkan";
    }
?>