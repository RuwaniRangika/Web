<?php
$title = "Your Information";
include "header.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];

echo "Hello " . $fname . " " . $lname . ", You are welcome to my site.";

include 'footer.php';
?>