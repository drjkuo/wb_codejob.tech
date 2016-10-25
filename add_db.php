<b id="backtoindex"><a href="index.php">Back to index</a></b><br>


<?php 
//session_start();
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

if (isset($_POST['submit'])) {

$sql = "INSERT INTO user_info (fname, lname, email, haddress, hphone, cphone)
VALUES ('$fname', '$lname', '$email', '$haddress', '$hphone', '$cphone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);

?> 

