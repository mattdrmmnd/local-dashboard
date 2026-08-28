<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h3>Simple Calculator</h3>
                                                                                                                        
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <input type="number" name="num01" placeholder="Number one">
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="Number two">
    <button>Calculate</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Grab data from inputs
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //Error handlers
        $errors = false;                                                                                                                                                                                

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p>Fill in all fields!</p>";
            $errors = true;
        }

        //Check if these are not numbers
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p>Only write numbers!</p>";
            $errors = true;
        }

        //Calulate the numbers if no errors
        if (!$errors) {
            $value = 0;

            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default: 
                echo "<p>Please check your input!</p>";
                    
            }
            echo "<p>" . $value . "</p>";
        }
    }
    ?>
    <br>
    <a style="text-decoration: none;" href="../">Dashboard</a>

    
</body>
</html>                                                                                                                                                                                                                                                                                                                     