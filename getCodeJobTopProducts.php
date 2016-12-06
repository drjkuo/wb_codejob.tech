<?php
define("DB_HOST", 'codejobtech.ipagemysql.com');  
define("DB_USER", 'codejobtech');  
define("DB_PASS", 'CSwinner@CA201610');  
define("DB_DATABASENAME", 'secure_login');  
define("DB_TABLENAME", 'codejob_products');

//$field = $_REQUEST['field'];
//$query = $_REQUEST['query'];
//$id = $_REQUEST['id'];

//if (isset($_REQUEST['query']) && isset($_REQUEST['field'])) //&& $_REQUEST['field'] != "*" )
/*
if (isset($_REQUEST['id']))
{
	//$sql = "select * from ".DB_TABLENAME." where ".$field."=".$query;
	$sql = "select * from ".DB_TABLENAME." where id=".$id;
}

else
{
	$sql = "select * from ".DB_TABLENAME;
	//$sql = "select * from ".DB_TABLENAME." where id=1";
}*/

$sql = "select * from ".DB_TABLENAME. " ORDER BY clickcount DESC LIMIT 5";


//echo $sql;
			
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
while ($row = mysql_fetch_assoc($result)) {
	$results[] = $row;
	//$list_of_users = $row["fname"].$row["lname"];
}

echo json_encode($results);

//json_encode($results);

//echo var_dump($results);


mysql_free_result($result);
 
mysql_close($conn);
?>