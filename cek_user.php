<?php 
    // mengaktifkan session pada php
    require 'session_mulai.php';
    //Panggil fungsi dan koneksi
    require 'functions.php';
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verify = hash("SHA256",$password);
    
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$verify'");
   // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    //Cek Validasi
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        // cek jika user login sebagai admin
        if($data['leveluser']=="admin"){
            echo "<script>alert('Anda berhasil sebagai admin')</script>";
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['leveluser'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:admin/admin_page.php");
        // cek jika user login sebagai guest
        }else if($data['leveluser']=="guest"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['leveluser'] = "guest";
            // alihkan ke halaman dashboard guest
            header("location:pengguna/lihatrekap.php");
        // cek jika user login sebagai pengurus
        }else if($data['leveluser']=="pengurus"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['leveluser'] = "pengurus";
            // alihkan ke halaman dashboard pengurus
            header("location:halaman_pengurus.php");
        }else{
            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");
        }	
    }else{
        header("location:index.php?pesan=gagal");
    }  
?>