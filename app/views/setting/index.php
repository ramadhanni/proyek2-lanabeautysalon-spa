<h2>Setting Perusahaan</h2>

<a href="<?php echo URL; ?>/setting/input" class="btn">Input Perusahaan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA PERUSAHAAN</th>
            <th>ALAMAT</th>
            <th>PEMIMPIN PERUSAHAAN</th>
            <th>JUMLAH KARYAWAN</th>
            <th>KATEGORI PERUSAHAAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_perusahaan']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['pemimpin_perusahaan']; ?></td>
                  <td><?php echo $row['jumlah_karyawan']; ?></td>
                  <td><?php echo $row['kategori_perusahaan'];?></td>
                  <td><a href="<?php echo URL; ?>/setting/edit/<?php echo $row['id_perusahaan']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/setting/delete/<?php echo $row['id_perusahaan']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>