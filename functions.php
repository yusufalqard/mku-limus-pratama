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
        $password = hash("SHA256",$password);
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
        //Query update data UNTUK user
        $query = "UPDATE user SET
                    username = '$username',
                    password = '$password',
                    leveluser = '$leveluser'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    //Function untuk tambah data baru sebagai admin atau pengurus
    function tambah($data){
        //Mengacu pada $conn yang berada di luar function
        global $conn;
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $tgl = date($data["tgl"]);
        $nominal = htmlspecialchars($data["nominal"]);
        //Query insert data
        $query = "INSERT INTO rekapdata VALUES
                    ('','$deskripsi','$tgl','$nominal')
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    //Function untuk update data pada tabel rekap data
    function updatedata($data){
        global $conn;
        $id = $data["id"];
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $tgl = date($data["tgl"]);
        $nominal = htmlspecialchars($data["nominal"]);
        //Query update data untuk Rekap Data
        $query = "UPDATE rekapdata SET
                    deskripsi = '$deskripsi',
                    tgl = '$tgl',
                    nominal = '$nominal'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM user WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>