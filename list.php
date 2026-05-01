<?php
// ❌ HAPUS include controller di sini
// karena sudah dipanggil dari index.php

$data = $controller->model->getAll();
?>

<h2>Data Mahasiswa</h2>

<a href="views/tambah.php">Tambah Data</a>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>

<?php 
$no = 1;
while($row = $data->fetch_assoc()){ 
?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['NAMA'] ?></td>
    <td><?= $row['JURUSAN'] ?></td>
    <td>
        <a href="views/edit.php?id=<?= $row['ID'] ?>">Edit</a> |
        <a href="index.php?hapus=<?= $row['ID'] ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>