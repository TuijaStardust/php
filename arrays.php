 <?php
 
$pagetitle = "PHP - Arrays";
$creation_date = "2021-01-24";
$edit_date = "2021-01-30";

require 'includes/header.php';
        
?>        

    <p>An array is a list of other values.</p>
    <h2>Syntax</h2>
<pre>$articles = ["First post", "Second post", "Third post"];</pre>
<pre>$articles = array("First post", "Second post", "Third post");</pre>
    <hr>
        <?php
        $articles = ["First post", "Second post", "Third post"];
        var_dump($articles[1]);

        ?>

    <h2>Indexing</h2>
    <p> Each value in array is referred to as an array element. Each element has a unique ID &#x279C index / key. (Index count starts from 0) </p>

    <p>Define the index instead of automatic indexing</p>
<pre>
$articles = [
    1 => "first post",
    3 => "Second post",
    "Third post"
];</pre>
    <p>If index is not defined, it will automatically continue from the previous index number</p>

    <h2>Associative arrays</h2>
    <p>Instead of automatic number indexing, index can be defined as a string</p>
    <h3>Syntax</h3>
<pre>
$articles = [
    "two" => "Awesome post",
    "four" => "Best ever post",
    "six" => "Meh post"
];
</pre>
    <hr>

        <?php 
        $articles = [
        "two" => "Awesome post", 
        "four" => "Best ever post", 
        "six" => "Meh post"];

        var_dump($articles["two"]);
        ?>

    <h2>Multidimensional Array</h2>
    <p>= Arrays within an array
    <p>Useful for representing tables of data</p>
<pre>
$articles = [
    ["title" => "Awesome post", "content" => "This post is awesome"],
    ["title" => Best ever post", "content" => "This post is the best ever!"],
    ["title" => "Meh post", "content" => "This post is just not very good"]
];
</pre>
    <hr>
            <?php 
            $articles = [
                ["title" => "Awesome post", "content" => "This post is awesome"],
                ["title" => "Best ever post", "content" => "This post is the best ever!"],
                ["title" => "Meh post", "content" => "This post is just not very good"]
            ];

            var_dump($articles[1]["title"]);
            ?>

<?php 

require 'includes/footer.php';
?>