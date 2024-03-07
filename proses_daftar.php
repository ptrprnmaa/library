<?php 
// koneksi database
        include 'koneksi.php';
        
        $username = $_POST['username'];
        $password =  $_POST['password'];
        $email = $_POST['email'];
        $namalengkap = $_POST['namalengkap'];
        $alamat = $_POST['alamat'];
        $level = $_POST['level'];
        
        // menginput data ke database
        mysqli_query($koneksi,"INSERT into user (username,password,email,namalengkap,alamat,level)
                                values('$username','$password','$email','$namalengkap','$alamat','$level')");
        
        // mengalihkan halaman kembali ke index.php
        header("location:index.php");
        
?>