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
