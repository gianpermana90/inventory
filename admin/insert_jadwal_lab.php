<?php
$waktu = $_POST[awal] . "-" . $_POST[akhir] . " " . $_POST[hari];
include "../koneksi.php";
mysql_query("INSERT INTO jadwal_lab
(no_ruang,kegiatan,waktu,penanggungjawab)VALUES
('$_POST[ruang]','$_POST[kegiatan]','$waktu','$_POST[penanggungjawab]')");
header('location:../admin_info_jadwal_lab.php');
?>