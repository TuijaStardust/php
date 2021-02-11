<?php
 
 $pagetitle = "PHP - Superglobals";
 $creation_date = "2021-02-01";
 $edit_date = "2021-02-09";
 
 require('includes/header.php');
         
 ?> 

    <p>Superglobal (= automatic global) variables are available in all scopes throughout a script. There is no need to do global $variable to access it within functions or methods.</p>
    <p><a href="https://www.php.net/manual/en/language.variables.superglobals">PHP Manual - Superglobals</a></p>
    
    <h2>$_GET</h2>
    <p><strong>An associative array</strong> of variables passed to the current script via the URL parameters</p>
    <p>&#x279C Separate the variables using <strong>&</strong></p>
    <p>&#x279C All variables are passed as strings</p>
    <p>Example:<br>URL - tuijastardust.com/index.php<strong>?id=1</strong></p>
    <p>&#x279C Anything that comes after the <strong>?</strong> in URL is accessible using $_GET variable</p>
    <p><a href="querystring.php">Test it: &#x279C SQL querystring</a></p>

    <h2>$_POST</h2>
    <p><strong>An associative array</strong> of variables passed to the current script via the HTTP POST method for standard web forms</p>
    <p>&#x279C <a href="https://www.php.net/manual/en/reserved.variables.post">PHP Manual - $_POST</a></p>

    <h2>$_SERVER</h2>
    <p>&#x279C An array containing information about server and execution environment</p>
    <p>&#x279C The entries of this array are created by the web server. Some examples of accessible values:
        <ul>
            <li>'REQUEST_METHOD' &#x279C Which request method was used to access the page</li>
            <li>'QUERY_STRING' &#x279C The query string, if any, via which the page was accessed</li>
            <li>'DOCUMENT_ROOT' &#x279C The document root directory under which the current script is executing, as defined in the server's config file</li>
        </ul>
    </p>
    <p>&#x279C <a href="https://www.php.net/manual/en/reserved.variables.server.php">PHP Manual - $_SERVER</a></p>


<?php require('includes/footer.php'); ?>