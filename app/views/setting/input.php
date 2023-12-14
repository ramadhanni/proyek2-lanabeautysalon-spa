<h2>Input Perusahaan</h2>

<form action="<?php echo URL; ?>/setting/save" method="post">
    <table>
    <input type="hidden" name="id_perusahaan" value="">

        <tr>
            <td>Nama Perusahaan</td>
            <td><input type="text" name="nama_perusahaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Pemimpin Perusahaan</td>
            <td><input type="text" name="pemimpin_perusahaan"></td>
        </tr>
        <tr>
            <td>Jumlah Karyawan</td>
            <td><input type="text" name="jumlah_karyawan"></td>
        </tr>
        <tr>
            <td>Kategori Perusahaan</td>
            <td><input type="text" name="kategori_perusahaan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>