<?php

$ID = $_GET["id"];
$Name = $_POST["cu_name"];
$Email = $_POST["cu_email"];


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


#$sql = "INSERT INTO `course`(`cs_id`, `cs_name`, `cs_time`, `cs_date`, `cs_room`) VALUES ($r_id, '$Title', '$Time', $f_date, $Location)";
$sql = "UPDATE `course` SET `cs_customer`='{$Name}' WHERE cs_id = {$ID}";
$result = $conn->query($sql);

$sql2 = "INSERT INTO `customer`(`cu_name`, `cu_email`) VALUES ('{$Name}','{$Email}')";
$result2 = $conn->query($sql2);




if ($result === TRUE && $result2 === TRUE) {
    header("Location: roster.php?id={$ID}");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
