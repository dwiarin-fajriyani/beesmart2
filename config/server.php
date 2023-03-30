<?php
include "zona.php";
set_time_limit(0);
$host = "localhost";
$username="root";
$passdb="";
$namedb="beesmartv3";
//$namedb="cbt";

$sqlconn=@mysql_connect($host,$username,$passdb);
// 2. Pilih database
date_default_timezone_set($zo);

mysql_select_db($namedb, $sqlconn);

$val = mysql_query('select * from `cbt_admin` LIMIT 1');
if($val == TRUE)
{
// $sql = mysql_query("select * from cbt_server");
// $xadm = mysql_fetch_array($sql);
// $xserver= $xadm['XServer'];
// $mode = "$xserver"; // pilih 'lokal' atau 'pusat'
// }
	$log = mysql_fetch_array($val);
	$skull= $log['XSekolah'];
	if ($log['XTingkat']=="SMA" || $log['XTingkat']=="MA"||$log['XTingkat']=="STM"){$rombel="Jurusan";}else{$rombel="Rombel";}
	
	if (mysql_query("select * from cbt_zona LIMIT 1")==TRUE){
	$xadmz = mysql_fetch_array(mysql_query("select * from cbt_zona LIMIT 1"));
	$zo= $xadmz['XZona'];
	}
	else {	$zo="Asia/Jakarta";}
	date_default_timezone_set($zo);
	$xadm = mysql_fetch_array(mysql_query("select * from cbt_server LIMIT 1"));
	$xserver= $xadm['XServer'];
	$mode = $xserver; 
}else{$skull="UBK/CBT"; date_default_timezone_set("Asia/Jakarta");}

?>
