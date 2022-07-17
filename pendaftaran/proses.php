<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nom = $_POST['nom'];
$mtk = $_POST['mtk'];
$komentar = $_POST['komentar'];

echo "<head><title>PENDAFTARAN SISWA </title></head>";
$fp = fopen("listdaftar.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$nom|$mtk|$komentar\n");
fclose($fp);

header("location: setelah proses.php")

?>



