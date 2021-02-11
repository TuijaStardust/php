<?php        

/** 
 * Get the database connection
 * 
 * @return object Connection to a MySQL server
*/

    function getDB() {

        // Import the Database info
        require "secret.php";
        
        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        mysqli_set_charset($connection, "utf8");
        
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            exit;
        }

        // The $connection data needs to be a return value 
        // -> This is not a global variable and it needs to be assigned in each file when needed ($connection = getDB();)
        return $connection;
    }