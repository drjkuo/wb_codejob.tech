<!DOCTYPE html>
<html>
<head>
<title>Search result</title>

<?php 

if (isset($_POST['submit'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$haddress=$_POST['haddress'];
$hphone=$_POST['hphone'];
$cphone=$_POST['cphone'];

$conn = new mysqli('codejobtech.ipagemysql.com', 'codejobtech', 'CSwinner@CA201610', 'secure_login');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//$sql = "INSERT INTO user_info (fname, lname, email, haddress, hphone, cphone)
//VALUES ('$fname', '$lname', '$email', '$haddress', '$hphone', '$cphone')";

$sql = "SELECT * FROM user_info
WHERE (fname='$fname') AND (lname='$lname')";

//OR lname='$lname' OR email='$email' OR 
//haddress='$haddress' OR hphone='$hphone' OR cphone='$cphone' )";

/*
$where = "WHERE user_id = '$username'";

if(!empty($value1)){
$where .= "and location = '$value1'";
}

if(!empty($value2 )){
$where .= "and english_name= '$value2 '";
}

$query = "SELECT * FROM moth_sightings $where";
*/

$where = "WHERE fname='$fname'";

if(!empty($lname)){
$where .= "and lname = '$lname'";
}
if(!empty($email)){
$where .= "and email = '$email'";
}
if(!empty($haddress)){
$where .= "and haddress = '$haddress'";
}
if(!empty($hphone)){
$where .= "and hphone = '$hphone'";
}
if(!empty($cphone)){
$where .= "and cphone = '$cphone'";
}
$sql = "SELECT * FROM user_info $where";



$retval = mysqli_query($conn,  $sql);

if(!$retval )
{
  die('Could not get data:' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    echo "First name :{$row['fname']}  <br> ".
         "Last name: {$row['lname']} <br> ".
         "Email: {$row['email']} <br> ".
         "Home address : {$row['haddress']} <br> ".
         "Home phone : {$row['hphone']} <br> ".
         "Cell phone : {$row['cphone']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully<br>";


}

//mysqli_close($conn);



?> 

<b id="backtoindex"><a href="index.php">Back to index</a></b>
</div>
</body>
</html>