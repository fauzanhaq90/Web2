<?
include "koneksi.php";
$title = $_POST ['title'];
$author = $_POST ['author'];
$abstraksi = $_POST ['abstraksi'];
$content = $_POST ['content'];
$ID = $_POST ['ID'];
$time=date("d M Y, H:i");
$update="UPDATE articles SET judul='$title', penulis='$author',
lead='$abstraksi',
content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil=mysqli_query($connection,$update);
if ($hasil) {
echo "Artikel berhasil di update<br>";
echo "<a href=\"tampilan.php\">List</a>";
} else {
echo "Artikel gagal di update";
}
?>