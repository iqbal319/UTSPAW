<?php 
require "function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
    <h1>Tampil data</h1>
    <a href="tambah_form.php">Tambah</a>
    <table class="table table-striped" >
        <thead>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>action</th>
        </thead>
        <tbody>
            <?php 
            $no=1; 
            foreach(getData() as $data): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data["id_iqbal"]; ?></td>
                <td><?= $data["nama_iqbal"]; ?></td>
                <td><?= $data["email_iqbal"]; ?></td>
                <td><?= $data["alamat_iqbal"]; ?></td>
                <td>
                    <a href="edit_form.php?id=<?= $data["id_iqbal"] ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $data["id_iqbal"] ?>">Hapus</a>

                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>