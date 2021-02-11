<?php
$pagetitle = "Adding New Article with function";
$creation_date = "2021-02-10";
$edit_date = "2021-02-11";

// Including the file that contains the getDB() function we call later
require 'includes/db_connect_function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $connection = getDB();

    // ALERT! SQL query strings: Make sure each value is surrounded by single quotes and separated by comma
     
   $sql = "INSERT INTO php_dummy_one (title, content, published_at)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {

        echo mysqli_error($connection);

    }   else {

        mysqli_stmt_bind_param($stmt, 'sss', $_POST['title'], $_POST['content'], $_POST['published_at']);

        if (mysqli_stmt_execute($stmt)) {

            // Get the ID of newly inserted record
            $id = mysqli_insert_id($connection);
            echo "inserted record with ID: $id";

        } else {
            echo mysqli_stmt_error($stmt);
        }
    }

}


require 'includes/header.php';
?>

<h2>Add New Article</h2>

<form method="post">
    
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content"></label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Date and time of publishing</label>
        <input type="datetime-local" name="published_at" id="published_at" placeholder="">
    </div>

    <button>Add Article</button>

</form>

<?php require 'includes/footer.php'; ?>