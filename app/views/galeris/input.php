<h2>Input Galeri</h2>

<form action="<?php echo URL; ?>/galeris/save" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul_kegiatan" required></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" encry required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>