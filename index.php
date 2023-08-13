<?php
    require 'functions.php';
    require 'session_mulai.php';
    if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>
                    alert('Username dan Password tidak sesuai!');
                </script>";
		}
	}
    if(isset($_POST["Register"])){
        //Mengecek apakah user sudah terdaftar atau belum
        if(registrasi($_POST)>0){
            echo "<script>
                    alert('Anda telah terdaftar menjadi Guest User, Silahkan login kembali!');
                </script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>
<html>
<head>
    <title>Masjid Khoiru Ummah - Login Page</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body class="logBackground">
    <div class="topLogoLogin">
            <p>Halaman Login - Masjid Khoiru Ummah</p>
    </div>
<form action="cek_user.php" method="POST">
    <div class="container">
        <div class="boxlogin">
            <ul>
                    <li class="ruang"></li>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="off" onfocus="this.value=''" value="">
                </li>
                    <li class="ruang"></li>
                <li>
                <label for="password">Password :</label>
                    <input class="cek" type="password" name="password" id="password" placeholder="Masukkan Password" onfocus="this.value=''" value="">
                </li>
                    <li class="ruang"></li>
                    <input type="checkbox" class="cekshowPW">Tampilkan Password
                        <!-- Script untuk menampilkan password yang diketik dengan bantuan jquery -->
						<script type="text/javascript">
							$(document).ready(function(){
								$('.cekshowPW').click(function(){
									if($(this).is(':checked')){
										$('.cek').attr('type','text');
									}else{
										$('.cek').attr('type','password');
									}
								});
							});    
                        </script>
                    <li class="ruang"></li>
                <li>
                    <button type="submit" name="Login" class="masuk">Login</button>
                    <button type="submit" name="Register" class="registrasi">Register</button>
                </li>
            </ul>
        </div>
    </div>
</form>
    <div class="botLogoLogin">
        <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
    </div>
</body>
</html>