<h3>Built in FUNCTIONS</h3>

    <?php 
    
    $string = "Hello World!";

    $number = -5.5;

    $array = ["bmw", "ferrari", "porsce"];

    $array1 = ["mercedes"];

    //print "line: " . __LINE__; 
    echo strlen($string);
    echo "<br>";
    
    echo strpos($string, "Wo");
    echo "<br>";
    
    echo str_replace("World", "Matt", $string);
    echo "<br>";

    echo strtolower($string);
    echo "<br>";    

    echo strtoupper($string);
    echo "<br>";

    echo substr($string, 2, 2);
    echo "<br>";

    echo substr($string, 2, -2);
    echo "<br>";

    print_r(explode(" ", $string)); //cant echo here because exploded portion held in an array / use print_r
    echo "<br>";

    echo abs($number);
    echo "<br>";

    echo round($number);
    echo "<br>";

    echo pow(2, 3);
    echo "<br>";

    echo sqrt(2);
    echo "<br>";

    echo rand(1, 100);
    echo "<br>";

    //Arrays

    echo count($array); // very useful when working with a db
    echo "<br>";

    echo is_array($array); 
    echo "<br>";

    echo array_push($array, "acura");
    print_r($array); 
    echo "<br>";

    echo array_pop($array);
    print_r($array); 
    echo "<br>";

    print_r(array_reverse($array));
    echo "<br>";

    print_r(array_merge($array, $array1));
    echo "<br>";

    //Dates and time

    echo date("Y-m-d H:i:s");
    echo "<br>";

    echo time();
    
    echo "<br>";

    
    "<br>";
?>