<?php
include 'admin/header.php';
?>

<div class="container">

    <?php

        include 'koneksi.php';

        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $user = mysqli_query($koneksi, "SELECT * FROM user");
        $pinjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

        $b = mysqli_num_rows($buku);
        $u = mysqli_num_rows($user);
        $p = mysqli_num_rows($pinjaman);

    ?>
    <div class="row my-3">
    <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-white text-center bg-danger">
                    <h2>Data Buku</h2>
                    <h1><b><?php echo $u;?></b></h1>
                </div>
                <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-white text-center bg-success">
                    <h2>Data Anggota</h2>
                    <h1><b><?php echo $u;?></b></h1>
                </div>
                <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
            </div>
         </div><div class="col-sm-3">
            <div class="card">
                <div class="card-body text-white text-center bg-primary">
                    <h2>Data Peminjam</h2>
                    <h1><b><?php echo $p;?></b></h1>
                </div>
                <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
                </div>
                </div><div class="col-sm-3">
                <div class="card">
                <div class="card-body text-white text-center bg-primary">
                    <h2>Data Laporan</h2>
                    <h1><b><?php echo $p;?></b></h1>
                </div>
                <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6" style="margin-top: 5rem;">
            <h1>SELAMAT DATANG</h1>
                <h3>Di Halaman Admin</h3>
                
            </div>
            <div class="col-sm-6">
               <img src="img/buku.jpeg" width="500" alt="">
            </div>
         </div>
    </div>

<?php
include 'admin/footer.php';
?>