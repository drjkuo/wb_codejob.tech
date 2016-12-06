<?php
define("DB_HOST", 'codejobtech.ipagemysql.com');  
define("DB_USER", 'codejobtech');  
define("DB_PASS", 'CSwinner@CA201610');  
define("DB_DATABASENAME", 'secure_login');  
define("DB_TABLENAME", 'codejob_products');


if (isset($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
	$sql = "update ".DB_TABLENAME." set clickcount = clickcount + 1 where id = ".$id;
}

if (!($conn = mysql_connect(DB_HOST, DB_USER, DB_PASS)))
{
	die("Could not connect to database");
}

if (!mysql_select_db(DB_DATABASENAME, $conn))
{
	die("Could not open database");
}

if (!($result = mysql_query($sql, $conn)))
{
	print("Could not execute query! <br />");
	die(mysql_error());
}

$results = array();
$row = array('result' => 1);
$results[] = $row;
echo json_encode($results);

//mysql_free_result($result);

mysql_close($conn);
?>
