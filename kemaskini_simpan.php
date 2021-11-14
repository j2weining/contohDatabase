<?php
require 'conn.php';

$IDMakanan = $_POST['IDMakanan'];
$NamaMakanan = $_POST['NamaMakanan'];
$HargaMakanan = $_POST['HargaMakanan'];

$sql = "UPDATE makananbasah SET IDMakanan = ?, NamaMakanan = ?, HargaMakanan = ? WHERE bill = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sdi',  $IDMakanan,$NamaMakanan, $HargaMakanan);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}