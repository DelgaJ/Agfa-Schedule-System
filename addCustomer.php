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

    * {
        margin: 0;
    }

    body {
        margin: 0;
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

        <h2> Add New Customer </h2>

        <form action="addCustomerScript.php?id=<?php echo $_GET["id"] ?>" method="post">
            <table>
                <tr>
                    <td align="right">Name:</td>
                    <td align="left"><input type="text" name="cu_name" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td align="left"><input type="text" name="cu_email" value="<?php echo $email ?>"></td>
                </tr>

            </table>

            <input type="submit">

        </form>
        <p> </p>
        <!-- Add Item -->

        </form>