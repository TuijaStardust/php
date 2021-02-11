<?php
$pagetitle = "Adding New Article with function";
$creation_date = "2021-02-10";
$edit_date = "2021-02-11";

// Including the file that contains the getDB() function we call later
require 'includes/db_connect_function.php';

// Initialize a variable that holds the validation error messages -> Can be later displayed for the user
$errors = [];

// Initialize variables for each control -> Needed for making sure the valid data provided by user is not lost if an error occurs   
$title = '';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    // First make sure the form field inputs are valid 
    // -> Give ERROR messages if not...

    // Check if POSTdata-title & POSTdata-content are empty strings
    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    } 

    // Check that Datetime is in correct format
    
        
     //"If datetime is not empty... 
     if ($published_at != '') {
        // Define the correct format of datetime 
        $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);
    
        // If the datetime format is incorrect:
        if ($date_time === false) {
            $errors[] = 'Invalid date and time - correct form is Y-m-d H:i:s';
        } else {
            $date_errors = date_get_last_errors();
    
            if ($date_errors['warning_count'] > 0) {
                $errors[] = 'Invalid date and time';
            } 
            
        }

     }
    // date-time validation doesn't work consistentlycbecause of browser incompatibilities.


    // Test that the error messages work ->
    // var_dump($errors); exit;

    if (empty($errors)) {

        $connection = getDB();

        // ALERT! SQL query strings: Make sure each value is surrounded by single quotes and separated by comma
        
        $sql = "INSERT INTO php_dummy_one (title, content, published_at)
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($connection, $sql);

        if ($stmt === false) {

            echo mysqli_error($connection);

        }   else {

            if ($published_at == '') {
                $published_at = null;
            }

            mysqli_stmt_bind_param($stmt, 'sss', $title, $content, $published_at);

            if (mysqli_stmt_execute($stmt)) {

                // Get the ID of newly inserted record
                $id = mysqli_insert_id($connection);
                
                // Test the protocol
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                    $protocol = 'https';
                } else {
                    $protocol = 'http';
                }

                //*DEPRECATED*echo "inserted record with ID: $id";
                // Redirect to a page where the submitted data can be viewed; Redirect to an abslute url
                header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "article.php?id=$id");
                exit;

            } else {
                echo mysqli_stmt_error($stmt);
            }
        }

    }
}


require 'includes/header.php';
?>

<h2>Add New Article</h2>

<?php if (! empty($errors)): ?>
    <ul>
       <?php foreach ($errors as $error): ?>
            <li><?= $error; ?></li>
       <?php endforeach;?>
    </ul>
<?php endif;?>

<form method="post">
    
    <!-- Escape HTML special characters!!!-->
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($title); ?>">
    </div>

    <div>
        <label for="content"></label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= htmlspecialchars($content); ?></textarea>
    </div>

    <div>
        <label for="published_at">Date and time of publishing</label>
        <!-- ALERT! datetime-local input type doesn't really work because browsers treat it inconsistently, use text instead-->
        <input type="text" name="published_at" id="published_at" value="<?= htmlspecialchars($published_at);?>"> 

    </div>

    <button>Add Article</button>

</form>

<?php require 'includes/footer.php'; ?>