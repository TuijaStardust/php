<?php
        
        // Import the Database info
        require "secret.php";

        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        mysqli_set_charset($connection, "utf8");

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            exit;
        }

        $sql = "SELECT * 
                FROM php_dummy_one 
                ORDER BY published_at;";

        $results = mysqli_query($connection, $sql);

        if ($results === false) {
            echo mysqli_error($connection);
        }   else {
            $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog Mockup</title>
</head>
<body>
    
    <header>
        <h1>PHP Blog Mockup</h1>
    </header>

    <main>

        <?php if (empty($articles)): ?>
            <p>Sorry, there are no articles available.</p>
        <?php else: ?>
            <div>
                <?php foreach ($articles as $article) {
                    echo "<h2>". $article['title']. "</h2>"; 
                    echo "<p>". $article['content'] ."</p>";
                }?>
            
            </div>
        <?php endif; ?> 

    </main>

</body>
</html>
