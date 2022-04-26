<?php

session_start();

$servername = "34.89.27.219";
$username = "root";
$password = "aicogas";
$dbname = "solex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed";
}else {
  echo "Connected successfully";

}





mysqli_close($conn);

?>
