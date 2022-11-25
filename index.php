<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sidebar.css" />
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<style>
    .myclass {
        display: inline-block;
        width: 240px;
        height: 100px;
    }

    table {
        border-radius: 15px;
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

    th#weekdays {
        color: white;
        font-family: "Lato", sans-serif;
        background-color: #d10f0f;
        border-radius: 10px;
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


        <?php
        $dt = new DateTime;
        if (isset($_GET['year']) && isset($_GET['week'])) {
            $dt->setISODate($_GET['year'], $_GET['week']);
        } else {
            $dt->setISODate($dt->format('o'), $dt->format('W'));
        }
        $year = $dt->format('o');
        $week = $dt->format('W');

        ?>

        <!-- <h2 style="width: 90%; float:left; position:relative; left:30%;"> Week of <?php //echo $dates[0] 
                                                                                        ?>-<?php //echo $dates[5] 
                                                                                            ?> </h2> -->

        <script>
            var today = new Date();
            var date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();
            var dateTime = date + " " + time;
        </script>

        <table style="width: 90%; float:left; position:relative; right:18%">
            <tr>
                <th contenteditable="true" , id=weekdays>Monday</th>
                <th contenteditable="true" , id=weekdays>Tuesday</th>
                <th contenteditable="true" , id=weekdays>Wednesday</th>
                <th contenteditable="true" , id=weekdays>Thursday</th>
                <th contenteditable="true" , id=weekdays>Friday</th>
            </tr>


            <?php
            $i = 0;
            $dates = array();
            $months = array();
            do {
                echo "<td>" . "<a href='courseList.php?cs_date={$dt->format('Y-m-d')}'>" . '<input class="myclass" type="button" value="' . $dt->format('m') . "/" . $dt->format('d') . '" />' . '</a>' . "</td>\n";
                $dt->modify('+1 day');
                $months[$i] =  $dt->format('m');
                $dates[$i] = $dt->format('d');
                $i++;
            } while ($week == $dt->format('W') && $i < 5);
            echo '<h2 style="width: 90%; float:left; position:relative; left:30%;">' . "Week of " . $months[0] . "/" . ($dates[0] - 1) . "-" . $months[0] . "/" . $dates[3] . '</h2>';


            ?>

        </table>

        <?php

        ?>

    </body>

</html>