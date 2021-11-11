<?php
require 'conn.php';

$idmakanan = $_GET['IDMakanan'];

$sql = "DELETE FROM IDMakanan WHERE IDMakanan = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $idmakanan);
$stmt->execute();

header('location: index.php')
;