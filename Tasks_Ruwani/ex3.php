<?php 
    $title = "Exercise 3: Variable, Strings & Operators";
    include 'header.php'; ?>   
        
       
            <div class="row">
                <div class="textOnVideo col">
                    <h2> Exercise 3: Variable, Strings & Operators</h2>
</head>

<br>
<body>
 <h3>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
         Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” 
         inside an <h3> tag. Table & Form Guide
</h3>
  
        <form method="post" action= <?php htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        FirstName:<input type="text"  name="firstName" placeholder="Enter your first name" required><br><br>
        Lastname:<input type="text"  name="lastName" placeholder="Enter your last name" required><br><br>       
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        // PHP code to handle form submission and display the greeting
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
        }
        ?>
    
<br>
<br>
<br>

<h3>3.3 Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your tag.</h3>
                
                            <form name="bootstrapForm" class="mt-4">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" name="firstNamewithBootstrap" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="   text" name="lastNamewithBootstrap" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <br>
<br>
<br>
                    <br>
 <h3>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table. 
    BootStrap Cheatsheet</h3>
    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
  
    

    
    <br><br><br>
    <h3>3.5 String Variables: Write a PHP script with two string variables
     ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>      
        <?php
        $str1 = "Hello";
        $str2 = "World";
        $combinedString = $str1 . " " . $str2;
        echo "<h3>Combined String: $combinedString</h3>";
        echo "<p>Length of the String: " . strlen($combinedString) . "</p>";
        ?>
    
<br><br><br>
    <!-- Number Addition Section -->
    
    <h3>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46.
         Use variables to store these numbers and an echo statement to output your answer.</h3>    
        <?php
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;
        $sum = $num1 + $num2 + $num3;
        echo "<h3>Sum of the Numbers: $sum</h3>";
        ?>

<br><br><br>
    <!-- Browser Detection Section -->
  
    <h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages.
         Hint: Use predefined variables: $_SERVER). Predefined Variables</h3>    
        <?php
        $browser = $_SERVER['HTTP_USER_AGENT'];
        echo "<h3>Your Browser: $browser</h3>";
        ?>
   <br>
   <br>
   <br>

    <h3>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get 
        the last modified time & date function to print the date and time Predefined Variables</h3>
    
 


</body>


<?php include 'footer.php'; ?>
        

