<html>
<header></header>

<body>
    <h1>Tambah Kartu Rencana Prestasi</h1>

<form method="post" enctype="multipart/form-data">
<table>
    <tr><td>KRPM</td></tr>
    <tr><td><input type="text" name="krpm"></td></tr>
    <tr><td>Kode</td></tr>
    <tr><td><input type="text" name="kode"></td></tr>
    <tr><td>Nama Kegiatan</td></tr>
    <tr><td><input type="text" name="keg"></td></tr>
    <tr>
        <td>Lingkup</td>
        <td>Tanggal Mulai</td>
        <td>Tanggal Selesai</td>
    </tr>
    <tr>
        <td><input type="text" name="lingk"></td>
        <td><input type="date" name="tglm"></td>
        <td><input type="date" name="tgls"></td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>Upload Dokumen</td>
    </tr>
    <tr>
        <td><input type="text" name="nilai"></td>
        <td><input type="file" name="dok"></td>
    </tr>
    <tr><td>Keterangan</td></tr>
    <tr><td><input type="text" name="ket"></td></tr>
</table>
<input type="submit" name="submit" id="submit" value="Tambah KRP">
</form>


<?php
include('../session.php');
if (isset($_POST['submit'])) { 
	$krpm = $_POST['krpm'];
	$kode = $_POST['kode'];
	$keg = $_POST['keg'];
	$lingk = $_POST['lingk'];
	$tglm=$_POST['tglm'];
    $tgls=$_POST['tgls'];
	$nilai=$_POST['nilai'];
	$ket=$_POST['ket'];
	$dok = $_FILES['dok']['name'];
	$dok_tmp = $_FILES['dok']['tmp_name'];
	$lokasi= "upload/$dok";
	
if(empty($krpm) or empty($kode) or empty($keg) or empty($lingk) or empty($tglm) or empty($tgls) or empty($nilai) or empty($dok) or empty($ket)) {
echo "<script>alert('Harus diisi semua!');</script>";
}
else{
	move_uploaded_file($dok_tmp, $lokasi);
    
//    if (!$connection) {
//    die("Connection failed: " . mysqli_connect_error());
//}
$apa = "INSERT INTO kegiatan (npm, krpm, kode, nama_kegiatan, lingkup, tgl_mulai, tgl_selesai, nilai, keterangan, dokumen) VALUES ($user_check, $krpm, '$kode', '$keg', '$lingk', '$tglm', '$tgls', $nilai, '$ket', '$dok')";

//if (mysqli_query($connection, $apa)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $apa . "<br>" . mysqli_error($connection);
//}
//
//mysqli_close($connection);
header('Location: profile.php');
exit();
}
}

?>
</body>

    
<footer></footer>
</html>