<?php 
date_default_timezone_set("Asia/Jakarta");

include 'koneksi.php';
 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="tema/fontawesome/css/all.min.css">
    <title>CRUD</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">SIPEMABA  || Kampus Kita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <div class="text-white">
        <?php echo date('l,d-m-y');  ?>
      </div>
    
    </div>
  </div>
</nav>

    <!-- sidebar -->

    <div class="row mt-5">
      <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
        <!-- menu -->
            <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white active" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> calon Mahasiswa</a><hr>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-user-edit"></i> Input camaba</a><hr>
      </li>
     <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a><hr>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal kuliah</a><hr>
      </li>
    </ul>
      </div>
      <div class="col-md-10 p-5 pt-5">
        <!-- konten -->
        <h3><i class="fas fa-user"></i>Daftar Calon Mahasiswa</h3><hr>

        <table class="table table-striped">
               <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">agama</th>
            <th scope="col">sekolah asal</th>
            <th scope="col">Opsi</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
        <tbody>
          <<?php while ($camaba = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <th scope="row"><?php echo $camaba['id']; ?></th>
            <td><?php echo $camaba['nama']; ?></td>
            <td><?php echo $camaba['alamat']; ?></td>
            <td><?php echo $camaba['jenis_kelamin']; ?></td>
            <td><?php echo $camaba['agama']; ?></td>
            <td><?php echo $camaba['sekolah_asal']; ?></td>
           
            <td><img src="image/foto1.jpg" width="100px"></td>
            <td><i class="fas fa-edit"></i>||<i class="fas fa-trash"></i></td>
          </tr>
          <?php } ?>
        </tbody>
        </table>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>