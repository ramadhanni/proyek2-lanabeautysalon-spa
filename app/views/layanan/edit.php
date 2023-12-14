<h2>Edit Layanan</h2>

<form action="<?php echo URL; ?>/layanan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA LAYANAN</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama'] ?>" required></td>
        </tr>
        <tr>
            <td>KATEGORI LAYANAN</td>
            <td><input type="text" name="kategori" value="<?php echo $data['row']['kategori'] ?>" required></td>
        </tr>
        <tr>
            <td>HARGA LAYANAN</td>
            <td><input type="number" name="harga" value="<?php echo $data['row']['harga'] ?>" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI LAYANAN</td>
            <td><input type="text" name="desk" value="<?php echo $data['row']['desk'] ?>" required></td>
        </tr>
        <tr>
            <td>FOTO LAYANAN</td>
            <td><input type="file" name="foto" value="<?php echo $data['row']['foto'] ?>" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>