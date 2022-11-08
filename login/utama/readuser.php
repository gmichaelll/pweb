<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

$koneksi = mysqli_connect("localhost", "root", "", "register");
$statistik = query("SELECT *FROM registrasi");

function query ($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
     $rows[] = $row;   
    }
    return $rows;
}

?>

<!DOCTYPE html>
<html lang="en" dir = "ltr">
<head>
    <meta charset="UTF-8">
    <title>Kumpulan Data</title>
    <link rel="stylesheet" href="../../css/read.css">
</head>
<body>
    <center>
    <table border = 1 cellpadding = 10 cellspacing = 0>
        <br>
			<p> Hasil Data </p>
        <tr>
			<th> No </th>
			<th> Nama </th>
			<th> Email </th>
         <th> Umur </th>
         <th>Jenis kelamin </th>
			<th> Agama </th>
			<th> Npm </th>
         <th> Waktu </th>
        </tr>
        <?php  $y = 1; ?>
        <?php foreach($statistik as $data):?>
		<tr>
			<td><?php echo $y;?></td>
			<td><?php echo $data["Nama"];?></td>
			<td><?php echo $data["Email"];?></td>
            <td><?php echo $data["Umur"];?></td>
			<td><?php echo $data["Jenis_kelamin"];?></td>
			<td><?php echo $data["Agama"];?></td>
            <td><?php echo $data["npm"];?></td>
            <td><?php echo $data["submit"];?></td>
		</tr>
        <?php $y++;?>
        <?php endforeach; ?>
	</table>
    <p> Total Data = <?php echo ($y - 1); ?></p>
    <br>
    <div class="container">

   <div class="content">
      <h3>Hi, <span>User</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <br>
      <br>
      <a href="../logout.php" class="btn">logout</a>
   </div>

</body>
</html>