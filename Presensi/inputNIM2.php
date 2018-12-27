<?php
//buat koneksi dengan MySQL
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'presensi'; // Nama Database

	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan2</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>


	<header>
		<div class="row">
			<div class="logo">
				<img src="logo.png">
			</div>
			<div class="hero">
				<h1>Presensi</h1>
			</div>
		</div>

		<div class="login">
			
				
        <form action="" method="POST">
        <tr><input name="nim" type="text" placeholder="NIM">
        </tr>
        <td><input type="submit" name="submit" value="Masuk"></td>
       </form>
        <?php
                    if(isset($_POST['submit'])){
                        $sql = "UPDATE `data_mahasiswa` SET `2` = 'H' WHERE `data_mahasiswa`.`nim` = '".$_POST['nim']."'";
                        if(mysqli_query($conn,$sql)){
                            
                            echo "Data Berhasil Disimpan";
                        }else{
                            echo "Data Gagal Disimpan";
                        }
                    }
                        
            ?>
        </div>
        
    </header>
    </body>
</html>