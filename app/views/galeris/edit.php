<h2>Edit Galeri</h2>

<form action="<?php echo URL; ?>/galeris/update" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul_kegiatan" value="<?php echo $data['row']['judul_kegiatan']; ?>" required></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" value="<?php echo $data['row']['foto']; ?>" required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" value="<?php echo $data['row']['deskripsi']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="UPDATE"></td>
        </tr>
    </table>
</form>