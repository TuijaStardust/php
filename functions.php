<?php

function showMessage($name = 'Layla') {
    echo "Hello $name!";
}

$pagetitle = "PHP - functions";
$creation_date = "2021-02-10";
// $edit_date = "2021- -";

require 'includes/header.php';
?>

<p>Function is a self contained block of statements that can be used repeatedly in a program.</p>

<p>Syntax:
<pre>
function functionName ($parameter1, $parameter2) {
 // code to be executed... containing parameters $parameter1 + $parameter2;
 // return $value;
}

// Function call
functionName(argument1, argument2);
</pre>
</p>

<ul>
    <li>Keyword: <strong>function</strong></li>
    <li>Function name can be anything but meaningful name is more sensible.</li>
    <li>Function can have as many parameters as needed, separated by <strong>,</strong> (comma)</li>
    <li>Inside the function (codeblock) these parameters are available just like regular variables.</li>
    <li>Passign an argument can be made optional:<br>
    &#x279C A default value can be assigned to a parameter: <code>function awesomeFunction($value = true)</code><br>
    &#x279C If no argument is passed when calling the function, default value(s) is used</li>
    <li>When calling the function, arguments (= values) replacing the parameters are passed inside <strong>( )</strong>, the brackets</li>
    <li><strong>Any variables declared inside the function are not available outside of it</strong><br>
    &#x279C To access data outside a function, the value needs to be returned<br>
    &#x279C Use <strong>return</strong> statement followed by the returned <strong>$value</strong><br>
    &#x279C Any code within the function placed <strong>after</strong> return statement isn't executed.</li>
    
    <li>To access a returned value:
        <ul>
            <li>Call it directly: <code>echo functionName();</code></li>
            <li>Assign it to a variable: <code>$newVariable = functionName();</code></li>
        </ul>
    </li>
    <></>

</ul>

<hr>

<?php showMessage('Leila'); ?><br>
<?php showMessage(); ?>

<?php require 'includes/footer.php'; ?>