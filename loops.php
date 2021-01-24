<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <h1>PHP Loops</h1>
    <p class="date">21-01-24 / Notes by Tuija Stardust</p>

    <p>In order to print out an array of data, loops are a convenient solution.</p>
    <p>Loops are "control structures"</p>

    <h2>foreach Loop</h2>
    <p>&#x279C Runs code for each element of an array regardless of how many elements there are.</p>
    <p>&#x279C <a href="https://www.php.net/manual/en/control-structures.foreach.php">PHP Manual - Foreach</a></p>
    <h3>Syntax</h3>
    <pre>
foreach($array as $array_element){
     echo $array_element, ", ";   
}
</pre>
    <p>&#x279C $array_element is the variable that each element will be assigned to every time we go around the loop.</p>

    <hr>
        <?php

        $articles = ["Awesome post", "Best ever post", "Meh post"];

        foreach($articles as $article){
            echo $article, ", ";
        }

        ?>

    <p>&#x279C You can also access the index/key of an array with foreach loop.</p> 

<pre>
foreach($array as $index_key => $array_element){
    echo "$index_key - $array_element, " 
};
</pre>
    <hr>
        <?php
            foreach($articles as $index => $article){
                echo "$index - $article, "; 
            }
        ?>
    <hr>
        <?php
        $articles = [
            "a" => "Awesome post",
            "b" => "Best ever post",
            "c" => "Meh post"
        ];

        foreach($articles as $index => $article){
            echo "$index - $article, ";
        }
        ?>

    <h2>while loop</h2>
    <p>&#x279C Runs code while condition is true.</p>
    <p>To avoid infinite loop, the condition needs to change to false at some point.</p>
    <p>&#x279C <a href="https://www.php.net/manual/en/control-structures.while.php">PHP Manual - While loop</a></p>
    <h3>Syntax</h3>
<pre>
while(condition){
    code to run while condition is true;   
}
</pre>
    <h3>Example</h3>
<pre>
$month = 1;

while ($month <= 12) {
    echo "$month, ";
    $month++; // &#8592 adding one is necessary to avoid the infinite loop; (++ after variable name adds one to the variable)
}
</pre>
    <hr>
        <?php
        $month = 1;

        while ($month <= 12) {
            echo "$month, ";
            $month++;
        }
        ?>

    <h2>for loop</h2>
    <p>&#x279C Runs a specific number of times. (When you know in advance how many times you want the code to run.)</p>
    <p>&#x279C <a href="https://www.php.net/manual/en/control-structures.for.php">PHP Manual - For loop</a></p>
    <h3>Syntax</h3>
<pre>
for(init; test; change){
    code to run while test is true;   
}
</pre>
    <ul>
        <li>init = initialise the counter to its initial value</li>
        <li>test = test the counter; if the test is true, the code block is executed</li>
        <li>change = changes the counter value after each time the code is executed</li>
    </ul>

    <h3>Example</h3>
<pre>
for ($i = 1; $i <= 10; $i++) {
    echo "$i, ";
}
</pre>

    <hr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "$i, ";
        }
        ?>

</body>
</html>