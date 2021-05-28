?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus
ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada
setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];//periksa login
if ($user == "fauzan" && $pass = "1234") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='pert14_session2.php'>di sini
(per14_sesion2.php)</a>
untuk menuju ke halaman pemeriksaan session";
}
} else {
  
}
<?php
/****************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus session yang ada.
*****************************************************/
session_start();
if (isset($_SESSION['login'])) {
unset ($_SESSION);
session_destroy();
//
echo "<h1>Anda sudah berhasil LOGOUT</h1>";
echo "<h2>Klik <a href='session1.php'>di sini</a> untuk
LOGIN kembali</h2>";
echo "<h2>Anda sekarang tidak bisa masuk ke halaman
<a href='Pert14_session2.php'>session2.php</a> lagi</h2>";
}
?>