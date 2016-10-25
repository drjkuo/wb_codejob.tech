<?php
//include('add_db.php'); // Includes Add Script


//if(isset($_POST['submit'])){
//header("location: add_db.php");
//}

?>

<!DOCTYPE html>
<html>
<head>
<title>User add info</title>
</head>


<body>
<div id="main">
<h1>User add info</h1>
<div id="add">

<form  method="post" action="add_db.php"  id="addform">
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
<input name="submit" type="submit" value="Add entry">

<span><?php echo $error; ?></span>

</form>
</div>
</div>
</body>
</html>