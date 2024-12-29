<?php
$hostname = "localhost";
$database = "db_program_nilai";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname, $username, $password, $database);


if (!$connect) {
    die("koneksi gagal");
} else {
    echo "";
}
mysqli_select_db($connect, $database);

?>