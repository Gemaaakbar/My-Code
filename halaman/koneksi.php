<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'db_pc';

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn){
    die("<script>alert('Gagal Tersambung Dengan Database.')</script>");
}
?>