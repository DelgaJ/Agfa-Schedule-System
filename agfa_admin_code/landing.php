<html>

<style>
    #admin {
        position: fixed;
        left: 10px;
        bottom: 10px;

        background-color: #08042c;
        color: white;
        width: 100px;
        padding: 5px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 25px;
        opacity: 85%;
        margin-top: 12px;
        /* Adds small margin between button and logo image */
        text-align: center;
    }

    #admin:hover,
    #admin:focus {
        background-color: #ee2424
    }
</style>

<head>
    <!-- Link to css the site will use -->
    <link rel="stylesheet" href="agfa_admin_code/style.css" />
    <!-- Link to js the site will use -->
    <script src="agfa_admin_code/script.js" defer></script>
</head>

<body>

    <div class="container">
        <div class="logo">
            <!-- Display Agfa Logo (should be above input)-->
            <img class="agfa-logo" src="agfa_admin_code/agfaLogo.jpg" />
        </div>

        <!-- Create a drop down menu with sites in it-->
        <div class="dropdown">
            <button onclick="displaySites()" class="dropbtn">Site Select</button>
            <div id="myDropdown" class="dropdown-content">
                <?php

                require('../mysqli_connect.php');

                $sql = "SELECT DISTINCT site_id, site_name FROM site;";
                $result = @mysqli_query($dbc, $sql);

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $id = $row['site_id'];
                    $name = $row["site_name"];

                ?>
                    <a href="index.php?id=<?php echo $row["site_id"] ?>"><?php echo $row["site_name"] ?></a>
                <?php

                }

                ?>

            </div>
        </div>
    </div>

</body>

<a href="agfa_admin_code/admin.html" id="admin">Admin</a>