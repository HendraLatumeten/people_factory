<?php

$ambil=$koneksi->query ("SELECT * FROM pelamar WHERE user_id='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

?>


<form method="post">
    <h6 class="heading-small text-muted mb-4">Informasi Pelamar</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama Lengkap</label>
                    <input type="text" name="nama" value="<?php echo $pecah["nama"]; ?>"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="input-email">Nik</label>
                    <input type="number" name="nik" value="<?php echo $pecah["nik"]; ?>" id="input-email"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="<?php echo $pecah["tmpt_lahir"]; ?>" id="tempatlahir"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?php echo $pecah["tgl_lahir"]; ?>" id="tanggallahir"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="jeniskelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" value="<?php echo $pecah["jenis_kelamin"];  ?>" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>







            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="tanggallahir">Agama</label>
                    <input type="text" name="agama" value="<?php echo $pecah["agama"]; ?>" id="tanggallahir"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="tanggallahir">No Handphone</label>
                    <input type="text" name="no_hp" value="<?php echo $pecah["no_hp"]; ?>" id="tanggallahir"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4" />
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Informasi Alamat</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $pecah["alamat"]; ?>"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country">RT/RW</label>
                    <input type="text" name="rt_rw" value="<?php echo $pecah["rt_rw"]; ?>" id="input-country"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-city">Desa/Kelurahan</label>
                    <input type="text" name="desa_kel" value="<?php echo $pecah["desa_kel"]; ?>" id="input-city"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-city">Kecamatan</label>
                    <input type="text" name="kecamatan" value="<?php echo $pecah["kec"]; ?>" id="input-city"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country"></label>Kabupaten/Kota</label>
                    <input type="text" name="kab_kota" value="<?php echo $pecah["kab_kota"]; ?>" id="input-country"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country"></label>Provinsi</label>
                    <input type="text" name="provinsi" value="<?php echo $pecah["prov"]; ?>" id="input-country"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country"></label>Kode Pos</label>
                    <input type="number" name="kode_pos" value="<?php echo $pecah["kd_pos"]; ?>" id="input-country"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>


        </div>
    </div>
    <hr class="my-4" />
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Informasi Pendidikan</h6>
    <div class="pl-lg-4">

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country">Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" value="<?php echo $pecah["pendidikan_terakhir"]; ?>"
                        id="input-country" class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country">No Ijazah</label>
                    <input type="number" name="no_ijazah" value="<?php echo $pecah["no_ijazah"]; ?>" id="input-country"
                        class="form-control form-control-alternative" placeholder="Wajib di Isi">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4" />
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Lampiran Berkas</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['profil']; ?>" width="50">
                    <label class="form-control-label" for="input-country">Foto Profil</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['ktp']; ?>" width="50">
                    <label class="form-control-label" for="input-country">Foto KTP</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['ijazah']; ?>" width="50">
                    <label class="form-control-label" for="input-country">Foto Ijazah</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['spk_1']; ?>" width="50">
                    <label class="form-control-label" for="input-country">SPK 1</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['spk_2']; ?>" width="50">
                    <label class="form-control-label" for="input-country">SPK 2</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img src="../berkas/<?php echo $pecah ['spk_3']; ?>" width="50">
                    <label class="form-control-label" for="input-country">SPK 3</label>
                    <input type="file" name="foto" id="input-country" class="form-control form-control-alternative">
                </div>
            </div>

        </div>
    </div>
    <hr class="my-4" />
    <!-- Description -->
    <h6 class="heading-small text-muted mb-4">Tentang Saya</h6>
    <div class="pl-lg-4">
        <div class="form-group">
            <label> Pengalaman Kerja </label>
            <textarea rows="4" class="form-control form-control-alternative"></textarea>
        </div>
    </div>
    <button class="btn btn-primary center" name="submit">Simpan</button>

</form>

<?php
if (isset($_POST['submit']))
{
  $namafoto=$_FILES['foto_profil']['name'];
  $lokasifoto=$_FILES['foto_profil']['tmp_name'];
  //jika foto dirubah
  if (!empty($lokasifoto))
  {
    move_uploaded_file($lokasifoto,"../berkas/$namafoto");
    $koneksi->query("UPDATE pelamar SET nama='$_POST[nama]',
      nik='$_POST[nik]',tmpt_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tanggal_lahir]',
      alamat='$_POST[alamat]',rt_rw='$_POST[rt_rw]',
      desa_kel='$_POST[desa_kel]',kec='$_POST[kecamatan]',kab_kota='$_POST[kab_kota]',
      prov='$_POST[provinsi]',kd_pos='$_POST[kode_pos]',prov='$_POST[provinsi]',
      jenis_kelamin='$_POST[jenis_kelamin]',agama='$_POST[agama]',pendidikan_terakhir='$_POST[pendidikan_terakhir]',
      no_ijazah='$_POST[no_ijazah]',no_hp='$_POST[no_hp]',profil='$namafoto',ktp='$namafoto',
      ijazah='$namafoto',spk_1='$namafoto',spk_2='$namafoto',spk_3='$namafoto'
      
      WHERE user_id='$_GET[id]'");

  }else {
    $koneksi->query("UPDATE pelamar SET nama='$_POST[nama]',
      nik='$_POST[nik]',tmpt_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tanggal_lahir]',
      alamat='$_POST[alamat]',rt_rw='$_POST[rt_rw]',
      desa_kel='$_POST[desa_kel]',kec='$_POST[kecamatan]',kab_kota='$_POST[kab_kota]',
      prov='$_POST[provinsi]',kd_pos='$_POST[kode_pos]',prov='$_POST[provinsi]',
      jenis_kelamin='$_POST[jenis_kelamin]',agama='$_POST[agama]',pendidikan_terakhir='$_POST[pendidikan_terakhir]',
      no_ijazah='$_POST[no_ijazah]',no_hp='$_POST[no_hp]'
      
      WHERE user_id='$_GET[id]'");
  }


  echo "<script>alert('Data Telah di Simpan');</script>";

  echo "<script>location='index.php';</script>";


}
?>