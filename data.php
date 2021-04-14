<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama Mahasiswa</td>
            <td>Alamat</td>
            <td>Jurusan</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Masuk</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($db1,"SELECT * FROM tbl_mahasiswa ORDER BY id DESC");
            while($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_mahasiswa']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td><?php echo $row['tgl_masuk']; ?></td>
                <td>
                    <button id="<?php echo $row['id']; ?>" class="btn btn-success btn-sm edit_data"> <i class="fa fa-edit"></i> Edit </button>
                    <button id="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash" onclick="return confirmDelete();"></i> Hapus </button>
                </td>
            </tr>
        <?php } ?> 
    </tbody>
</table>


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>