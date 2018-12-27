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
        <title>Input Data Mahasiswa</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        
       <div class="hero">
				<p>Presensi</p>
			</div>
            <div class="judul">    
            <h1>Input Data Mahasiswa</h1>
                </div>
                <div class="formdata">
                  
                    <form action="" method="POST">
                    <tr>
                        <input name="nim" type="text" placeholder="NIM">
                        </tr>
                    <tr>
                       <input name="nama" type="text" placeholder="Nama">
                        </tr>
                    <tr>
                        <input name="email" type="text" placeholder="Email">   
                    </tr>
                        
                    <tr>
                       <input name="alamat" type="text" placeholder="Alamat">   
                     </tr>
                        
                    
                    <tr>   
                        <input name="jenis_kelamin" type="text" placeholder="Jenis Kelamin"> 
                    </tr>
                    <tr>
                        <input name="agama" type="text" placeholder="Agama">   
                    </tr>
                    <tr>
                        <input name="angkatan" type="text" placeholder="Angkatan">
                    </tr>
                   
                    <tr>
                        <td> &nbsp </td> <td>&nbsp</td> <td><input type="reset" value="RESET">&nbsp<input type="submit" name="submit" value="DAFTAR"></td>
                    </tr>  
                    </form>
                     <?php
                    if(isset($_POST['submit'])){
                        $sql = "INSERT INTO data_mahasiswa (nim,nama,email,alamat,jenis_kelamin,agama,angkatan)
                        VALUES ('".$_POST['nim']."','".$_POST['nama']."','".$_POST['email']."','".$_POST['alamat']."','".$_POST['jenis_kelamin']."','".$_POST['agama']."','".$_POST['angkatan']."')";
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