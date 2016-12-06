<?php
define("DB_HOST", 'codejobtech.ipagemysql.com');  
define("DB_USER", 'codejobtech');  
define("DB_PASS", 'CSwinner@CA201610');  
define("DB_DATABASENAME", 'secure_login');  
define("DB_TABLENAME", 'marketplace_user');

$usr = $_REQUEST['usr'];
$pw = $_REQUEST['pw'];

//搜尋資料庫資料
$sql = "select * from ".DB_TABLENAME. " where username='$usr'";


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

//echo var_dump($sql);
$result = mysql_query($sql);
//echo var_dump($result);

$row = @mysql_fetch_row($result);
//echo var_dump($row);


//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員

if($usr != null && $pw != null && $row[1] == $usr && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        //$_SESSION['username'] = $id;
        //echo '登入成功!';
        $row = array('result' => 1);
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        //echo '登入失敗!';
        $row = array('result' => 0);
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

$results = array();
$results[] = $row;
echo json_encode($results);


mysql_free_result($result);
 
mysql_close($conn);
?>