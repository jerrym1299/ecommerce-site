<?php
$host = "localhost" // plz sub in actual host
$user = "username"// plz sub in actual db server username
$password = "password" // plz sub in actual db server password
$dbname = "database"// plz sub in actual db server db name
$database = new mysqli($host', $user, $password, $dbname);
if ($database->connect_errno) {
  echo "Failed to connect: (" . $database->connect_errno . ") " . $database->connect_error;"
}
else {
  echo "connection successful";
}

if (isset($_POST['username2']) && isset($_POST['password2'])) {
  $user_name = $_POST['username2']
  $user_pass = $_POST['password2']
  $query = "SELECT * FROM Users WHERE username = '$user_name' AND password = '$user_pass'"
  if (mysql_num_rows($query) > 0) {
    echo "Login Successful"  
    header("location:Main.html");
  }
  else {
    echo "Incorrect input or user does not exist"
  }
}
database_close()
?>
