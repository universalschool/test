
<?php
$host = "https://universalschool.github.io/test/google_login.html"; //nama host
$user = "root"; //username database
$password = ""; //password database
$database = "belajar1

"; //nama database
// koneksi data base
$conn = mysqli_connect($host, $user, $password, $database);
if ($conn)
echo "terhubung";
$sql= "insert into belajar1(email,password) value ('none', 'none1')"
$query= mysqli_query($conn, $sql);
if($query)
echo "dimasukan"
?>