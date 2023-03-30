<?php
// 1. Connect ke database
//$sqlconn=mysql_connect("localhost:3306","root","");
// 2. Pilih database
include "ipserver.php";
//tambahkan IPPublic ke Remote MySQL di CPanel hosting
$link = mysql_connect($ipserver, $db_userm, $db_pasw);
mysql_select_db($db_nama, $link) or die('Koneksi2 CBT BEESMART belum di setting');
//echo "Koneksi Terbuka";

date_default_timezone_set($zo);
mysql_select_db($db_nama, $sqlconn);


?>
