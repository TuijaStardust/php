<?php
 
 $pagetitle = "PHP - Database connection";
 $creation_date = "2021-01-28";
 $edit_date = "2021-02-11";
 
 require('includes/header.php');
         
 ?> 

    <h2>Create a database</h2>

    <p>Make sure MySql => MariaDB open source database is running</p>
    <p>Use MariaDB CLI or MySQL interface to create a database</p>
    
    <h3>Settings</h3>

    <ul>
        <li>Create a new database; lowercase, underscores to separate words, descriptive name</li>
        <li>Collation depends of the used character set; Recommendation: utf8mb4_unicode_ci</li>
        <li>Create a username and password for the database. <br>
            <ul>
            <li>Don't use Root user.</li>
            <li>Host name: Local (localhost) </li>
            <li>Secure password - save it for later. (It's a good idea to learn to do this always even if it's just localhost...)</li>
            <li>Grant all privileges on the created database for the new user</li>
            </ul></li>
    </ul>
    <p>Database contains tables for holding data. -> lowercase, underscores to separate words</p>
    <p>Example of Database table columns structure;</p> 
<pre>
id (INT, PRIMARY, A_I)
title (VARCHAR, Length 128)
content (TEXT)
published_at (DATETIME, NULL)
</pre>
    <ul>
        <li>A_I => Auto_Increment creates automatically id numbers (in correct order)</li>
        <li>'published_at' is a naming convention for date and time data</li>
        <li>NULL enabled means that the field can be empty. -> Unpublished Date and time won't throw an error</li>
    </ul>

    <h2>Accessing data in a database with an SQL Query</h2>

    <code>SELECT * FROM [table_name];</code>
    <p>* => All; Can be replaced with a specific column_name</p>
    <code>SELECT [column1, column2] FROM [table_name] WHERE condition; </code>
    <p>condition examples: id = 2; title = 'Awesome post' </p>
    <p>A listing of <a href="https://mariadb.com/kb/en/comparison-operators/">SQL comparison operators</a>
    
    <h3>Index</h3>

    <p>Create Indexes on columns that are frequently searched or used for defining order.</p>
    <p>Whenever you use WHERE clause in a query, columns in the WHERE clause need to have an index (So the query searches only that column and not the whole timezone_abbreviations_list)</p>
    <code>SELECT * FROM [table_name] ORDER BY [column1, column2] DESC;</code>
    <p>Default order is ASC; adding DESC to the end reverses the order</p>

    <h2>Connecting to Database</h2>

    <p>You need to know:
        <ul>
            <li>Host (localhost)</li>
            <li>Database name</li>
            <li>DB Username</li>
            <li>DB Password</li>
        </ul>
    </p>
    <p><a href="https://www.php.net/manual/en/book.mysqli.php">PHP Manual - MySQL Improved Extension</a></p>

    <p>1.) Create variables with connection data</p>
<pre>
<\?php

$db_host = "localhost";
$db_name = "awesome_database";
$db_user = "username";
$db_pass = "password";
</pre>
    <p>2.) Call the mysqli_connect() -method passing the data that connect the database and returns a variable that represents the connection to the database server.</p>
<pre>
$connection = mysqli_connect($db_host, $db_user $db_pass, $db_name); // <- In this order!   
</pre>
    <p>Check that the connection has succeeded...</p>
<pre>
if (mysqli_connect_error()) {
    echo mysqli_connect_error(); // <- Prints out why the connection failed
    exit; // <- Stops the script
}

echo "Connected successfully.";
</pre>
    <p>3.) Query data from the database</p>
    <p>Create a variable for the SQL statement</p>
<pre>
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";
</pre>
    <p>4.) Send the SQL query to database</p>
    <p>Use mysqli_query()</p>
<pre>
$results = mysqli_query($connection, $sql);
</pre>
    <p>5.) Check for errors and/or fetch the data; === to make sure it only applies to correct type of false response</p>
<pre>
if ($result === false) {
    echo mysqli_error($connection); //<- Error message is essential help to locate the error...
} else { 
    // fetch result set
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC); 
}
</pre>
    <p>MYSQLI_ASSOC turns the resulting array into an associative array</p>
    
    <h2>Inserting Data Into Database</h2>

    <p>INSERT INTO -SQL statement</p>
    <code>INSERT INTO table_name (column1, column2) VALUES (value1, value2), (value3, value4); </code>
    <p>&#x279C Add a value for each column OR the defined columns of the table in the same order as the columns are in the table</p>
    <p>&#x279C Multiple sets of values can be added simultaneously - separated by <strong>,</strong> (comma)</p>
    <p>&#x279C NULL can be inserted as a value if NULL is defined as an allowed value in the column...</p>

    <p>Strings and some other types of values need to be enclosed with single quotes <strong>' '</strong><br>
    &#x279C If the inserted value contains a single quote [example: can't] it needs to be escaped with <strong>\</strong> (backslash) ifront [example: can\'t]</p>


<?php require 'includes/footer.php'; ?>