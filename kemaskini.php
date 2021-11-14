<?php
    require 'conn.php';
    $IDMakanan = $_GET['IDMakanan'];
    $sql = "SELECT * FROM makananbasah WHERE IDMakanan = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $IDMakanan);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
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
        <!--<input type="hidden" name="makanan" value="<?php echo $row->id; ?>"/>-->
        <table>
            <tr>
                <td><label for="idmakanan">ID Makanan</label></td>
                <td>
                    <input id="idmakanan" type="text" step="any" name="idmakanan"
                           value="<?php echo $row->IDMakanan; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="NamaMakanan">Nama Makanan</label></td>
                <td>
                    <input id="NamaMakanan" type="text" name="NamaMakanan"
                           value="<?php echo $row->NamaMakanan; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga Makanan</label></td>
                <td>
                    <input id="harga" type="number" step="any" name="harga"
                           value="<?php echo $row->HargaMakanan; ?>" required/>
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