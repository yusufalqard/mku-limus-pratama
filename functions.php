<?php 
    //Koneksi ke database dengan memanggil file lain menggunakan PHP require
    require 'koneksi.php';
    //
    function query($query){
        //Mengacu pada $conn yang berada di luar function
        global $conn;
        //Memanggil hasil query dari database
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data) {
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        //Cek Username apakah sudah terdaftar atau belum di database
        $result = mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");
        //Tes uji script username dari database yang terdaftar
        if (mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username yang dimasukkan sudah terdaftar');
                </script>";
            return false;
        }
        //Encryption Password yang diinput oleh user
        $password = password_hash($password,PASSWORD_DEFAULT);
        //Tambahkan User Registrasi baru ke database
        mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password','guest')");
        return mysqli_affected_rows($conn);
    }
    function ubah($data){
        //Mengacu pada $conn yang berada di luar function
        global $conn;
        $id = $data["id"];
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $leveluser = htmlspecialchars($data["leveluser"]);
        //Encryption Password yang diubah oleh admin
        $password = hash("sha256",$password);
        //Query update data
        $query = "UPDATE user SET
                    username = '$username',
                    password = '$password',
                    leveluser = '$leveluser'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
?>