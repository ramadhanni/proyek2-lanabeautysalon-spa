<h2>Edit Perusahaan</h2>

<form action="<?php echo URL; ?>/setting/update/<?php echo isset($data['row']['id_perusahaan']); ?>" method="post">
    <table>
    <input type="hidden" name="id_perusahaan" value="<?php echo ($data['row']['id_perusahaan']) ? $data['row']['id_perusahaan']: '' ;?>">

        <tr>
            <td>NAMA PERUSAHAAN</td>
            <td><input type="text" name="nama_perusahaan" value="<?php echo $data['row']['nama_perusahaan']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>PEMIMPIN PERUSAHAAN</td>
            <td><input type="text" name="pemimpin_perusahaan" value="<?php echo $data['row']['pemimpin_perusahaan']; ?>" required></td>
        </tr>
        <tr>
            <td>JUMLAH KARYAWAN</td>
            <td><input type="text" name="jumlah_karyawan" value="<?php echo $data['row']['jumlah_karyawan']; ?>" required></td>
        </tr>
        <tr>
            <td>KATEGORI PERUSAHAAN</td>
            <td><input type="text" name="kategori_perusahaan" value="<?php echo $data['row']['kategori_perusahaan']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>