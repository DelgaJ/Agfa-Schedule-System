<?php

$ID = $_POST['cs_id'];
$Title = $_POST["cs_name"];
$Time = $_POST["cs_time"];
$Date = $_POST["cs_date"];
$Location = $_POST["cs_room"];
$Customer = $_POST["cs_customer"];

$servername = "localhost";
$username = "root";
$password = "root";
$database = "Agfa";

// Create connection

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//Update everything except name and description
$r_id = random_int(100000, 999999);
#$f_date = date_format($Date, 'y-m-d');
$arrdate = explode("/", $Date);
$f_date = strval("{$arrdate[2]}" . "-" . "{$arrdate[0]}" . "-" . "{$arrdate[1]}");
#echo $f_date;
#$sql = "INSERT INTO `course`(`cs_id`, `cs_name`, `cs_time`, `cs_date`, `cs_room`) VALUES ($r_id, '$Title', '$Time', $f_date, $Location)";
$sql = "INSERT INTO `course`(`cs_id`, `cs_name`, `cs_time`, `cs_date`) VALUES ($r_id,'$Title','$Time','$f_date')";

$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
