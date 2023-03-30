<?php
// 1. Connect ke database
//$sqlconn=mysql_connect("localhost:3306","root","");
// 2. Pilih database
include "ipserver.php";
$link = @mysql_connect($host_name, $user_name, $password);

if(!$link){
$status_konek = "0";
}
else {
$status_konek = "1";
mysql_select_db($database, $link) or $status_konek = 0;
//echo "Koneksi Terbuka";

}

date_default_timezone_set($zo);
//mysql_select_db("beesmartv3", $sqlconn);
//tambahkan IPPublic ke Remote MySQL di CPanel hosting


?>
