<h2>Layanan</h2>

<a href="<?php echo URL; ?>/layanan/create" class="btn">Input Layanan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>KATEGORI</th>
                  <th>HARGA</th>
                  <th>DESKRIPSI</th>
                  <th>FOTO</th>
                  <th>OPSI</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td><?php echo $row['harga']; ?></td>
                        <td><?php echo $row['desk']; ?></td>
                        <td><?php echo $row['foto']; ?></td>
                        <td>
                            <a href="<?php echo URL; ?>/layanan/edit/<?php echo $row['id']; ?>" class="btn">Edit</a>
                            <a href="<?php echo URL; ?>/layanan/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('yakin?')">Hapus</a>
                        </td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>