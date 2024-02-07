<?php
$title = "Exercise 4: Control flow and loops";

include 'header.php'; ?>

<h3> 4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.
 (18 or more than 18 years is eligible for voting, use form to get user input).</h3>

 <Form method ="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for ="name">Name: </label>
    <input type = "text" id ="name" name ="name"required>

    <label for = "age"> Age: </label>
    <input type = "number" id="age" name="age"required>

    <button type = "submit">check Eligibility</button>
    </form>
    

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = htmlspecialchars($_POST["name"]);
        $age = intval($_POST["age"]);

        // Check eligibility
        if ($age >= 18) {
            echo "<p>Hello,You are eligible for voting </p> ";
        } else {
            echo "<p>You are not eligible for voting yet </p>";
        }

        
    }
    ?>
    
    <h3>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
         depending on whether it's August or not:It's August, so it's still holiday.Not August, this is Month-name 
         so I don't have any holidays Hint: You can use date(F) function to get the current month name. 
         Check Date function from the php manual page. </h3>

    <?php
    
    $currentMonth = date("F");

        switch ($currentMonth) {
        case "August":
            $response = "It's August, so it's still holiday.";
            break;
        default:
            $response = "Not August, this is $currentMonth so I don't have any holidays.";
            break;
    }
    ?>

    <h3>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>

        
    <form  method= "POST"> 
        Enter a number:
        <input type="text" name="number">

        <input type="submit"
        value="Get Multiplication Table">

    </form>

    <?php
    if($_POST){
        $num = $_POST["number"];

        for ($n=1; $n<=12; $n++){
            echo ("<p style='text-align: center;'>$num"
                . "x" . "$n" . " = "
                . $num * $n . "</p>
            ");    
        }



    }
?>

<h3> 4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

    <form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Print Numbers</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["number"]);   
        echo "<h3>Numbers from 1 to $n:</h3>";
        echo "<ul>";
        $i = 1;
        while ($i <= $n) {
            echo "<li>$i</li>";
            $i++;
        }
        echo "</ul>";
    }
    ?>

<h3>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. 
        $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>

        <?php
    
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");


    echo "<p>Array element5:</p>";
    echo "<ul>";

    foreach ($myarray as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
    ?>

<?php include 'footer.php'; ?>