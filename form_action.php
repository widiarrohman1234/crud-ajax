<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$tanggal_masuk = $_POST['tanggal_masuk'];

if ($id == "") {
	$query = mysqli_query($db1,"INSERT INTO `tbl_mahasiswa` (`id`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `tgl_masuk`, `jurusan`) VALUES (NULL, '$nama_mahasiswa', '$alamat', '$jenkel', '$tanggal_masuk', '$jurusan')");
} else {
	$query = mysqli_query($db1,"UPDATE `tbl_mahasiswa` SET `nama_mahasiswa` = '$nama_mahasiswa', `alamat` = '$alamat', `jenis_kelamin` = '$jenkel', `tgl_masuk` = '$tanggal_masuk', `jurusan` = '$jurusan' WHERE `tbl_mahasiswa`.`id` = '$id';");
}

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>