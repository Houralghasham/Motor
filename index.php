<!DOCTYPE html>

<html>
    <head>
        <title>PHP Connection</title>
    </head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motor list";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = new mysqli ("localhost","root", "", "motors")
$stmt = $sql -> prepare ("select * from Mo1");

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "" . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

</body>


</html>