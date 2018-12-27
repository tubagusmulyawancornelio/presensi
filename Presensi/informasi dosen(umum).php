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
		FROM informasi_dosen';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Informasi Dosen</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>Informasi Dosen</h1>
                </div>
            <div class="pencarian">
                <select>
                        <option>Tanggal</option>
                    </select>
                     <select>
                        <option>Bulan</option>
                    </select>
                     <select>
                        <option>Tahun</option>
                    </select>
                
                <input type="submit">
                
            </div>
                <div class="tableisi">
					<table>
                        
                       <thead >
					<tr>
						<th class="no">No</th>
						<th class="nim">ID Matakuliah</th>
						<th class="no">Nama Matakuliah</th>
                        <th class="no">SKS</th>
						<th class="jam">Jam</th>
						<th class="nama">Nama Dosen</th>
						<th class="jam">keterangan</th>
						
					</tr>
                           
                     </thead> 
                        <tbody class="tabledata">
                        <?php
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo "<td>".$row['no']."</td>";
                            echo "<td>".$row['id_matakuliah']."</td>";
                            echo "<td>".$row['nama_matakuliah']."</td>";
                            echo "<td>".$row['sks']."</td>";
                           
                            echo "<td>".$row['jam']."</td>"; 
                            echo "<td>".$row['nama_dosen']."</td>";   
                            echo "<td>".$row['keterangan']."</td>"; 
                            echo "</tr>";
                        }
                            ?>
					
                       </tbody>

					</table>
                    </div>
      
       
         <div class="umum">
           <p></p>
        </div>
         
    </body>
</html>