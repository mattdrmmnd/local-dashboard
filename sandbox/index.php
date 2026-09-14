<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>
<body>
    
<a style="text-decoration: none;" href="../">Dashboard</a>
<br>

<?php 
    $slang = "Word";
    $toggle = 0; // Change to 1 to toggle

    function greeting(string $slang)
    {
        
        global $toggle;

        if ($toggle) {

           echo "<p> Say " . $slang . " !</p>";

        } else {

        $slang = "Hello";
        echo "<p> Say " . $slang . " !</p>";
        }
    }

    greeting($slang);

?>




</body>
</html>