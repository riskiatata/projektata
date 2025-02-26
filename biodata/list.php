<?php
header('Content_Type: application/json');
include "konekdb.php";

$stmt = $db_>prepare("SELECT id, nis,nama,tplahir,tglahir,kelamin,agama,alamat FROM isi");
$stmt_>execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>