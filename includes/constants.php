<h3>CONSTANTS</h3>

    <?php
    // Use Capital letters to define a constant as good practice
    // Always define constantd at the top of the script

    echo "<h4>--define()</h4>";
    define("PI", 3.14);
    define("IS_ADMIN", true);

    echo PI;
    echo "<br>";

    echo IS_ADMIN;

    ///////////////////
    
    function const_example() {
        echo PI;
    }
    echo "<br>";
    echo PI;

    echo "<br>";
    ///////////////////

    echo "<h4>--constant()</h4>";

    // Use constant() only when the name isn't known until runtime
    $equation = constant("PI");

    echo $equation
    ?>


