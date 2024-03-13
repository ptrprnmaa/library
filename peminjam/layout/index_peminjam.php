<?php
include 'layout/header.php';
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
    <br>
    <br>
    <br>
    <br>
            <h2>SELAMAT DATANG</h2>
                <br>
                <h3>Di Halaman Peminjam</h3>
                <h6>Bacalah buku karna buku adalah jendelan dunia</h6>
                
            </div>
            <div class="col-sm-5">
               <img src="img/buku.jpeg" width="300" alt="">
            </div>
         </div>
    </div>

<?php
include 'layout/footer.php';
?>