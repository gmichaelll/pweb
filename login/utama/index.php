<?php
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en" dir= "ltr" >
<head>
    <meta charset="UTF-8">
    <title> Form Register</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <form action="proces.php" method="post">
    <form action="contact"> <br>
<br>
            <h5>Universitas Gunadarma</h5> 
			<h3> Data Diri Mahasiswa Gunadarma </h3>
			<p>
				<label>Nama			:</label>
				<input type="text" name="Nama" placeholder="Nama Lengkap">
			</p>
			</p>
			<p>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Email" />
        </p>
        <p>
            <label>Umur			:</label>
            <input type="number" name = "Umur" min="10" max="90" placeholder="Umur"/>
        </p>
        <p>
            <label>Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
            <label>Npm:</label>
            <input type="text" name = "Npm" min="10" max="90" placeholder="Npm"/>
        </p>
        
            <button class="button button1" name="submit" value = <?php echo date("h:i:sa");?> >Create </button>
	</form>
    <button> <a href="readadmin.php">Lihat Hasil Data</a>
    <button> <a href="../logout.php">logout</a>

    </button>
</form>
<br>
</body>
</html>