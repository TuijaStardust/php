<?php
 
 $pagetitle = "PHP - Methods";
 $creation_date = "2021-01-24";
 $edit_date = "2021-02-01";
 
 require('includes/header.php');
         
 ?> 
    <h2>Useful in general</h2>
    
    <h3>var_dump()</h3>
    <ul>
        <li>Print out the details of the variable in the browser; useful to see what variable contains</li>
        <li>Accepts multiple values as arguments, separated with ,(comma)</li>
    </ul>

    <h2>Variable methods</h2>

    <h3>empty()</h3>
    <ul>
        <li>Determines wheter variable is empty - It doesn't exist or value equals false.</li>
        <li>&#x279C <a href="https://www.php.net/manual/en/function.empty">PHP Manual - empty()</a></li>
    </ul>
    
    <h3>isset()</h3>
    <ul>
        <li>Determines if a variable is declared and is different than null</li>
        <li>&#x279C <a href="https://www.php.net/manual/en/function.isset">PHP Manual - isset()</a></li>
        <li>If multiple parameters are supplied isset() returns true only if all of the parameters are considered set.<br>
        (&#x279C Evaluation stops as soon as unset variable is encountered)</li>
    </ul>

    <h3>is_numeric()</h3>
    <ul>
        <li>Determines wheter the variable is a number/numeric string </li>
        <li>&#x279C <a href="https://www.php.net/manual/en/function.is-numeric">PHP Manual - is_numeric()</a></li>
    </ul>

    <h2>Database methods</h2>
    
    <h3>mysqli_connect()</h3>
    <ul>
        <li><strong>Open a new connection to the MySQL server</strong></li>
        <li>Parameters: host, database username, password, database name, (port, socket)</li>
        <li>Returns an object which represents the connection to a MySQL server, (False on failure).</li>
        <li><strong>Alias of mysqli::__construct() function</strong></li>
        <li>Usually stored in a variable: $connection</li>
        <li>mysqli_connect_error() can be used to fetch the connection error</li>
        <li><a href=https://www.php.net/manual/en/mysqli.construct.php>PHP manual - mysqli::__construct()</a></li>
    </ul>
    
    <h3>mysqli_set_charset()</h3>
    <ul>
        <li>parameters: $connection, charset (= "utf8")</li>
        <li>Set the desired charset after establishing connection</li>
    </ul>
    
    <h3>mysqli_connect_error()</h3>
    <ul>
        <li>Returns the last error message string from the last call to mysqli_connect()</li>
    </ul>
    
    <h3>mysqli_query()</h3>
    <ul>
        <li><strong>Performs a query to the database</strong></li>
        <li>Parameters: database conection (mysqli_connect()), query (SQL, properly escaped) </li>
    </ul>

    <h3>mysqli_fetch_all()</h3>
    <ul>
        <li><strong>Fetches all result rows as an associative array, a numeric array or both</strong></li>    
        <li>Parameters: result of SQL query (mysqli_query()), result type; </li>    
        <li>Result types:
            <ul>
            <li>MYSQLI_ASSOC (= Associative array)</li>
            <li>MYSQLI_NUM (= Numeric array)</li>
            <li>MYSQLI_BOTH (= Both arrays)</li>
            </ul>
        </li> 
        <li>Returns all the rows as an array in a single step &#x279C It may consume more memory than similar functions such as <strong>mysqli_fetch_array()</strong>, which only returns one row at a time.</li>   
        <li>&#x279C Should be used only when the fetched result set will be sent to another layer for processing.</li>
    </ul>

    <h3>mysqli_fetch_assoc()</h3>
    <ul>
        <li><strong>Fetch a result row as an associative array</strong></li>
        <li>Returns null if there are no corresponding rows</li>
        <li>Parameters: A result set identifier / SQL query (mysqli_query())</li>
        <li>Field names returned by this function are case-sensitive</li>
    </ul>
    <></>
    <></>
    
    <?php require('includes/footer.php'); ?>