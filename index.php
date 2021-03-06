<?php
        
// *DEPRECATED* 
// Import the Database connection
// require "includes/database_connect.php";

// Import Database Connection function
require "includes/db_connect_function.php";

// Assign the database connection variale that is called whenever needed
$connection = getDB();

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
$edit_date = "2021-02-11";

require('includes/header.php');
        
?> 
    <div><a href="new_article_function.php">&#x279C Add New Article</a></div>
    
    <?php if (empty($articles)): ?>
        <>Sorry, there are no articles available.</>
    <?php else: ?>
        <div>
            <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <!-- ALWAYS escape HTML special characters when the displayed content is originally inserted as user input -->
                    <h2><a href="article.php?id=<?= $article['id']; ?>"> <?= htmlspecialchars($article['title']); ?></a></h2> 
                    <p> <?= htmlspecialchars($article['content']); ?></p>
                    <p> <?= htmlspecialchars($article['published_at']); ?> </p>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?> 

    <hr>
    <h2>Importing data from Database</h2>
    <h3>Fetching complete table</h3>
    
    <p>SQL query:</p>
<pre>
"SELECT * 
FROM [database_table] 
ORDER BY [column];"
</pre>
    <p>mysqli_fetch_all()</p>

    <h3>Fetching single row</h3>
    <p>SQL query:</p>
<pre>
"SELECT *
FROM [database_table]
WHERE id = " . $GET_['id'];
</pre>
    <p>Alert! Make sure the ?id=[number] is passed to the url of page in page link leading to page</p>
    <p>mysqli_fetch_assoc()</p>
    
    <p></p>

<?php require('includes/footer.php'); ?>
