<?php
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php_error.log');

session_start();

$servername = "mydb.itap.purdue.edu";
$dbuser     = "ghosh107";
$dbpass     = "PlasticPen03!!";
$dbname     = "ghosh107";

$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("<h1>Database connection failed</h1>");
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request");
}

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if ($username == "" || $password == "") {
    die("Missing username or password");
}

$sql = "SELECT FullName, Password, Role, UserID, Username 
        FROM User 
        WHERE Username = ? AND Password = MD5(?)
        LIMIT 1";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Prepare failed: " . $conn->error);
    die("<h1>Database query failed</h1>");
}

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
    die("<h1>Invalid username or password</h1>");
}

$stmt->bind_result($fullName, $pw, $role, $userID, $uname);
$stmt->fetch();

$_SESSION['UserID']   = $userID;
$_SESSION['FullName'] = $fullName;
$_SESSION['Role']     = $role;
$_SESSION['Username'] = $uname;

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>
