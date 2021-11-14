<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>ID Makanan</th>
            <th>Nama Makanan</th>
            <th>Harga Makanan</th>
        </tr>
    
        <?php
        $bil = 1;
        $sql = "SELECT * FROM makananbasah";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->IDMakanan; ?></td>
                    <td><?php echo $row->NamaMakanan; ?></td>
                    <td>RM <?php echo $row->HargaMakanan; ?></td>
                    <td>
                        <a href="kemaskini.php?IDMakanan=<?php echo $row->IDMakanan; ?>">Edit</a>
                        |
                        <a href="padam.php?IDMakanan=<?php echo $row->IDMakanan; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                        |
                        <a href="simpan.php?IDMakanan=<?php echo $row->IDMakanan; ?>" onclick="return confirm('Betul ke nak tambah?');">Tambah</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>