<h2>Kosans</h2>

<a href="<?php echo URL; ?>/kosans/input" class="btn">Input Kosan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA KOSAN</th>
            <th>ALAMAT</th>
            <th>FASILITAS</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['kosan_id']; ?></td>
                  <td><?php echo $row['nama_kosan']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['fasilitas']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/kosans/edit/<?php echo $row['kosan_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kosans/delete/<?php echo $row['kosan_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>