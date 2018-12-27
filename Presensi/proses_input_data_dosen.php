<html><head><title>proses data dari form</title></head>
<body>
<h1>proses input data dosen</h1>
<?php
///membuat koneksi ke database
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="presensi"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST[nama];
$nip=$_POST[nip];
$email=$_POST[email];
$alamat=$_POST[alamat];
$jenis_kelamin=$_POST[jenis];
$jabatan=$_POST[jabatan];
$agama=$_POST[agama];


///input ke tabel pengunjung
$input=mysql_query('INSERT INTO data_dosen (nama, nip, email, alamat, agama, jabatan) VALUES ('$nama', '$nip','$email','$alamat', '$agama', '$jabatan')');
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo "Buku tamu berhasil disimpan";
}
else ///jika gagal
{
echo "Buku tamu gagal disimpan";
}
?>
| <a href="data dosen.php">OK</a>
</body></html>