<?php 
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
    echo "<script>alert('Berhasil logout dari aplikasi MKU');</script>";
    header("Location:index.php");
?>