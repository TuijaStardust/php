<?php

// *DEPRECATED*
// Import the Database connection
require 'includes/database_connect.php';

// Import Database connection function and assign it to a variable
require 'includes/db_connect_function.php';

$connection = getDB();

// Avoid SQL injection by making sure the id === numeric 
if (isset($_GET['id']) && is_numeric($_GET['id'])) { // <- isset() removes error message from being displayed on browser

    $sql = "SELECT * 
            FROM php_dummy_one 
            WHERE id = " . $_GET['id']; // Gets the id from URL

    $results = mysqli_query($connection, $sql);

    if ($results === false) {
        echo mysqli_error($connection);
    }   else {
        $article = mysqli_fetch_assoc($results); 
    }

} else {

    $article = null;
} 

$pagetitle = "Blog Mockup";
$creation_date = "2021-01-24";
$edit_date = "2021-01-30";

require('includes/header.php');

?>

        <?php if ($article === null): ?>
            <p>Sorry, the article isn't available.</p>
        <?php else: ?>
            <article>
                <h2> <?= $article['title']; ?></h2> 
                <p> <?= $article['content']; ?></p>
            </article>
        <?php endif; ?> 


<?php require('includes/footer.php'); ?>
