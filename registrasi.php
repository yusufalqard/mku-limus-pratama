<?php
    require 'functions.php';
    if(isset($_POST["register"])){
        //Mengecek apakah user sudah terdaftar atau belum
        if(registrasi($_POST)>0){
            echo "<script>
                    alert('User baru telah terdaftar');
                </script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Daftar</title>
    <style>
            label{display:block;}
    </style>
</head>
<body>
    
    <h1>Halaman Daftar User</h1>
    
    <form method="post" action="">

     
        <ul>
            <li>
                <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
            </li>
            <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
            </li>
            <li>
                    <label for="konfirmPW">Konfirmasi Password : </label>
                    <input type="password" name="konfirmPW" id="konfirmPW">
            </li>
            <li>
                    <button type="submit" name="register">Daftar</button>
            </li>
        </ul>

    </form>
</body>
</html>