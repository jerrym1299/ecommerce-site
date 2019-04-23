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
else if (isset($_POST['name']) && isset($_POST['username1']) && isset($_POST['password1'])) {
  $newusername = $_POST['name'];
  $newuser = $_POST['username1'];
  $newuserpass = $_POST['password1'] ;
  // verifying there is no duplicates
  query_2 = "SELECT * FROM Users WHERE name = '$newusername' AND username = '$newuser' AND password = '$newuserpass'";
  if (myspl_num+rows(query_2) > 0) {
    echo "Username already exists!";
    header("location: index.html");
  }
  else {
    echo "creation successful!"
    mysql_query("INSERT INTO Users(name, username, password) VALUES ('$newusername', '$newuser', '$newuserpass')");
  }
}
database_close()
?>
