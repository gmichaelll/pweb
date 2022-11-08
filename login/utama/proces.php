<?php

//$koneksi = mysqli_connect("localhost", "root", "", "register"); //koneksi ke db localhost
$koneksi = mysqli_connect('localhost','root','root','register', 8889); //set sesuai localhost

$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Umur = $_POST['Umur'];
$Jenis_kelamin = $_POST['jenis_kelamin'];
$Agama = $_POST['agama'];
$npm = $_POST['Npm'];
$submit = $_POST['submit'];

$query = "INSERT INTO registrasi VALUES('$Nama','$Email','$Umur','$Jenis_kelamin','$Agama','$npm','$submit', '')";

mysqli_query($koneksi, $query);

if (isset($_POST["submit"])){
    header('Location: readadmin.php');
    exit;
}
?>