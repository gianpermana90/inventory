<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_praktikum");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td><a><i class='menu-icon icon-edit'></i></a> $r[periode]</td>
            <td>$r[semester]</td>
            <td>$r[nama_praktikum]</td>
            <td>$r[kelas]</td>
            <td>$r[waktu]</td>
            <td>$r[asisten]</td>
            <td><a href='admin/delete_jadwal_praktikum.php?kode=$r[id]'>Hapus</a></td>
        </tr>";
}
?>

