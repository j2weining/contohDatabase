<?php
require 'conn.php';

$namamakanan = $_POST['nama'];
$hargamakanan = $_POST['harga'];


$sql = "INSERT INTO makanan (nama, harga) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sd', $idmakanan, $namamakanan, $hargamakanan);
$stmt->execute();

if ($mysqli->error) {
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