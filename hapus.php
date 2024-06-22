<?php
    include "index.php";
$id = $_GET["id"];

$db->hapus($id);

header("Location: tampil.php");
exit;