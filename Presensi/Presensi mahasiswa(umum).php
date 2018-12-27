<?php

session_start();

if(!isset($_SESSION['loggedIn'])){
    header("location: indexPresensi.php");
}

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
        <title>Presensi mahasiswa</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>PRESENSI MAHASISWA</h1>
                </div>
            
                
        
                <div class="tableisi">
					<table>
                        
                       <thead >
					<tr>
						<th class="no">No</th>
						<th class="nim">NIM</th>
						<th class="nama">Nama</th>
						<th class="kehadiran">1</th>
						<th class="kehadiran">2</th>
						<th class="kehadiran">3</th>
						<th class="kehadiran">4</th>
						<th class="kehadiran">5</th>
						<th class="kehadiran">6</th>
						<th class="kehadiran">7</th>
						<th class="kehadiran">8</th>
						<th class="kehadiran">9</th>
						<th class="kehadiran">10</th>
						<th class="kehadiran">11</th>
						<th class="kehadiran">12</th>
						<th class="kehadiran">13</th>
						<th class="kehadiran">14</th>
						<th class="kehadiran">15</th>
						<th class="kehadiran">16</th>
						<th class="no">%</th>
					</tr>
                     </thead>  
                        <tbody>
                         <?php
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo "<td>".$row['no']."</td>";
                            echo "<td>".$row['nim']."</td>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['1']."</td>";
                            echo "<td>".$row['2']."</td>"; 
                            echo "<td>".$row['3']."</td>";   
                            echo "<td>".$row['4']."</td>"; 
                            echo "<td>".$row['5']."</td>"; 
                            echo "<td>".$row['6']."</td>"; 
                            echo "<td>".$row['7']."</td>"; 
                            echo "<td>".$row['8']."</td>"; 
                            echo "<td>".$row['9']."</td>"; 
                            echo "<td>".$row['10']."</td>"; 
                            echo "<td>".$row['11']."</td>"; 
                            echo "<td>".$row['12']."</td>"; 
                            echo "<td>".$row['13']."</td>"; 
                            echo "<td>".$row['14']."</td>"; 
                            echo "<td>".$row['15']."</td>"; 
                            echo "<td>".$row['16']."</td>"; 
                            echo "<td>".$row['persentase']."</td>"; 
                            echo "</tr>";
                        }
                            ?>
                        
					
                            </tbody>
						

					</table>
                    </div>
        <div class="menu">
    <table>
		<tr><th ><a href="">MENU UTAMA</a></th></tr>
		<tr><th><a href="Presensi%20mahasiswa.php">Presensi Mahasiswa</a></th></tr>
		<tr><th><a href="informasi%20dosen.php">Informasi Dosen</a></th></tr>

	    </table>
        </div>
         
         
    </body>
</html>