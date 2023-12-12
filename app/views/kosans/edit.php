<h2>Edit Kosan</h2>

<form action="<?php echo URL; ?>/kosans/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['kosan_id']; ?>">
<table>
        <tr>
            <td>NAMA KOSAN</td>
            <td><input type="text" name="nama_kosan" value="<?php echo $data['row']['nama_kosan']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>FASILITAS</td>
            <td><input type="text" name="fasilitas" value="<?php echo $data['row']['fasilitas']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>