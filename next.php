<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "d_modul5");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<form method="post" action="next.php">
Nama : <?php session_start();
	echo $_SESSION['namanya'];?>
	<br>
<input type="textarea" name="komentar"placeholder="Komentar">
<br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
$komentar = $_POST['komentar'];
if (str_word_count($komentar)<5) {
	echo "<br>";
	$komentar_err = "f";
	echo "Komentar Minimal 5 Kata";
}else{
	$komentar_err = "t";
}
if ($komentar_err == "t") {
	$nimnye = $_SESSION['nimnya'];
	$sql = "UPDATE t_jurnal1 SET komentar='$komentar' WHERE nim='$nimnye'";

if ($conn->query($sql) === TRUE) {
	echo "<br>";
    echo "New record created successfully";
    header("Location: final.php");
} else {
	echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{
	echo "<br>";
	echo "GAGAL";
}


$conn->close();
}
?>