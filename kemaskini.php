<?php
require 'conn.php';
$idmakananbasah = $_GET['idmakananbasah'];
$sql = "SELECT * FROM makananbasah WHERE idmakananbasah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idmakananbasah);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemas Kini</title>
</head>

<body>
    <form action="kemaskini_simpan.php" method="post">
        <table>
            <input type="hidden" name="idmakananbasah" value="<?php echo $row->idmakananbasah; ?>" />
            <tr>
                <td><label for="namamakanan">Nama Makanan</label></td>
                <td>
                    <input id="namamakanan" type="text" name="namamakanan" value="<?php echo $row->namamakanan; ?>" required />
                </td>
            </tr>
            <tr>
                <td><label for="hargamakanan">Harga Makanan</label></td>
                <td>
                    <input id="hargamakanan" type="number" step="any" name="hargamakanan" value="<?php echo $row->hargamakanan; ?>" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>