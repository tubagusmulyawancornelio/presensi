<?php

////start
session_start();

if(!isset($_SESSION['loggedIn'])){
    header("location: indexPresensi.php");
}
//end


//buat koneksi dengan MySQL
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'presensi'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM data_dosen';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Data Dosen</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>Data Dosen</h1>
                </div>
                <div class="tableisi">
					<table>
                        
                       <thead >
					<tr>
						<th class="no">No</th>
						<th>NIP</th>
						<th class="keterangan">Nama</th>
						<th>Email</th>
						<th class="keterangan">Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
                        <th class="keterangan">Jabatan</th>
					</tr>
                     </thead> 
                        
                        <?php
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo "<td>".$row['no']."</td>";
                            echo "<td>".$row['nip']."</td>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['alamat']."</td>"; 
                            echo "<td>".$row['jenis_kelamin']."</td>";   
                            echo "<td>".$row['agama']."</td>"; 
                            echo "<td>".$row['jabatan']."</td>"; 
                            echo "</tr>";
                        }
                            ?>
                        
					                  
					</table>
                    </div>
        <div class="menu">
      <table>
		<tr><th ><a href="">MENU UTAMA</a></th></tr>
		<tr><th><a href="Presensi%20mahasiswa.php">Presensi Mahasiswa</a></th></tr>
         <tr><th><a href="Presensi%20dosen.php">Presensi Dosen</a></th></tr>
		<tr><th><a href="informasi%20dosen.php">Informasi Dosen</a></th></tr>
        <tr><th><a href="input%20informasi%20dosen.php">input Informasi Dosen</a></th></tr>    
        <tr><th><a href="data%20dosen.php">Data Dosen</a></th></tr>
		<tr><th><a href="input%20data%20dosen.php">Input Data Dosen</a></th></tr>
        <tr><th><a href="data%20mahasiswa.php">Data Mahasiswa</a></th></tr>
		<tr><th><a href="input%20data%20mahasiswa.php">Input Data Mahasiswa</a></th></tr>
	    </table>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
         
    </body>
</html>