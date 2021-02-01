<?php
 
 $pagetitle = "PHP - File System";
 $creation_date = "2021-02-01";
 //$edit_date = "";
 
 require('includes/header.php');
         
 ?> 

    <h2>Avoiding repeated code</h2>
    <p>Extract the repeated code into a separate file</p>
    <p>&#x279C Include the separate file into any script that needs it</p>
    
    <h3>include or require expressions</h3>
    <p>To call the include or require, pass in the path/filename that needs to be included</p>
    <p>Example:<br>
    <strong>require 'includes/filename.php';</strong></p>
    <p>&#x279C Any code inside the included script is executed immediately<br>
    (as if the code in the included file was inserted directly)</p>
    <p><strong>include</strong> &#x279C If the included file is not found, a warning is shown, but the script continues to run</p>
    <p><strong>require</strong> &#x279C If the required file is not found, the script will stop running. &#x279C Fatal error </p>

    <h2>Organizing files</h2>
    <p>Included files are commonly in their own folder: <strong>includes</strong></p>
    <p>Add security to the site by adding <strong>.htaccess</strong> file to the directory<br>
    (It is possible that the server misconfiguration could stop php from workin and the php code is sent to the browser)
    </p>
    <p>&#x279C .htaccess file allows to configure the webserver on a "per directory" basis </p>
    <></>
    <></>
<?php require('includes/footer.php'); ?>