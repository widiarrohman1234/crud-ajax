<?php
include 'koneksi.php';

$id = $_POST['id'];
$query = mysqli_query($db1,"SELECT * FROM tbl_mahasiswa WHERE id='$id' ORDER BY id DESC");
while ($row = mysqli_fetch_array($query)) {
    $h['id'] = $row["id"];
    $h['nama_mahasiswa'] = $row["nama_mahasiswa"];
    $h['alamat'] = $row["alamat"];
    $h['jurusan'] = $row["jurusan"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['tgl_masuk'] = $row["tgl_masuk"];
}
echo json_encode($h);
?>