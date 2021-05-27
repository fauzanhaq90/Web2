<?php
include "koneksi.php";
$perintah="SELECT * FROM articles ORDER BY articleID DESC";
$hasil=mysqli_query($connection,$perintah);
echo("
<h2>List Artikel</h2>
<br><UL>
");
while ($row=mysqli_fetch_array($hasil))
{
echo("
<LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a
href=\"edit.php?articleID=$row[0]\">Edit</a>
&nbsp;<a
href=\"update.php?articleID=$row[0]\">Update</a></LI><br>");
}echo("</table>");
echo "<br><a href=\"addartikel.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
?>