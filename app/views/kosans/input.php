<h2>Input Kosan</h2>

<form action="<?php echo URL; ?>/kosans/save" method="post">
    <table>
        <tr>
            <td>NAMA KOSAN</td>
            <td><input type="text" name="nama_kosan" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>FASILITAS</td>
            <td><input type="text" name="fasilitas" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>