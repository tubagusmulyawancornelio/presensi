<?php
session_start();

if(!isset($_SESSION['loggedIn'])){
    header("location: indexPresensi.php");
}

    include "konek.php";
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Input Informasi Dosen</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>Input Informasi Dosen</h1>
                </div>
                <div class="formdata">
                  
                    <form action="" method="POST">
                    <tr>
                        <input name="id_matakuliah" type="text" placeholder="ID matakuliah">
                        </tr>
                    <tr>
                       <input name="nama_matakuliah" type="text" placeholder="Nama matakuliah">
                        </tr>
                    <tr>
                        <input name="sks" type="text" placeholder="SKS">   
                    </tr>
                        
                    <tr>
                       <input name="jam" type="text" placeholder="Waktu">   
                     </tr>
                         <tr>
                       <input name="nama_dosen" type="text" placeholder="Nama Dosen">   
                     </tr>
                         <tr>
                       <input name="keterangan" type="text" placeholder="Keterangan">   
                     </tr>
                        
                   
                   
                    <tr>
                        <td> &nbsp </td> <td>&nbsp</td> <td><input type="reset" value="RESET">&nbsp<input type="submit" name="submit" value="INPUT"></td>
                    </tr>  
                    </form>
                     <?php
                    if(isset($_POST['submit'])){
                        $sql = "INSERT INTO informasi_dosen ( 	id_matakuliah ,nama_matakuliah,sks ,jam,nama_dosen, 	keterangan)
                        VALUES ('".$_POST['id_matakuliah']."','".$_POST['nama_matakuliah']."','".$_POST['sks']."','".$_POST['jam']."','".$_POST['nama_dosen']."','".$_POST['keterangan']."')";
                        if(mysqli_query($conn,$sql)){
                            echo "Data Berhasil Disimpan";
                        }else{
                            echo "Data Gagal Disimpan";
                        }
                    }
                ?>
                    
                    
					
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