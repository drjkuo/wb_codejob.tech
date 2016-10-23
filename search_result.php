<?php
include('search_db.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Search result</title>


</head>
<body>
<div id="search_result">
<!--b id="welcome">List of current users: <i><?php echo $login_session; ?></i></b-->

<?php
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
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
echo "Fetched data successfully\n";
?>

<b id="logout"><a href="logout.php">Logout</a></b>
</div>
</body-->
</html>

