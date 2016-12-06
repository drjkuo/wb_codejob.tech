<?php
define("DB_HOST", 'codejobtech.ipagemysql.com');  
define("DB_USER", 'codejobtech');  
define("DB_PASS", 'CSwinner@CA201610');  
define("DB_DATABASENAME", 'secure_login');  
define("DB_TABLENAME", 'marketplace_user');

$usr = $_REQUEST['usr'];
$pw = $_REQUEST['pw'];

//搜尋資料庫資料
//$sql = "select * from ".DB_TABLENAME. " where username='$usr'";
//echo $sql;
$sql = "INSERT INTO " .marketplace_user. " (username, password) VALUES ('$usr', '$pw')";
//echo var_dump($sql);

			
if (!($conn = mysql_connect(DB_HOST, DB_USER, DB_PASS)))
{
	die("Could not connect to database");
}

if (!mysql_select_db(DB_DATABASENAME, $conn))
{
	die("Could not open database");
}


$results = array();
if (!($result = mysql_query($sql, $conn)))
{
	$row = array('result' => 0);
	//print("Register fail! <br />");
	//echo "0";
	//die("0");
	//echo "false";
	//die(mysql_error());
	/*
	$data = array('success' => '0');
	header('Content-type: text/javascript');
	echo json_encode($data);
	*/
	//echo {"success": "0"};
}
else 
{
	//echo "1";
	$row = array('result' => 1);
	/*
	$data = array('success' => '1');
	header('Content-type: text/javascript');
	echo json_encode($data);*/
}

$results[] = $row;

echo json_encode($results);


mysql_free_result($result);
 
mysql_close($conn);
?>