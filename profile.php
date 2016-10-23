<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Current users</title>


</head>
<body>
<div id="profile">
<b id="welcome">List of current users: <i><?php echo $login_session; ?></i></b>

<?php
$file = fopen("./current_user.txt", "r");

while(! feof($file)) //echo all contents in the file
  {
  echo fgets($file). "<br/>"; // echo one line and new line
  }
fclose($file);
?>

<b id="logout"><a href="logout.php">Logout</a></b>
</div>
</body>
</html>