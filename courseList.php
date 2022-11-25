<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sidebar.css" />

</head>

<style>
    .myclass {
        display: inline-block;
        width: 175px;
        height: 40px;
    }

    table {
        border-radius: 15px;
        width: 500px;
    }

    th {
        border-radius: 15px;
    }

    td {
        border: 1px solid black;
    }

    tr {
        border-radius: 15px;
    }

    tbody {
        border-radius: 15px;
    }

    .adjust-line-height {
        line-height: 2em;
    }
</style>


<div class="w3-sidebar w3-red w3-bar-block" style="width:11%">
    <div id=logo style="margin-left:8%">
        <img src="agfa_w.png" width="128" height="60" title="Logo of Agfa" alt="Logo" />
        <p></p>
    </div>
    <a href="addCourse.php" class="w3-bar-item w3-button">Add Course</a>
    <a href="form.php" class="w3-bar-item w3-button">Form Submission</a>
    <a href="help.php" class="w3-bar-item w3-button">Help</a>
</div>

<div style="margin-left:25%">

    <body>

        <h2> Courses for <?php echo $_GET["cs_date"] ?> </h2>

        <table>
            <thead>
                <tr>

                    <th id="weekdays">Title</th>
                    <th id="weekdays">Time</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $cs_date = $_GET["cs_date"];


                $conn = new mysqli("localhost", "root", "root", "Agfa");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }



                $sql = "SELECT DISTINCT cs_id,cs_name,cs_time FROM `course` WHERE cs_date = '{$cs_date}'";

                $result = $conn->query($sql);
                $count = 0;


                while ($row = $result->fetch_assoc()) {
                    $count = $count + 1;

                    $cs_id = $_POST['cs_id'];

                    $ID = $row['cs_id'];
                    $Title = $row["cs_name"];
                    $Time = $row["cs_time"];
                    $Date = $row["cs_date"];
                    $Location = $row["cs_room"];
                    $Customer = $row["cs_customer"];

                ?>

                    <tr>
                        <th><?php echo $row["cs_name"]  ?></th>
                        <th><?php echo $row["cs_time"]  ?></th>

                        <th> <a href="roster.php?id=<?php echo $row["cs_id"] ?>">View</a>
                    </tr>

                <?php

                }

                ?>

            </tbody>

        </table>
        <p> </p>
        <!-- Add Item -->
        <a href="addCourse.php?date=<?php echo $row["cs_date"] ?>">
            <button type="submit">Add</button>
        </a>
        </form>