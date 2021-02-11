<?php        

        // *DEPRECATED*

        // Import the Database info
        require "includes/secret.php";

        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        mysqli_set_charset($connection, "utf8");

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            exit;
        }
