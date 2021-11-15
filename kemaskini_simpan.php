<?php
require 'conn.php';

$namamakanan = $_POST['namamakanan'];
$hargamakanan = $_POST['hargamakanan'];

$sql = "UPDATE makananbasah SET namamakanan = ?, hargamakanan = ? WHERE idmakananbasah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sdi', $namamakanan, $hargamakanan);
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