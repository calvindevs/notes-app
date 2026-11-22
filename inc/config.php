<?php
$host = 'sql207.infinityfree.com';
$user = 'if0_43505730';
$pass = 'QetuDifUSO';
$db_name = 'if0_43505730_notes';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die('Koneksi database gagal');
}
?>