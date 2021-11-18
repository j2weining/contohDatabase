<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Makanan</title>
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>ID Makanan Basah</th>
            <th>Nama Makanan</th>
            <th>Harga Makanan</th>
            <th>Tindakan</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM makananbasah";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->idmakananbasah; ?></td>
                    <td><?php echo $row->namamakanan; ?></td>
                    <td>RM <?php echo $row->hargamakanan; ?></td>
                    <td>
                        <a href="kemaskini.php?idmakananbasah=<?php echo $row->idmakananbasah; ?>">Edit</a>
                        |
                        <a href="padam.php?idmakananbasah=<?php echo $row->idmakananbasah; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
                
        <?php
            }
        }
        ?>
    </table>
    <a href="simpan.php?">Tambah</a>
</body>

</html>