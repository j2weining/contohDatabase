<?php
require 'conn.php';

$IDMakanan = $_GET['IDMakanan'];

$sql = "DELETE FROM makananbasah WHERE IDMakanan = ?";
$stmt = $test->prepare($sql);
$stmt->bind_param('i', $IDMakanan);
$stmt->execute();

header('location: index.php');