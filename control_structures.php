<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
</head>
<body>
    <h1>PHP Control Structures</h1>
    <p class="date">21-01-24 / Notes by Tuija Stardust</p>
    
    <span>&#x279C <a href="https://www.php.net/manual/en/language.control-structures.php">PHP Manual - Control structures </a>

    <h2>Alternative syntax for control structures</h2>
    <span>&#x279C <a href="https://www.php.net/manual/en/control-structures.alternative-syntax.php">PHP Manual - Alternative Syntax for Control Structures</a></span>
    <p>&#x279C The basic form of the alternate syntax is to change the opening { to : (colon) and the closing } to endif;, endwhile;, endfor;, endforeach; or endswitch;.
    <p>&#x279C Alternate syntax is useful to keep HTML and php code separate

    <h3>Syntax</h3>
<pre>
<\?php
$hour = 12;
?>
...
<\?php if ($hour < 12 ): ?>
    <>Good Morning<>
<\?php elseif ($hour < 18): ?>
    <>Good afternoon<>
<\?php elseif ($hour < 22): ?>
    <>Good evening<>
<\?php else: ?>
    <>Good night<>
<\?php endif; ?>


</pre>

    <h2>Comparison operators</h2>  
     <span>&#x279C <a href="https://www.php.net/manual/en/language.operators.comparison.php">PHP Manual - Comparison operators</a></span> 
        <ul>
            <li>== &#x279C equal</li>
            <li>!= &#x279C not equal</li>
            <li>< &#x279C less than</li>
            <li>> &#x279C greater than</li>
            <li><= &#x279C less than or equal to</li>
            <li>>= &#x279C greater than or equal to</li>
        </ul>
    
    <h2>if construct</h2>
    <p>Runs the code if the condition is true. </p>
<pre>
if(condition){
    code to run if condition is true;
};
</pre>

<hr>
        <?php
        $articles = [];

        //var_dump(empty($articles));
        
        if (empty($articles)) {
            echo "The array is empty";
        } 
        
        ?>

    <h2> if else construct</h2>
    <p>Extends the if statement to run different code if the condition is false. </p>
<pre>
if(condition){
    code to run if condition is true;
} else {
    code to run if condition is false
}
</pre>
<hr>

        <?php
        $articles = ["Awesome post", "Best ever post", "Meh post"];

        if (empty($articles)) {
            echo "The array is empty";
        } else {
            echo "The array is not empty";
        }
        ?>

    <h2>elseif / else if construct</h2>
    <p>Combination of else and if that allows to extend an if statement to include other conditions if the first condition is false.</p>

    <pre>
if(1.st condition){
    code to run if condition is true;
} elseif (2.nd condition {
    code to run if condition is true;
} elseif (3.rd condition) {
    code to run if condition is true;
} else { // &#8592 Optional
    code to run if condition is false; 
}
</pre>

    <h2>switch statement</h2>
    <span>&#x279C <a href="https://www.php.net/manual/en/control-structures.switch.php">PHP Manual - Switch statement</a></span> 
    <p>Compare a variable/expression with many different values, and a execute a different piece of code depending on which value it equals to.</p>

<pre>
$variable = "value 2";

switch ($variable) {
    case "value 1":
        echo "Awesome";
        break;
    case "value 2":
        echo "Best Ever";
        break;
    case "value 3":
        echo "Meh";
        break;
    default:
        echo "Default message, if none of the case statements match the variable."    
}
</pre>

<hr>

        <?php
        
        $day = "Tue";

        switch ($day) {
            case "Mon":
                echo "Monday";
                break;
            case "Tue":
                echo "Tuesday";
                break;
            case "Wed":
                echo "Wednesday";
                break;
            case "Thu":
                echo "Thursday";
                break;
            case "Fri":
                echo "Friday";
                break;
            case "Sat":
                echo "Saturday";
                break;
            case "Sun":
                echo "Sunday";
                break;
        }

        ?>

    <p>&#x279C Alert! break; is optional if one wants to loop through the rest of the statements after "hit"

<hr>
        <?php
        $day = "Thu";

        switch ($day) {
            case "Mon":
                echo "Monday ";
            case "Tue":
                echo "Tuesday ";
            case "Wed":
                echo "Wednesday ";
            case "Thu":
                echo "Thursday ";
            case "Fri":
                echo "Friday ";
            case "Sat":
                echo "Saturday ";
            case "Sun":
                echo "Sunday ";
        }

        ?>

</body>
</html>