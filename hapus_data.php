<?php
include 'koneksi.php';

$id = $_POST['id'];

$query = mysqli_query($db1,"DELETE FROM `tbl_mahasiswa` WHERE `tbl_mahasiswa`.`id` = '$id'");

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>