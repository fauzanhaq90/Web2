 <HTML>
<HEAD>
<TITLE> penggunaan split </TITLE>
</HEAD>
<BODY>
<?php
$tanggal = "17-05-2010";
// fungsi split tidak mendukung di php versi 7,digantikan menggunakan explode
list($hari, $bulan, $tahun) = explode("-", $tanggal);
echo "Hari = $hari";
echo "<br />";
echo "Bulan = $bulan";
echo "<br />";
echo "Tahun = $tahun";
?>
</BODY>
</HTML>