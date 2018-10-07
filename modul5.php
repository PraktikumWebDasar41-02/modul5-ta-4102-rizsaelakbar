<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = new mysqli("localhost", "root", "", "d_modul5");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<form method="post" action="">
<input type="text" name="nama" placeholder="Nama">
<br>
<input type="text" name="nim" placeholder="NIM">
<br>
<input type="text" name="email" placeholder="email">
<br>
Masukkan Tanggal Lahir
<input type="date" name="tgl">
<br>
Jenis Kelamin : <br>
<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
<input type="radio" name="jk" value="Perempuan"> Perempuan<br>
<input type="radio" name="jk" value="null" checked hidden><br>
Masukkan Program Studi
<select name="prodi">
  <option value="null">Pilih..</option>
  <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
  <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
  <option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
  <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
</select>
<br>
Masukkan Fakultas
<select name="fakultas">
  <option value="null">Pilih..</option>
  <option value="FIT">FIT</option>
  <option value="FEB">FEB</option>
  <option value="FKB">FKB</option>
  <option value="FIK">FIK</option>
</select>
<br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$tgl = $_POST['tgl'];

if (strlen($nama)>=20) {
	echo "<br>";
	$nama_err = "f";
	echo "Nama Maksimal 20 Karakter";
}else{
	$nama_err = "t";
}
if (is_numeric($nama)) {
	echo "<br>";
	$nama2_err = "f";
	echo "Nama tidak boleh ada ANGKA !";
}else{
	$nama2_err = "t";
}

if (!is_numeric($nim)) {
	echo "<br>";
	$nim_err = "f";
	echo "NIM Harus Angka";
}else{
	$nim_err = "t";
}
if ($prodi == 'null') {
	echo "<br>";
	$prodi_err = "f";
	echo "Isilah Program Studi";
}else{
	$prodi_err = "t";
}
if ($fakultas == 'null') {
	echo "<br>";
	$fak_err = "f";
	echo "Isilah Fakultas";
}else{
	$fak_err = "t";
}
if ($jk == 'null') {
	echo "<br>";
	$jk_err = "f";
	echo "Isilah Jenis Kelamin";
}else{
	$jk_err = "t";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "<br>";
	$email_err = "t";
} else {
	$email_err = "f";
	echo "<br>";
  echo("$email is not a valid email address");
}


if ($nama_err == "t" && $nim_err == "t" && $email_err == "t" && $nama2_err == "t" && $prodi_err == "t" && $fak_err == "t" && $jk_err == "t") {
	session_start();
	$_SESSION['namanya'] = $nama;
	$_SESSION['nimnya'] = $nim;
	$sql = "INSERT INTO t_jurnal1 (nama, nim, email, jeniskelamin, prodi, fakultas, tgl)
VALUES ('$nama', '$nim', '$email', '$jk', '$prodi', '$fakultas', '$tgl')";



if ($conn->query($sql) === TRUE) {
	echo "<br>";
    echo "New record created successfully";
    header("Location: next.php");
} else {
	echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{
  echo "<script>
alert('Login Gagal');
  </script>";
	echo "<br>";
	echo "GAGAL";
}


$conn->close();
}
?>
