<h3>Operators</h3>
    <?php 

    // String operator
    echo "<p><b>String Operator</b></p>";
    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;

    echo $c;

    echo "<br>";
    echo "<br>";
    echo "<p><b>Arithmetic operator</b></p>";
    // Arithmetic operator
    echo (1 + 2) * 4;
    
    echo "<br>";
    echo "<br>";
    echo "<p><b>Assignment operator</b></p>";
    // Assignment operator
    $a = 2;
    $a += 4;

    echo $a;

    echo "<br>";
    echo "<br>";
    echo "<p><b>Comparison operator</b></p>";
    // Comparison operator


    $a = 2;
    $b = 4;

    $c = 2;
    $d = 2;


    if ($a == $b || $c == $d) { 
        echo "This statement is true!";

    } else {
        echo "This statement is false bitch!";
    }

    echo "<br>";
    echo "<br>";
    echo "<p><b>Incrementing/decrementing operators</b></p>";
    // Incrementing/decrementing operators
    $g = 1;
    echo ++$g;

    ?>