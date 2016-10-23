<?php
//include('search_db.php'); // Includes Add Script

/*
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
*/
?>
<?php
if (isset($_POST['submit']))
header('Location: search_db.php');
?>


<!DOCTYPE html>
<html>
<head>
<title>User add info</title>
</head>


<body>
<div id="main">
<h1>User search info</h1>
<div id="search">


<form  method="post" action="search_db.php"  id="searchform">
<label>First name</label>
<input id="fname" name="fname" type="text"><br>
<label>Last name</label>
<input id="lname" name="lname" type="text"><br>
<label>Email</label>
<input id="email" name="email" type="text"><br>
<label>Home address</label>
<input id="haddress" name="haddress" type="text"><br>
<label>Home phone</label>
<input id="hphone" name="hphone" type="text"><br>
<label>Cell phone</label>
<input id="cphone" name="cphone" type="text"><br>
<input name="submit" type="submit" value="Search">



</form>
</div>
</div>
</body>
</html>