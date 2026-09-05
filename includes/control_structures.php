
<h3>Control Strucures</h3>
<?php 
   

    $bool = true;
    $a = 1;
    $b = 4;

    //This is a Match Expression
    $result = match ($a) {
        1, 3, 5 => "Var is equal to one!",
        2 => "Var is equal to Two!",
        default => "No match",
    };

    echo $result;

    /*switch ($a) {
        case 1:
            echo "The first case is correct.";
            break;
        case 3:
            echo "The Second case is correct.";
            break;
        default: 
            echo "None were true.";
    }
    
    echo "<br>";


    if ($a < $b && !$bool) {
        echo "First condition is true!";
    }
    else if ($a < $b && $bool) {
        echo "Second condition is true!";
    } else {
        echo "None were true.";
    }*/
        
    ?>