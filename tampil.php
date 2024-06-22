<?php include 'index.php'; 

$ambil = $db->tampil();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="simpan.php"><p>Tambah</p></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Opsi</th>
        </tr>
        <?php foreach($ambil as $key => $value) {?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $value["nama"] ?></td>
            <td><?= $value["alamat"] ?></td>
            <td><?= $value["usia"]?></td>
            <td><a href="hapus.php?id=<?= $value["id"] ?>">Hapus</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>

