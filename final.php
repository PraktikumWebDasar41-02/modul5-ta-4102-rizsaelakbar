<?php
$conn = new mysqli("localhost", "root", "", "d_modul5");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$nimnye = $_SESSION['nimnya'];
$result = mysqli_query($conn, "SELECT * FROM t_jurnal1 WHERE nim = '$nimnye'");
$row = mysqli_fetch_array($result);
echo "Nama : ";
printf("%s",$row['nama']);
echo "<br>";
echo "Tanggal Lahir : ";
printf("%s",$row['tgl']);
echo "<br>";
echo "Jenis Kelamin : ";
printf("%s",$row['jeniskelamin']);
echo "<br>";
echo "Program Studi : ";
printf("%s",$row['prodi']);
echo "<br>";
echo "Fakultas : ";
printf("%s",$row['fakultas']);
echo "<br>";
echo "Komentar : ";
printf("%s",$row['komentar']);
$komen = $row['komentar'];
$hit = str_word_count($komen);
echo "<br>";
echo "Jumlah Kata : ";
echo $hit;
echo "<br>";
?>
<a href="modul5.php">Home</a>
