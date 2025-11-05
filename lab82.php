<?php
$servername = "mydb.itap.purdue.edu";
$username = "ghosh107";
$password = "password"
$database = $username;

$conn = new mysquli($servername, $usernmae, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error)
}

$sql = "SELECT track_name, time from track where time <(select avg(time) from track)";

$result = mysqli_query($conn, $sql);
forreach ($result as $row) {
    //echo $row['column_name'];
    echo print_r($row)
}

$conn->close();
?>