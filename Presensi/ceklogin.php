<?php
$username= $_POST['username'];
$password=$_POST['password'];
$DB_NAME = 'login';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM login WHERE username='$username' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
echo "anda berhasil login.";
}
else {
echo 'username/password yang anda masukkan salah. Silahkan ulang kembali';	
}
?>