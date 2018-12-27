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

$sql = 'SELECT * 
		FROM data_mahasiswa';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rekap</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>REKAP PRESENSI MAHASISWA</h1>
                </div>
            <div class="pencarian">
                <input type="text" name="" placeholder="NIM">
                
                <input type="submit">
                
            </div>
                <div class="tableisi">
					<table>
                        
                       <thead >
					<tr>
						<th class="no">No</th>
						<th>ID Matakuliah</th>
						<th>Nama Matakuliah</th>
                        <th>sks</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>
						<th>16</th>
						<th>%</th>
					</tr>
                     </thead>    
					<tr>
						<th class="no">1</th>
						<th class="nim">1157050137</th>
						<th class="nama">Rangga jenni N</th>
                        <th class="kehadiran">3</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class="kehadiran">X</th>
						<th class=""></th>
						
						
					</tr>
						
                       

					</table>
                    </div>
        <div class="menu">
        <table>
		
		<tr><th ><a href="">MENU UTAMA</a></th></tr>
		<tr><th><a href="Presensi mahasiswa.html">Presensi Mahasiswa</a></th></tr>
		<tr><th><a href="informasi%20dosen.html">Informasi Dosen</a></th></tr>
		<tr><th><a href="rakap%20Presensi%20mahasiswa.html">Rekap Absen</a></th></tr>
		<tr><th><a href="input%20data%20dosen.php">Input Data Dosen</a></th></tr>
		<tr><th><a href="input%20data%20mahasiswa.php">Input Data Mahasiswa</a></th></tr>

	
	</table>
        </div>
         <div class="logout">
            <input type="submit" name="" value="logout">
        </div>
         
    </body>
</html>