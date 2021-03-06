<?php
  require 'function.php';
  $anggota = query("SELECT * FROM db_anggota");

  if (isset($_POST['search'])) {
    $anggota = search($_POST['keyword']);
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="font-awesome.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PERPUSTAKAAN</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Daftar Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.php">Anggota Perpustakaan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Portfolio -->
        <section class="page-section" id="portfolio">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-6 px-3">
                    <form method="POST" action="">
                    <div class="input-group mb-3">
                        <input type="text" id="keyword" name="keyword" class="form-control input-text" placeholder="Cari Daftar Anggota ..." autocomplete="off" aria-label="Recipient's username" aria-describedby="basic-addon2"/>
                        <div class="input-group-append">
                        <button class="btn btn-outline-warning btn-lg" type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-6 text-end">
                    <h2 class="section-heading text-uppercase mb-5">ANGGOTA PERPUSTAKAAN</h2>
                </div>
            </div>

            <table class="table table-striped text-center mt-5">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID Anggota</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Foto Anggota</th>
                <th scope="col">Opsi</th>
                </tr>
            </thead>

            <?php if (empty($anggota)) : ?>
                <tr>
                <td colspan="4" class="alert alert-danger text-center" role="alert">
                    <p>Data Anggota Tidak Ditemukan</p>
                </td>
                </tr>
            <?php endif; ?>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($anggota as $anggotaa) : ?>
                    <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $anggotaa['id_anggota']; ?></td>
                    <td><?php echo $anggotaa['nama_anggota']; ?></td>
                    <td><?php echo $anggotaa['alamat']; ?></td>
                    <td><?php echo $anggotaa['no_hp']; ?></td>
                    <td><img class="rounded" src="image/<?php echo $anggotaa['gambar_anggota']; ?>" width="70px"></td>
                    <td><a href="detail_anggota.php?id=<?= $anggotaa['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-4">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - PERPUSTAKAAN NASIONAL</div></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
