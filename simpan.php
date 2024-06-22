<?php
    include "index.php";
    if(isset($_POST["submit"])){
        $affect_row = $db->simpan($_POST["nama"],$_POST["alamat"],$_POST["usia"]);
        if($affect_row > 0){
            echo "Berhasil ditambahkan";
        }
    }else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <h2>Form simpan data</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="alamat" id="alamat" name="alamat"><br><br>

        <label for="usia">Usia:</label>
        <input type="usia" id="usia" name="usia"><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php } ?>
<a href="tampil.php"><p>Kembali ke layar tampil</p></a>