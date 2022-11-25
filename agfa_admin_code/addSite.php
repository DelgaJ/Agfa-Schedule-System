<?php

function createSiteFile()
{
    // User input for site name
    $sn = $_REQUEST['site_name'];

    // Replaces spaces in site name with underscores and adds file type
    $sn = preg_replace('/\s+/', '_', $sn) . '.csv';

    // Converts site name to all lowercase
    $sn = strtolower($sn);

    // Creates .csv file for new site
    $fp2 = fopen($sn, 'w');

    // Closes the file
    fclose($fp2);
}

function addSiteToDBFile($columns, $data)
{
    // Opens site database file
    $fp = fopen('site_database.csv', 'a');

    // Set variable to contents (if any) of site_database.csv
    $content = file('site_database.csv');

    // Checks contents of site_database.csv file to see if empty
    $isEmpty = empty($content) || (count($content) == 1 && empty($content[0]));

    // If .csv file empty, adds column names as first entry
    if ($isEmpty == true) {
        foreach ($columns as $fields) {
            fputcsv($fp, $fields);
        }
    }

    // Appends user input data to the file
    fputcsv($fp, $data);

    // Closes the file
    fclose($fp);

    // Function to create a .csv file for a newly added site
    createSiteFile();
}

// Column names
$columns = array(
    ['site_name', 'start_date', 'end_date']
);

// Retrieve input data to add to .csv file from client
$data = array(
    $_POST['site_name'],
    $_POST['start_date'],
    $_POST['end_date']
);

// Function to add site to database file of site names
addSiteToDBFile($columns, $data);

// Redirects user back to add site page
header("Location: adminTest.html");
