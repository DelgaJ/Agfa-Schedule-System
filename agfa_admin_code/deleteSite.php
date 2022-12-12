<?php

$site_name = $_POST['site_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

require('../mysqli_connect.php');

$insert_site = "DELETE FROM site WHERE site_name = '$site_name' AND start_date = '$start_date' AND end_date = '$end_date';";

$result = @mysqli_query($dbc, $insert_site);

if ($result === TRUE) {
    echo "Delete Successful.";

    // Redirects user back to add site page
    header("Location: admin.html");
} else {
    echo "Error: Check Site Information ";
}
