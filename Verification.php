<?php
include ("connect.php");
if (isset($_POST['username2']) && isset($_POST['password2'])) {
  $user_name = $_POST['username2']
  $user_pass = $_POST['password2']
  $query = "SELECT * FROM Users WHERE username = '$user_name' AND password = '$user_pass'"
  if (mysql_num_rows($query) > 0) {
    echo "Login Successful"  
    header("location: Main.html?usernm=username");
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
    header("location: Main.html?usernm=username"); // not sure if u can pass variabels in other scripts like that
  }
}
database_close()
?>
