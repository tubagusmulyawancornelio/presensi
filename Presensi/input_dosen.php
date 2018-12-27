<?php
$nama=$_POST[nama];
$nip=$_POST[nip];
$email=$_POST[email];
$alamat=$_POST[alamat];
$jenis_kelamin=$_POST[jenis];
$jabatan=$_POST[jabatan];
$agama=$_POST[agama];
$DB_NAME = 'presensi';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

///input ke tabel pengunjung
$input="INSERT INTO data_dosen (nama, nip, email, alamat, agama, jabatan) VALUES ('$nama', '$nip','$email','$alamat', '$agama', '$jabatan')";

$result = $mysqli->query($input) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
echo "berhasil.";
}
else {
echo ' Silahkan ulang kembali';	
}
?>