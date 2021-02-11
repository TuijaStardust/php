<?php

$pagetitle = "PHP - Connecting to Database with function";
$creation_date = "2021-02-10";
$edit_date = "2021-02-11";

require 'includes/header.php';

?>

<h2></h2>
<p>Instead of placing the database connection data into a separate file that connects to the database whenever the page loads, the database connection data should be placed within a function that can be called when the database connection is needed.<br>
&#x279C It also makes the use of connection related variables more clear.</p>
<p>Having <em>required code</em> from separate file in a condition statement (if, elseif etc.) is generally not a good idea.<br>
</p>
<p>Syntax example:</p>
<pre>

/** 
 * Get the database connection
 * 
 * @return object Connection to a MySQL server
*/

    function getDB() {

        // Database host
        $db_host = "localhost";

        // Database name
        $db_name = "dbname";

        // Database username
        $db_user = "Unicorn";

        // Database password
        $db_pass = "jd8wqk21";
        
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
</pre>



<?php require 'includes/footer.php'; ?>