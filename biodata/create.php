<?php
header('Content-Type: application/json');
include "konekdb.php";

$nis = $_POST['nis'];
$nama = $_POST ['nama'];
$tplahir =$_POST ['tplahir'];
$tglahir = $_POST ['tglahir'];
$kelamin = $_POST ['kelamin'];
$agama = $_POST ['agama'];
$alamat = $_POST ['alamat'];

$stmt = $db->prepare("INSERT INTO isi (nis, nama, tplahir, tglahir, kelamin, agama, alamat)
                        VALUES  (?,?,?,?,?,?,?)");
$result = $stmt->execute([$nis, $nama, $tplahir, $tglahir, $kelamin, $agama, $alamat]);

echo json_encode([
'succes'=> $result 
]);
?>