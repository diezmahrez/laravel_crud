<html> 
    
    <head>
    <!-- Required meta tags -->
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
     <link rel='stylesheet' href='style.css'>

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker(format: 'mm/dd/yyy');
    } );
    </script>
      <title>Sistem Informasi Akademik</title>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-success">
    <div class="container">
    <a class="navbar-brand" href="index.php">  Sistem Informasi Akademik</a>
      
    </div>
    </nav>
    <div class="container">
    <br>
    <a href="/sia" class="btn btn-primary"> Kembali </a>
    <div class="card mt-2">
	  <div class="card-header bg-primary text-white text-center">Jadwal Kuliah</div>
            <div class="card-body table-responsive">
            @foreach($jadwalkuliah as $j)
            <form action="/sia/update" method="post" >
            {{ csrf_field() }} 
            <div class="row mb-3">
            <label for="kd_mkul" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="kd_mkul" value="{{ $j->kd_mkul }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="kd_mkul" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_mkul" value="{{ $j->nama_mkul }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Dosen</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="kd_dosen" value="{{ $j->kd_dosen }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jam Pelajaran</label>
            <div class="col-sm-10">
            <input type="time" class="form-control" name="Jam" value="{{ $j->Jam }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ruang Kelas</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="ruang_kelas" value="{{ $j->ruang_kelas }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah Mahasiswa</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="jumlah_mhs" value="{{ $j->jumlah_mhs }}">
            </div>
            </div>
            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-10">
            <input type="date" id="datepicker" class="form-control" name="tanggal_mulai" value="{{ $j->tanggal_mulai }}">
            </div>
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary align-item-right" name="tambah">Submit</button>
            </div>
            </form>
            @endforeach
            </div>
            </div>
          </div>
          </div>



    </body>

</html>