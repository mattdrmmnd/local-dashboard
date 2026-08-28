<?php
declare(strict_types=1);
require_once 'config.php';

//Sessions Example
//sets a cookie
//*** session_start();

//$_SESSION["username"] = "optmzd";
//Clears data for one or all sessions respectively
//unset($_SESSION["username"]); 
//session_unset();

//Stops session from running again
//session_destroy();

$selector = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selector"])) {
    $selector = htmlspecialchars($_POST["selector"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sandbox</title>
</head>
<body>

    <h3>Welcome Back</h3>
    <a href="../login_system/">Login</a>
    <br>
    <?php
    //echo $_SESSION["username"];
    echo "<br>";
    date_default_timezone_set('America/Phoenix');
    echo date("m.d.Y");
    ?>
    <br><br>
    <a href="http://localhost/my_website/session_example.php">Session example</a>
    <p>--------------------------------------</p>

   
    <h3>PHP Sandbox</h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <select name="selector">
            <option value="instructions">Select a topic...</option>
            <option value="arrays" <?php echo $selector === "arrays" ? "selected" : ""; ?>>Arrays</option>
            <option value="built_in_functions" <?php echo $selector === "built_in_functions" ? "selected" : ""; ?>>Built In Functions</option>
            <option value="constants" <?php echo $selector === "constants" ? "selected" : ""; ?>>Constants</option>
            <option value="control_structures" <?php echo $selector === "control_structures" ? "selected" : ""; ?>>Control Structures</option>
            <option value="crud" <?php echo $selector === "crud" ? "selected" : ""; ?>>CRUD</option>
            <option value="hash_gen" <?php echo $selector === "hash_gen" ? "selected" : ""; ?>>Hash Gen</option>
            <option value="hash_pwd" <?php echo $selector === "hash_pwd" ? "selected" : ""; ?>>Hash Pwd</option>
            <option value="intro" <?php echo $selector === "intro" ? "selected" : ""; ?>>Intro</option>
            <option value="links" <?php echo $selector === "links" ? "selected" : ""; ?>>Links</option>
            <option value="loops" <?php echo $selector === "loops" ? "selected" : ""; ?>>Loops</option>
            <option value="operators" <?php echo $selector === "operators" ? "selected" : ""; ?>>Operators</option>
            <option value="scopes" <?php echo $selector === "scopes" ? "selected" : ""; ?>>Scopes</option>
            <option value="server" <?php echo $selector === "server" ? "selected" : ""; ?>>Server</option>
            <option value="sql" <?php echo $selector === "sql" ? "selected" : ""; ?>>SQL queries</option>
            <option value="user_defined_functions" <?php echo $selector === "user_defined_functions" ? "selected" : ""; ?>>User Defined Functions</option>
        </select>
        <button>Go</button>
    </form>

    <br><br>
    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">Reset</a>
    <br><br>
    <?php

    switch ($selector) {
        case "arrays":
            include "includes/arrays.php";
            break;
        case "built_in_functions":
            include "includes/built_in_functions.php";
            break;
        case "constants":
            include "includes/constants.php";
            break;
        case "control_structures":
            include "includes/control_structures.php";
            break;
        case "crud":
            include "includes/crud.php";
            break;
        case "intro":
            include "includes/intro.php";
            break;
        case "hash_gen":
            include "includes/hashgen.inc.php";
            break;
        case "hash_pwd":
            include "includes/hashpwd.inc.php";
            break;
        case "links":
            include "includes/links.php"; /* My Applications */
            break;
        case "loops":
            include "includes/loops.php";
            break;
        case "operators":
            include "includes/operators.php";
            break;
        case "scopes":
            include "includes/scopes.php";
            break;
        case "server":
            include "includes/server.php";
            break;
        case "sql":
            include "includes/sql.php";
            break;   
        case "user_defined_functions":
            include "includes/user_defined_functions.php";
            break;
        default:
            //echo "<p>Select a topic above to get started.</p>";
            include "includes/links.php"; /* My Applications */
    }
    ?>

    

</body>
</html>