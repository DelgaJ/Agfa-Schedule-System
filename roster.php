<?php

$cs_id = $_GET['id'];

?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sidebar.css" />

</head>

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

    <div id=logo>
        <a href="index.php">
            <img src="agfaLogo.jpg" width="135" height="60" title="Logo of Agfa" alt="Logo" />
        </a>
        <p></p>
    </div>

    <body>

        <h2> Roster </h2>
        <table>
            <thead>
                <tr>
                    <th id="weekdays">Customer</th>
                    <th id="weekdays">E-Mail</th>
                    <th id="weekdays">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $cs_id = $_GET['id'];
                $conn = new mysqli("localhost", "root", "root", "Agfa");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT customer.cu_name, customer.cu_email, customer.cu_status
                                FROM customer
                                INNER JOIN course ON course.cs_customer=customer.cu_name AND course.cs_id = $cs_id";

                $result = $conn->query($sql);
                $count = 0;


                while ($row = $result->fetch_assoc()) {
                    $count = $count + 1;

                    $name = $row['cu_name'];
                    $email = $row["cu_email"];
                    $status = $row["cu_status"];

                ?>

                    <tr>

                        <!--  <th><?php //echo $count 
                                    ?></th> -->
                        <!--  <th><?php //echo $row["cs_id"] 
                                    ?></th> -->
                        <th><?php echo $row["cu_name"]  ?></th>
                        <th><?php echo $row["cu_email"]  ?></th>
                        <th><?php echo $row["cu_status"]  ?></th>

                        <th> <a href="roster.php?id=<?php echo $_GET["id"] ?>">Edit</a>



                    </tr>

                <?php

                }

                ?>

            </tbody>
        </table>
        <p></p>

        <!-- Add Item -->

        <a href="addCustomer.php?id=<?php echo $_GET["id"] ?>">
            <button type="submit">Add</button>
        </a>


</div>
</div>

</div>