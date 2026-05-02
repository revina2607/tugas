<?php
$data = $controller->model->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .btn-tambah {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn-tambah:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background: #007bff;
            color: white;
            padding: 12px;
            text-align: center;
        }

        table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table tr:hover {
            background: #f8f9fa;
        }

        .btn-edit {
            color: white;
            background: #ffc107;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-hapus {
            color: white;
            background: #dc3545;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-edit:hover {
            background: #e0a800;
        }

        .btn-hapus:hover {
            background: #c82333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <a href="views/tambah.php" class="btn-tambah">+ Tambah Data</a>

    <table>
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
                <a href="views/edit.php?id=<?= $row['ID'] ?>" class="btn-edit">Edit</a>
                <a href="index.php?hapus=<?= $row['ID'] ?>" class="btn-hapus">Hapus</a>
            </td>
        </tr>

        <?php } ?>
    </table>
</div>

</body>
</html>