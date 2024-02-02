<?php 
    $title = "Exercise 4: Control flow and loops";
    include 'header.php'; ?>   
        
       
            <div class="row">
                <div class="textOnVideo col">
                    <h2> Exercise 4: Control flow and loops</h2>
<br>
    <br>
    <br>
        <h3>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.
             (18 or more than 18 years is eligible for voting, use form to get user input).</h3>

        
        <form action="" method="post">
        Name:<input type="text"  name="name" placeholder="Enter your name" required><br><br>
        Age:<input type="text"  name="age" placeholder="Enter your age" required><br><br>       
        <input type="submit" value="Check Eligibility">
        </form>

        <?php
        // If-Else Script
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $age = $_POST["age"];

            if ($age >= 18) {
                echo "$name, you are eligible for voting!";
            } else {
                echo "$name, sorry, you are not eligible for voting.";
            }
        }
        ?>
        <br>
        <br>
        <br>

        <hr>

        <h3>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
             depending on whether it's August or not:</h3>

        <?php
        $currentMonth = date("F");
        switch ($currentMonth) {
            case "August":
                echo "It's August, so it's still holiday.";
                break;
            default:
                echo "Not August, This is $currentMonth so I don't have any holidays.";
        }
        ?>

        <hr>

        <h3>4.4  For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
        <form action="" method="post">
        Number:<input type="text"  name="number" placeholder="Enter your number" required><br><br>

            <input type="submit" value="Generate Multiplication Table">
        </form>


       
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["number"];
            echo "<h3>Multiplication Table for $n</h3>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $n * $i;
                echo "$n x $i = $result <br>";
            }
        }
        ?>
        <br><br><br>
 <h3> 4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. 
            use form to get user input</h3>
        <hr>

        <!-- While Loop -->
        <form action="" method="post">
            <label for="range">Enter a number for the range:</label>
            <input type="number" name="range" required>

            <input type="submit" value="Print Numbers">
        </form>

        <?php
        // While Loop Script
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $range = $_POST["range"];
            echo "<h3>Numbers from 1 to $range</h3>";
            $counter = 1;
            while ($counter <= $range) {
                echo "$counter ";
                $counter++;
            }
        }
        ?>

        <hr>

        <h3>4.5 Foreach Loop: Write a PHP script that will print all the elements of an array.
             $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
        <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        echo "<h3>Array Elements</h3>";
        echo "<ul>";
        foreach ($myarray as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
        ?>
   
   
   <?php include 'footer.php'; ?>


