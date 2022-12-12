<?php

$role_name = $_POST['role_name'];
$num_seats = $_POST['num_seats'];

require('../mysqli_connect.php');

$insert_role = "DELETE FROM role WHERE role_name = '$role_name';";

$result = @mysqli_query($dbc, $insert_role);

if ($result === TRUE) {
    echo "Delete Successful.";

    // Redirects user back to add site page
    header("Location: admin.html");
} else {
    echo "Error: Check Site Information ";
}
