<?php
        
// Import the Database connection
require "includes/database_connect.php";

$sql = "SELECT * 
        FROM php_dummy_one 
        ORDER BY published_at;";

$results = mysqli_query($connection, $sql);

if ($results === false) {
    echo mysqli_error($connection);
}   else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

$pagetitle = "Blog Mockup";
$creation_date = "2021-01-24";
$edit_date = "2021-01-30";

require('includes/header.php');
        
?> 

        <?php if (empty($articles)): ?>
            <p>Sorry, there are no articles available.</p>
        <?php else: ?>
            <div>
                <ul>
                <?php foreach ($articles as $article): ?>
                    <li>
                        <h2><a href="article.php?id=<?= $article['id']; ?>"> <?= $article['title']; ?></a></h2> 
                        <p> <?= $article['content']; ?></p>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?> 

<?php require('includes/footer.php'); ?>
