<?php

$pagetitle = "PHP - Security Issues";
$creation_date = "2021-02-09";
// $edit_date = "2021-02-09";

require 'includes/header.php';
?>

    <h2>'Escaping' to avoid SQL injection</h2>

    <p>SQL injection happends when user is able to tamper SQL query string by inserting SQL to form fields, and the field values are passed as values in the SQL string. </p>
    <p>Without <strong>escaping</strong> input field data, user can freely insert dangerous SQL code via form fields to get sensitive data from database<br>
    &#x279C for example passwords (hashs) from <strong>default database called mysql</strong> that contains user info, permissions etc.</p>
    
        <h3>mysqli_escape_string() / mysqli_real_escape_string()</h3>

        <p>Used for short SQL statements. For more complicated/alot of values &#x279C Use <strong>Prepared Statements</strong> </p>
        <p>&#x279C Escapes special characters in a string for use in an SQL statement;<br>
        &#x279C ALERT! The character set must be set either at server level or with the API function <strong>mysqli_set_charset()</strong> for it to affect mysqli_real_escape_string()</p>
        <p>Parameters:
            <ul>
                <li>1st. parameter: $connection - includes database connection data</li>
                <li>2nd. parameter: $_POST['value']</li>
            </ul>
        </p>
        <p>Instead of adding the form input value as it is, wrap the value inside the escape method <br>
        Example: <code>mysqli_escape_string($connection, $_POST['title']);</code></p>

        <h3>Prepared Statements</h3>
        <p><a href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php">PHP Manual - Prepared Statements</a></p>
        <p>When using <em>Prepared Parameters</em> it's not possible to view the full SQL string &#x279C Parameters are inserted into the SQL on the database server, NOT in php<br>
        To view the SQL queries, use DB query log </p>

        <h4>Phase 1.)</h4> 
        <p>Write SQL statement that contains placeholders for values - marked with <strong>?</strong> (questionmark)<br>
            <ul>
                <li><code>$sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";</code></li>
            </ul>
        </p>    
        <p>&#x279C Use <strong>mysqli_prepare()</strong> to prepare the SQL statement for execution instead of using mysqli_query() to return the $result </p>    
            <ul>
                <li><code>$stmt = mysqli_prepare($connection, $sql);</code></li>
            </ul>
        <h4>Phase 2.)</h4>
        <p>Bind data to the placeholders using <strong>mysqli_stmt_bind_param()</strong> method<br>
            <ul>
                <li>1st. parameter - $stmt defined in the preparing phase</li>
                <li>2nd. parameter - A string that tells the <strong>type</strong> of each parameter; one character per value, in defined order 
                    <ul>
                        <li><strong>i</strong> = integer</li>
                        <li><strong>d</strong> = double</li>
                        <li><strong>s</strong> = string (date-and-time is treated as a string)</li>
                        <li><strong>b</strong> = blob (sent in packets)</li>
                    </ul>
                </li>
                <li>3rd. parameter - values passed from the form</li>
                <li><code>mysqli_stmt_bind_param($stms, 'sss', $_POST['title'], $_POST['content'], $_POST['pulisehd_at']);</code></li>
                <li><a href="https://www.php.net/manual/en/mysqli-stmt.bind-param">PHP Manual - mysqli_stmt_bind_param()</a></li>
            </ul>
            </p>

        <h4>Phase 3.)</h4>
        <p>Execute the prepared statement using the <strong>mysqli_stmt_execute()</strong> method<br>
        &#x279C Database server inserts the data <strong>safely</strong> into the SQL statement, escaping any quotes if necessary </p>
        <ul>
            <li><code>mysqli_stmt_execute($stmt);</code></li>
            <li>Return value: true / false</li>
        </ul>
<?php require 'includes/footer.php'; ?>