<?php 
    // mengaktifkan session pada php
    require 'session_mulai.php';
    // menghubungkan php dengan koneksi database
    require 'koneksi.php';
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Cek data index
    $log = $_POST['Login'];
    if($log=="Login"){
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    if(mysqli_num_rows($login)==1){
        $cek = mysqli_fetch_array($login);
        $_SESSION['username']=$cek['username'];
        $_SESSION['password']=$cek['password'];
        $_SESSION['leveluser']=$cek['leveluser'];
        //Cek leveluser pengguna
        if($cek['leveluser']=="admin"){
            header('Location:admin/admin_page.php');
        }else if($cek['leveluser']=="pengurus"){
            header('Location:pengurus/mku_page.php');
        }else if($cek['leveluser']=="guest"){
            header('Location:pengguna/user_page.php');
        }
    }
} 
// cek apakah username dan password di temukan pada database
// if($cek > 0){
 
// 	$data = mysqli_fetch_assoc($login);
//     //Cek Validasi
//     if($cek > 0){
//         // cek jika user login sebagai admin
//         if($data['leveluser']=="admin"){
//             // buat session login dan username
//             $_SESSION['username'] = $username;
//             $_SESSION['password'] = $password;
//             $_SESSION['leveluser'] = "admin";
//             // alihkan ke halaman dashboard admin
//             header("location:admin/admin_page.php");
//         // cek jika user login sebagai guest
//         }else if($data['leveluser']=="guest"){
//             // buat session login dan username
//             $_SESSION['username'] = $username;
//             $_SESSION['leveluser'] = "guest";
//             // alihkan ke halaman dashboard guest
//             header("location:halaman_guest.php");
//         // cek jika user login sebagai pengurus
//         }else if($data['leveluser']=="pengurus"){
//             // buat session login dan username
//             $_SESSION['username'] = $username;
//             $_SESSION['leveluser'] = "pengurus";
//             // alihkan ke halaman dashboard pengurus
//             header("location:halaman_pengurus.php");
//         }else{
//             // alihkan ke halaman login kembali
//             header("location:index.php?pesan=gagal");
//         }	
//     }else{
//         header("location:index.php?pesan=gagal");
//     }  
// }
?>