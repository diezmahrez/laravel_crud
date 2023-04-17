<html> 
    <head>
      <title>Sistem Informasi Akademik</title>
    </head>
    <body>
<div>
<center>
    <h4>UNIVERSITAS MERCUBUANA</h4>
    <h4>KARTU JADWAL KULIAH   </h4>
</center>
</div>
<table align="center" border="1" class="table table-bordered table-striped text-center">
<tr>
  <th>Kode Matakuliah</th>
  <th>Nama Matakuliah</th>
  <th>Kode Dosen</th>
  <th width="100px">Jam</th>
  <th>Ruang Kelas</th>
  <th>Jumlah Mahasiswa</th>
  <th>Tanggal</th>  
</tr>

<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "sia";

$mysqli = mysqli_connect($server, $user, $password, $nama_database);

if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
$no = 1;
$tampil = mysqli_query($mysqli, "SELECT * from jadwalkuliah");
while($data = mysqli_fetch_array($tampil)) :

?>
<tr  align="center">
  <td><?=$data['kd_mkul']?></td>
  <td align="left"><?=$data['nama_mkul']?></td>
  <td><?=$data['kd_dosen']?></td>
  <td><?php echo date('H:i', strtotime($data["Jam"]));   ?></td>
  <td><?=$data['ruang_kelas']?></td>
  <td><?=$data['jumlah_mhs']?></td>
  <td ><?php echo date('j F Y', strtotime($data["tanggal_mulai"]));   ?></td>
</tr>
<?php endwhile;  ?>
</table>
<script>
		window.print();
</script>
</body>
</html>