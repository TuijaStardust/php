<?php
 
 $pagetitle = "PHP - Query strings";
 $creation_date = "2021-01-29";
 $edit_date = "2021-01-30";
 
 require('includes/header.php');
          

var_dump($_SERVER["QUERY_STRING"]);

// In URL anything that comes after the ? is accessible using this variable
 echo "<br>";

var_dump($_GET);

?>

<?php require('includes/footer.php'); ?>