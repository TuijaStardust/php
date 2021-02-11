<?php
 
 $pagetitle = "PHP - HTML Forms & Validation";
 $creation_date = "2021-04-01";
 //$edit_date = "";
 
require('includes/header.php');
         
?> 

    <p>HTML forms are used to retrieve data <strong>from</strong> the user.</p>
    <p>A form is made of controls &#x279C <strong>inputs</strong></p>

    <form> 
    <!-- After submitting the form defined page loads with the form data attached to the query string--> 
        <input name="search">

        <button>Send</button>
    </form>

    <p>(Default $_GET method form data array printed out after sending:)</p>
    <?php var_dump($_GET)?>

    <p>&#x279C Form data creates an associative array where the <strong>name</strong> attribute is used as the key and input value (or value assigned with a value attribute) as the value</p>
    <p>&#x279C All values are submitted as a string</p>

    <h2>Attributes for form element</h2>
    <ul>
        <li><h3>action="file_name.php"</h3>
            <ul>
                <li>Syntax example:<br>
                    <code>form action="process_form.php"</code>
                </li>
                <li>Default setting: action sends data via "get" ($_GET) to defined file when method is not defined</li>
                <li>If an action isn't specified to a form, the form data is submitted to itself (the same page where the form is)<br>
                &#x279C Browser acts like the page is requested again with the input data attached to the query string
                </li>
                <li></li>
            </ul>
        </li>

        <li><h3>method="get" / "post"</h3>
            <ul>
                <li>Default method for sending data is <strong>get</strong> &#x279C data are sent in the query string</li>
                <li><strong>"post"</strong> sends data separately from the query string<br>
                The array of values can be accessed with $_POST superglobal</li>
                <li>"post" is good for sending sensitive data and/or inserting/updating/deleting data in database</li>
                <li>
                    <p>Which method should be used?</p>

                    <table>
                        <tr>
                            <th>Is it...</th>
                            <th>GET</th>
                            <th>POST</th>
                        </tr>
                        <tr>
                            <td>bookmarkable?</td>
                            <td>Yes</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>contains sensitive data?</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>size limited?</td>
                            <td>Yes</td>
                            <td>No</td>
                        </tr>
                    </table>
                </li>
            </ul>
        </li>
    </ul>

    
    <h2>Attributes for form elements</h2>
    <ul>
        <li><h3>name=""</h3>
            <ul>
                <li>The value of the name attribute is used as the index (key) in $_GET or $_POST array</li>
                <li>Meaningful, unique name, spaces not allowed</li>
                <li></li>
            </ul>
        </li>

        <li><h3>type=""</h3>
            <ul>
                <li>Specifies what type of input control is shown</li>
                <li><a href="https://devdocs.io/html/element/input">Listing of input types available</a></li>
                <li>Default type is simple line of text</li>
                <li>Each type have their own type of validation</li>
                <li>On mobile device certain input types change the on-screen keyboard<br>
                    <a href="http://mobileinputtypes.com/">&#x279C Mobile input types</a> </li>
                <li>Be aware of the current browser compatibility when using input types<br> 
                &#x279C If input type is not supported, it will be replaced with a regular text input</li>
            </ul>
        </li>

        <li><h3>value=""</h3>
            <ul>
                <li>Pre-defined value that is sent unless user changes it in the form field</li>
                <li>Default value</li>
                <li>Can't be added to image, button and submit types.</li>
            </ul>
        </li>

        <li><h3>placeholder=""</h3>
            <ul>
                <li>Provides a hint of what the expected value of the field is</li>
                <li>Placeholder text disappears as soon as something else is typed into the field</li>
                <li>Placeholder text won't be sent with the form data if the field is left empty</li>
            </ul>
        </li>

        <li><h3>readonly</h3>
            <ul>
                <li>Input is shown in the form but user can't change the value<br>
                &#x279C value is sent with the form data</li>
                <li>(Can't be added to the select control)</li>
            </ul>
        </li>

        <li><h3>disable</h3>
            <ul>
                <li>Input is shown in the form but user can't change the value<br>
                &#x279C value is not sent with the form data</li>
                <li>(Can be added to the select control)</li>
            </ul>
        </li>

        <li><h3>autofocus</h3>
            <ul>
                <li>The control with the autofocus attribute is the one that has the focus (cursor) when the page/form is first loaded<br>
                &#x279C Data can be entered right away</li>
            </ul>
        </li>

    </ul>

    <h2>Other form elements</h2>
    <p>&#x279C All elements need the name attribute</p>
    <ul>
        <li><h3>textarea</h3>
            <ul>
                <li>Attributes: <code>rows="", columns=""</code><br>
                &#x279C One way of defining sizing of textbox; Styling (size) in the css stylesheet is recommended
                </li>
                <li></li>
            </ul>
        </li>

        <li><h3>select - optgroup - option</h3>
            <ul>
                <li><strong>select</strong> element wraps in a series of <strong>option</strong> elements that can be grouped with <strong>optgroup</strong> tag</li>
                <li>Fixed list of options</li>
                <li>First value in the list is the default option &#x279C to define default option, add <strong>selected</strong> attribute to the chosen option </li>
                <li>Each option element needs a value="" attribute, which is submitted if the option is chosen</li>
                <li>multiple option values can be chosen in select element<br>
                    To access multiple values, <strong>[ ]</strong> (empty array) needs to be added to the name attribute value (name="options[]")</li>
                <li>&#x279C Using checkboxes to choose multiple values is better UX</li>
                <li>Options can be separated into "optgroups" &#x279C label attribute acts as a title for the grouping</li>
            
            </ul>
        </li>

        <li><h3>Checkboxes</h3>
            <ul>
                <li><code>input type="checkbox" name="toggle"</code></li>
                <li>Toggle; checked value is "on", unchecked sends no value</li>
                <li>Value can be specified with value attribute; (value="unicorn")</li>
                <li>Checkbox can be checked by default with <strong>checked</strong> attribute</li>
                <li>How checkboxed data is added to an array:
                    <ul>
                        <li><code>< input type="checkbox" name="red"> Red</code><br>
                        &#x279C resulting array: ['red'] => ['on']<br>
                        &#x279C all inputs have unique names, and value is toggled on/empty   
                        </li>
                        <li><code>< input type="checkbox" name="colours[]" value="red"> Red</code><br>
                        &#x279C resulting array:<code> ['colours'] => array {[0] => 'red'}</code><br>
                        &#x279C an array where the index/key == name attribute; value is an array of checked values
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><h3>Radio buttons</h3>
            <ul>
                <li><code>< input type="radio" name="colour" value="green"> Green</code></li>
                <li>Used when one answer chosen from a list of options</li>
                <li>Each input options of a radio button group have the same name attribute and a unique value<br>
                &#x279C Only one button can be selected</li>
                <li>&#x279C resulting array:<code> ['colour'] => "green"</code></li>
                <li>To check a value by default, add <strong>checked</strong> attribute to default input</li>
            </ul>
        </li>
    </ul>
        
    <h2>Adding (selectable) label to checkbox / radio button:</h2>
        <p><strong>Accessibility:</strong> Screenreaders etc. use the label to describe the control</p>
        <p>Labels describe form elements input controls.</p>
        <p>Adding a label:</p>
            <ol>
                <li>Wrap the whole <strong>checkbox/radio</strong> button input tag inside a <strong>label</strong> element<br>
                <code>< label>< input type="checkbox" name="green">Green< /label></code></li>
                <li>Assign id="" attribute to input element; assign same id value as for="" attribute to the label element<br>
                <code>< label <strong>for="color_green"</strong>>Green < /label></code><br>
                <code>< input <strong>id="color_green"</strong> name="green"></code></li>
            </ol>

    <h2>Organizing the form with fieldsets</h2>
    <p>Fieldsets are used to group together related form controls into sections</p>
    <p>This is an optional feature designed to improve the UX.</p>
    <p>Syntax:
    <pre>
    < fieldset>
        < legend>Title of the fieldset< /legend>

        // input elements
        
    < /fieldset>
    </pre>
    </p>
    <p>&#x279C Related input elements are wrapped inside a fieldset element.</p>
    <p>&#x279C legend element is the title tag for a fieldset<br>
    Legends improve accessibility; screenreaders read descriptive legends before labels.</p>

    <h2>Validation</h2>
    <p>Input fields have validation rules for the values that are entered into the fields<br>
    &#x279C if the entered values don't match the fields value types, the form can't be sent and the browser gives a validation error message.
    <p>An empty value is accepted as valid unless the input field has <strong>required</strong> attribute.</p>
    <p>A certain pattern for valid value can be specified with <strong>pattern=""</strong> attribute<br>
        <ul>
            <li><a href="https://www.html5pattern.com/">A listing of commonly used regular expression patterns</a></li>
            <li>The pattern attribute can be used with text, search, url, tel, email and password fields.</li>
        </ul>
    </p>
    <p>The validation error message can be made more clear using the <strong>title="Please do this... hint text"</strong> attribute (... but browser defines the <em>styling</em> of the message)</p>
    <p>HTML5 validation is supported by most modern browsers</p>
    <p>Adding <strong>novalidate</strong> attribute to the form element disables the automatic validation<br>
    &#x279C input type mobile features are <strong>not</strong> disabled</p>

    <hr>

    <h2>Sample form</h2>
    <form method="post">
        <div>
            text: <input type="text" name="name">
        </div>
        <div>
            <!-- Default text is placed between the textarea tags -->
            textarea: <textarea name="content" rows="5" columns="2">Awesome!</textarea>
        </div>
        <div>
            password: <input type="password" name="password">
        </div>
        <div>
            tel: <input type="tel" name="telephone">
        </div>
        <div>
            url <input type="url" name="web_address">
        </div>
        <div>
            date: <input type="date" name="date">
        </div>
        <div>
            time: <input type="time" name="time">
        </div>
        <div>
            week: <input type="week" name="week">
        </div>
        <div>
            color: <input type="color" name="color">
        </div>
        <div>
            email: <input type="email" name="email">
        </div>
        <div>
            month: <input type="month" name="month">
        </div>
        <div>
            range: <input type="range" name="range">
        </div>
        <div>
            <!-- Value can't be modified, hidden is used when data that user doesn't need to see is sent -->
            hidden: <input type="hidden" name="hidden" value="Super secret">
            <!-- Don't use this for anything sensitive; it shows up in the source code... -->
        </div>
        <div>
            <!-- For the number input, min- max range can be defined with min & max attributes-->
            number: <input type="number" name="number" min="1" max="100">
        </div>
        <div>
            search: <input type="search" name="search">
        </div>
        <div>
            datetime-local: <input type="datetime-local" name="datetime">
        </div>

        <div>
            <select name="country">
                <optgroup label="Europe">
                    <option value="finland">Finland</option>
                    <option value="sweden">Sweden</option>
                    <option value="norway">Norway</option>
                </optgroup>
                <optgroup label="America">
                    <option value="canada">Canada</option>
                    <option value="mexico">Mexico</option>
                    <option value="usa">USA</option>
                </optgroup>
            </select>
        </div>
        
        <button>Send</button>
    </form>

    <p>Post method form data array printed out after sending:</p>
    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        var_dump($_POST);
    }

    ?>


<?php require('includes/footer.php'); ?>