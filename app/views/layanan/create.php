<h2>Input Layanan</h2>

<form action="<?php echo URL; ?>/layanan/save" method="post">
    <table>
        <tr>
            <td>NAMA LAYANAN</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>KATEGORI LAYANAN</td>
            <td><input type="text" name="kategori" required></td>
        </tr>
        <tr>
            <td>HARGA LAYANAN</td>
            <td><input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI LAYANAN</td>
            <td><input type="text" name="desk" required></td>
        </tr>
        <tr>
            <td>FOTO LAYANAN</td>
            <td><input type="file" name="foto" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>