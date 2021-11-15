<?php
require 'conn.php';

$namamakanan = $_POST['namamakanan'];
$hargamakanan = $_POST['hargamakanan'];


$sql = "INSERT INTO makananbasah (namamakanan, hargamakanan) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sd',$namamakanan, $hargamakanan);
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