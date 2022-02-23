<?php
include "koneksi.php";
@$aksi = $_GET['aksi'];
 @$judul = 'INPUT BIODATA';
 @$btnaksi = 'Simpan';
 @$nimnya = $_GET['NIM'];
 @$alamat = '';
 @$jabatan ='';
 @$nohp ='';
 @$nama = '';

if ($aksi == 'edit') {
  $judul = 'EDIT BIODATA';
  $btnaksi = 'Edit';
  $sql = "SELECT * FROM biodata WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  $isi = mysqli_fetch_array($query);
  $nama =  $isi[0];
  $alamat = $isi[1];
  $jabatan = $isi[2];
  $nohp = $isi[3];
  $nimnya = $isi[4];
} else if($aksi == 'hapus') {
  $sql = "DELETE FROM biodata WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  echo "<meta http-equiv='refresh' content='1;url=?hal=biodata'>";
}
?>
<div class="row mt-3">
  <div class="col-sm-4 ml-2">
    <div class="card border-dark mb-3 target-left" style="max-width: 18rem;">
  <div class="card-header" nav style="background-color:#D4A4DB ;" "border-dark"><?php echo $judul; ?></div>
  <div class="card-body text-dark">
    <form method="post" action="">
  <div class="mb-3">
    <label for="NIM" class="form-label">NIM</label>
    <input type="number" value="<?php echo $nimnya; ?>" name="NIM" class="form-control" id="NIM" required="">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" id="nama" required="">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea rows="2" cols="10" name="alamat" class="form-control" id="alamat" required=""><?php echo $alamat; ?></textarea> 
  </div>
    <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" value="<?php echo $jabatan; ?>" class="form-control" id="jabatan" required="">
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">No.HP</label>
    <input type="number" name="nohp" value="<?php echo $nohp; ?>" class="form-control" id="nohp" required=""></textarea> 
  </div>
  <input type="submit" class="btn btn-primary" value="<?php echo $btnaksi; ?>" name="btnaksi">
</form>
</div>
  </div>
  <?php
  //jika tombol simpan di klik 
if (@$_POST['btnaksi'] == 'Simpan') {

  $nama = $_POST ['nama'];
  $alamat = $_POST ['alamat'];
  $jabatan = $_POST ['jabatan'];
  $nohp = $_POST ['nohp'];
  $nimnya = $_POST ['NIM'];
  $sql = "INSERT INTO `biodata`(`nama`, `alamat`, `jabatan`, `nohp`, `NIM`) VALUES ('$nama','$alamat','$jabatan','$nohp','$nimnya')";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data Berhasil disimpan</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=biodata'>";

  //jika tombol edit klik 
} else if (@$_POST['btnaksi'] == 'Edit') {
  $nama = $_POST ['nama'];
  $alamat = $_POST ['alamat'];
  $jabatan = $_POST ['jabatan'];
  $nohp = $_POST ['nohp'];
  $nimnya = $_POST ['NIM'];
  $sql = "UPDATE biodata SET  NIM='$nimnya', nama='$nama', alamat='$alamat', jabatan='$jabatan', nohp='$nohp' WHERE NIM='$nimnya'";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data berhasil diubah</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=biodata'>";


}
  ?>
  </div>
  <div class="col-sm">
    <div class="card border-dark mb-3 target-left" style="max-width: 55rem;">
    <table class="table" id="tablebiodata">
       <thead class="table-light">
      <tr>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jabatan</th>
<th>NoHP</th>
<th>Aksi</th>
</tr>
<tbody>
  <?php
  $sql = "SELECT * FROM biodata";
  $query= mysqli_query($konek, $sql);
  while ($data = mysqli_fetch_array($query)) {
   echo "<tr>
    <td>$data[NIM]</td>
    <td>$data[nama]</td>
    <td>$data[alamat]</td>
    <td>$data[jabatan]</td>
    <td>$data[nohp]</td>
    <td> <a class='btn btn-sm btn-primary' href='?hal=biodata&aksi=edit&NIM=$data[NIM]'>Edit</a>
    <a class='btn btn-sm btn-danger' href='?hal=biodata&aksi=hapus&NIM=$data[NIM]'>Hapus</a></td>
  </tr>";
  }
  ?>
  </tbody>
</table>
  </div>
</div>
</body>
</html>