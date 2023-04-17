<html> 
    <head>
    <!-- Required meta tags -->
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
     <style type="text/css">
            .container {
                width: 80%;
                margin: 15px auto;
            }
            .container2 {
                
                margin: 15px auto;
            }
    </style>
      <title>Sistem Informasi Akademik</title>
    </head>
    <body>
    <?php
    $koneksi    = mysqli_connect("localhost", "root", "", "sia");
    $jumlahmhs  = mysqli_query($koneksi, "SELECT jumlah_mhs FROM jadwalkuliah order by nama_mkul asc ");
    $namamkul       = mysqli_query($koneksi, "SELECT nama_mkul FROM jadwalkuliah order by nama_mkul asc ");
    ?>
    <nav class="navbar navbar-dark bg-success">

    <div class="container">
    <a class="navbar-brand" href="#">  Sistem Informasi Akademik</a>      
    </div>
    </nav>
    </br>  
    <div class="container">
        <canvas id="barchart"></canvas>
    </div>
    <div class="container">
    <br>
    <a href="/sia/tambah" class="btn btn-primary"> (+) Tambah data </a>
    <a href="/sia/cetak" class="btn btn-success" style="float: right;"> Cetak   </a>
    <div class="card mt-2">
	  <div class="card-header bg-success text-white text-center">Jadwal Kuliah</div>
            <div class="card-body table-responsive">
            <table class="table table-bordered table-striped text-center">
              
              <tr>
                      <th>Kode Matakuliah</th>
                      <th>Nama Matakuliah</th>
                      <th>Kode Dosen</th>
                      <th>Jam</th>
                      <th>Ruang Kelas</th>
                      <th>Jumlah Mahasiswa</th>
                      <th width="130px">Tanggal Mulai</th>
                      <th  width="130px">Aksi</th>  
                      
                      
                  </tr>
                @foreach($jadwalkuliah as $j)
                    <tr>
                        <td>{{ $j->kd_mkul }}</td>
                        <td>{{ $j->nama_mkul }}</td>
                        <td>{{ $j->kd_dosen }}</td>
                        <td>{{ $j->Jam }}</td>
                        <td>{{ $j->ruang_kelas }}</td>
                        <td>{{ $j->jumlah_mhs }}</td>
                        <td>{{ $j->tanggal_mulai }}</td>
                        <td>
                            <a href="/sia/edit/{{ $j->kd_mkul }}" class="btn btn-warning">Edit</a>
                            <a href="/sia/hapus/{{ $j->kd_mkul }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
          </div>
          </div>
    </body>
    <script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($namamkul)) { echo '"' . $p['nama_mkul'] . '",';}?>],
            datasets: [
            {
              label: "Penjualan Barang",
              data: [<?php while ($p = mysqli_fetch_array($jumlahmhs)) { echo '"' . $p['jumlah_mhs'] . '",';}?>],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193',
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193',
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193',
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
</html>