<?php
 
 $pagetitle = "PHP - Methods";
 $creation_date = "2021-01-24";
 $edit_date = "2021-01-30";
 
 require('includes/header.php');
         
 ?> 

    <h2>var_dump()</h2>
    <ul>
        <li>Print out the details of the variable in the browser; useful to see what variable contains</li>
        <li>Accepts multiple values as arguments, separated with ,(comma)</li>
    </ul>

    <h2>empty()</h2>
    <ul>
        <li>Determine wheter variable is empty - It doesn't exist or value equals false.</li>
        <li>&#x279C <a href="https://www.php.net/manual/en/function.empty">PHP Manual - empty()</a></li>
    </ul>
    
    <?php require('includes/footer.php'); ?>