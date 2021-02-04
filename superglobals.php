<?php
 
 $pagetitle = "PHP - Superglobals";
 $creation_date = "2021-02-01";
 $edit_date = "2021-02-04";
 
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

    <h2>$_POST</h2>


<?php require('includes/footer.php'); ?>