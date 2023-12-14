<h2>Galeris</h2>

<a href="<?php echo URL; ?>/galeris/input" class="btn">Input Galeri</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA Kegiatan</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>EDIT</th>
            <th>delete</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['judul_kegiatan']; ?></td>
                  <td><img src="<?php echo $row['foto']; ?>" alt="Galeri Image" /></td>
                  <td><?php echo $row['deskripsi']; ?></td>
                  <td><a href="<?php echo URL; ?>/galeris/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/galeris/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>