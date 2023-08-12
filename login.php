<?php 
    //Fungsi Functions untuk semua
    require 'functions.php';
    //Atur Session Start
    require 'session_mulai.php';
    //Cek Cookie
    if  (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
        //Ambil Username berdasarkan id
        $result = mysqli_query($conn,"SELECT username FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        //Cek Cookie Username dan Password
        if($key === hash('sha256', $row['username'])){
            $_SESSION['login'] = true;
        }
    }
    //Cek Session Login
    if (isset($_SESSION["login"])){
        header("Location:index.php");
        exit;
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn,"SELECT*FROM user WHERE username='$username'");
        //Cek Validasi Username
        if(mysqli_num_rows($result) === 1){
            //Cek Validasi Password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password,$row["password"])){
                //Atur Session untuk memberi akses waktu ke dalam page baru atau admin
                $_SESSION["login"] = true;
                //Kalo berhasil maka proses [REMEMBER ME] ingat saya akan diperiksa
                if(isset($_POST["ingatsaya"])){
                    //Atur Waktu Cookie dan Buat Cookie Baru
                    setcookie('id', $row['id'],time()+60);
                    setcookie('key',hash('sha256', $row['username']),time()+60);
                    // setcookie('login','true',time()+60);
                }

                header("Location:index.php");
                exit;
            }
        }
    }
?>