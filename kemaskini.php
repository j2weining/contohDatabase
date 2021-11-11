<?php
    $IDMakanan = $_GET['IDMakanan'];
    $sql = "SELECT * FROM makananbasah WHERE IDMakanan = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $IDMakanan);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    ?>
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="IDMakanan" value="<?php echo $row->IDMakanan; ?>"/>
        <table>
            <tr>
                <td><label for="idmakanan">ID Makanan</label></td>
                <td>
                    <input id="idmakanan" type="number" step="any" name="idmakanan"
                           value="<?php echo $row->IDMakanan; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="nama">Nama Makanan</label></td>
                <td>
                    <input id="nama" type="text" name="nama"
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