<?php 
    $title ="Exercise 3";
    $h1 = "Exercise 3: Variable, Strings & Operators";
    include 'header.php'; 
?>

        <section id="plan">
            <div class="tourPlan">
                <div class="row">
                    <div class="col text-center">
                        <h1><?php echo $h1 ?></h1>
                    </div>
                </div>

                <h3>01. Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same 
                    layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

                <br>
                <h3>02. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo 
                    statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>
                <div class="container mt-2">
                    <div class="row tourPlanCards">
                        <div class="col">
                            <form name="simpleForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" required><br>
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" required><br>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    
                        <div class="col">
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $firstName = $_POST['firstName'];
                                    $lastName = $_POST['lastName'];
                                    echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>03. Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your tag.</h3>
                    <div class="row">
                        <div class="col-md-3 m-4">
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
                        </div>
                    </div>
                    <br>
                    <h3>04. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table 
                        in Exercise 1. If you wish, you can use the same table.</h3>
                    <!-- Bootstrap Table -->
                    <div class="row">
                        <div class="col m-4">
                            <table class="table mt-4">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">S.n.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jhon</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Smith</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>David</td>
                                        <td>5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <h3>05. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
                        Join them together and print the length of the string.</h3>

                   
                        <?php
                            $str1 = "Hello";
                            $str2 = "World";
                            $joinedString = $str1 . " " . $str2;
                            echo "<h4>Joined String: $joinedString</h4>";
                        ?>
                    <br>
                    <h3>06. Number Addition: Write a script to add up the numbers: 298, 234, 46. Use 
                        variables to store these numbers and an echo statement to output your answer.</h3>
                    
                        <?php
                            $num1 = 298;
                            $num2 = 234;
                            $num3 = 46;
                            $sum = $num1 + $num2 + $num3; 
                            echo "<h4>Sum of Numbers: $sum</h4>";
                        ?>
                    <br>
                    <h3>07. Browser Detection: Write a PHP script to detect the 
                        browser being used to view your pages. Hint: Use predefined variables: $_SERVER.</h3>

                    <?php 
                        // Get the user agent first
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];

                        // Then Detect the browser based on the user agent
                        if (preg_match('/Firefox/i', $user_agent)) {
                            $browser = 'Mozilla Firefox';
                        } elseif (preg_match('/MSIE/i', $user_agent)) {
                            $browser = 'Internet Explorer';
                        } elseif (preg_match('/Chrome/i', $user_agent)) {
                            $browser = 'Google Chrome';
                        } elseif (preg_match('/Safari/i', $user_agent)) {
                            $browser = 'Apple Safari';
                        } elseif (preg_match('/Opera/i', $user_agent)) {
                            $browser = 'Opera';
                        } else {
                            $browser = 'Unknown';
                        }

                        // Display the identified browser
                        echo "<h4>Detected browser: $browser</h4>";
                    ?>
                    <br>
                    <h3>08. File Modification Time: Write a PHP script in the footer section of your 
                        universal footer to display the last modification time of a file. Hint: Use predefined 
                        variable $_SERVER, basename function  to get the filename , filetime function to get the 
                        last modified time & date function to print the date and time</h3>
                </div>
        </section>
<?php include 'footer.php'; ?>