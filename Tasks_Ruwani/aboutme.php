<?php include 'header.php'; ?>

<h2>About Us</h2>

<script>
document.write("Hello World")
window.alert("This is an alert box")
</script>

<noscript>
If Javascript is n0t enabled this will be displayed so userss know they need to enable js.
</noscript>

<script>
    function hello()
    {
    document.write("This is after the page has loaded")

    }
    
</script>

<button onclick = "hello()" >Click Me</button>

<?php include 'footer.php'; ?>