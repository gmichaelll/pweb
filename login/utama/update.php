<?php
date_default_timezone_set("Asia/Jakarta");
?>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "register");
$id = $_GET['id'];
$data = query("SELECT * FROM registrasi WHERE id = $id")[0];

function query($data){

    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
     $rows[] = $row;   
    }
    return $rows;

} 

if (isset($_POST["submit"])){
    if (ubah($_POST) > 0 ){
        echo "<script> alert('Data Berhasil diubah'); </script>";
        header('Location: read.php');
    }
    else
    echo "<script> alert('Data gagal diubah'); </script>";
    header('Location: read.php');
}

function ubah($sambung){
    global $koneksi;

    $id = $sambung['id'];
    $Nama = $sambung['Nama'];
    $Email = $sambung['Email'];
    $Umur = $sambung['Umur'];
    $Jenis_kelamin = $sambung['jenis_kelamin'];
    $Agama = $sambung['agama'];
    $npm = $sambung['Npm'];
    $submit = $sambung['submit'];

    $query = "UPDATE registrasi SET Nama = '$Nama', Email = '$Email', Umur = '$Umur', jenis_kelamin = '$Jenis_kelamin', Agama = '$Agama', Npm = '$npm', submit = '$submit' WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>
<!DOCTYPE html>
<html lang="en" dir= "ltr" >
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../../css/update.css">
</head>
<body>
    <form action=" " method="post">
        <input type="hidden" name= "id" value="<?php echo $data["id"];?>">
    <form action="contact">
		<fieldset>
			<h3> Ubah Data </h3>
			<p>
				<label>Nama			:</label>
				<input type="text" name="Nama" placeholder="Nama Lengkap" value="<?php echo $data['Nama']; ?>"><br>
			</p>
			</p>
			<p>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Email" value="<?php echo $data['Email']; ?>"/>
        </p>
        <p>
            <label>Umur			:</label>
            <input type="number" name = "Umur" min="10" max="90" placeholder="Umur" value="<?php echo $data['Umur']; ?>"/>
        </p>
        <p>
            <label>Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($data["Jenis_kelamin"] == 'laki-laki') echo 'checked'; ?>> Laki-laki </label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($data["Jenis_kelamin"] == 'perempuan') echo 'checked'; ?>> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam" <?php if ($data["Agama"] == 'islam') echo 'selected'; ?>>Islam</option>
                <option value="kristen" <?php if ($data["Agama"] == 'kristen') echo 'selected'; ?> >Kristen</option>
                <option value="hindu" <?php if ($data["Agama"] == 'hindu') echo 'selected'; ?> >Hindu</option>
                <option value="budha" <?php if ($data["Agama"] == 'budha') echo 'selected'; ?> >Budha</option>
            </select>
        </p>
        <p>
            <label>Npm :</label>
            <input type="text" name = "Npm" min="10" max="90" placeholder="Npm" value="<?php echo $data['npm']; ?>"/>
        </p>
        
            <button class="button button2" type="submit" name="submit" value = <?php echo date("h:i:sa");?> >Update </button>
            <a href="read.php">
                back
            </a>
		</fieldset>
	</form>
</form>
<br>
</body>
</html>