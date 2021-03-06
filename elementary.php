<?php
 
 $pagetitle = "PHP - Elementary";
 $creation_date = "2021-01-24";
 $edit_date = "2021-02-11";
 
 require('includes/header.php');
         
 ?>

    <p>*Tip: To escape put a \ infront of the escaped character*</p>

    <p>&#x279C It is common to place variable assignments on top of the code, above <html> 


    <h2>Variables</h2>
    <ul>
        <li>Variables are containers that hold some information</li> 
        <li>string, numbers (integers, floats), boolean (true(=1) or false(=0)), null = no value (has been assigned, or null is assigned)</li>
        <li> SYNTAX: '$name_of_the_variable = "value"'</li>
        <li>Variables are Case Sensitive</li>
    </ul>

        <?php
        $message = "Hello again!";

            echo $message;

        $count = 3;
        $price = 1.99;

        ?>

    <h3>Inserting variables into a string</h3>
<pre>echo "Hello " . $name;</pre>
    <span><pre>echo "Hello $name";</pre> &#x279C Variable interpolation works with " around the string</span>
    <span><pre>echo "Hello {$name}alistic;</pre> &#x279C Use curly braces when it's not clear where the variale ends</span> 

    <h2>var_dump() -method</h2>
    <ul>
        <li>Print out the details of the variable in the browser; useful to see what variable contains</li>
        <li>Accepts multiple values as arguments, separated with ,(comma)</li>
    </ul>
        <?php
        var_dump($message);
        var_dump($count);
        var_dump($price);

            echo "<br>";

        $is_admin = true;
        $data = null;

        var_dump($is_admin, $data);

        echo "<br>";
        ?>

    <h2>Using operators</h2>

    <h3>numbers</h3> 
    <p>&#x279C Arithmetic operators</p>
    <a href="https://www.php.net/manual/en/language.operators.arithmetic.php">PHP Manual - Arithmetic operators</a>
    <br><br>

        <?php
        $price = 2.95;
        $quantity = 3;
        var_dump($price * $quantity);

        echo "<br>";
        ?>

    <h3>String operators</h3> 
    <a href="https://www.php.net/manual/en/language.operators.string.php">PHP Manual - String operators</a>
    <p>'.' &#x279C concatenation operator</p>
    <p>'.=' &#x279C concatenation assignment operator</p>
    <p>Alert! String that contains a number is used as a number when connected to a number -variable with arithmetic operator</p>


        <?php
        $message = "Hello";
        $name = "Stardust";

            echo $message." ".$name."<br>";

        $price = "150";

        $price = $price * $quantity;

        var_dump($price);
        ?>

    <h3>Boolean</h3>
    <p>&#x279C Logical operators</p>
    <a href="https://www.php.net/manual/en/language.operators.logical.php">PHP Manual - Logical operators</a>

    <p>&& &#x279C and</p>
    <p>|| &#x279C or </p>
    <p>! &#x279C not</p>

    <h2>Comments</h2>
    <p>phpDocs syntax makes it easier to interpret what functions do<br>
    &#x279C <a href="https://docs.phpdoc.org/latest/guide/getting-started/index.html">phpDocumentor</a>
    </p>

    <h2>HTML Entities - Special Characters</h2>
    <p>An HTML entity is a piece of text ("string") that begins with <strong>&</strong> (ampersand) and ends with <strong>;</strong> (semicolon).</p>
    <p>Entities are used to display reserved characters <strong>which would otherwise be interpreted as HTML code</strong>, and invisible characters like non-breaking spaces.</p>
    <p>Reserved special HTML characters are parsed as HTML code. To display them as text, corresponding character entity must be used. </p>
    <ul>
        <li>&amp; &#x279C &amp;amp;</li> <!-- & -->
        <li>&lt; &#x279C &amp;lt;</li> <!-- < -->
        <li>&gt; &#x279C &amp;gt;</li> <!-- > -->
        <li>&quot; &#x279C &amp;quot;</li> <!-- " --> 
    </ul>
    <p>&#x279C <a href="https://html.spec.whatwg.org/multipage/named-characters.html#named-character-references">Updated list of HTML named characters</a></p>

    <?php require('includes/footer.php'); ?>