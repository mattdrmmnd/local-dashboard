<h3>Built in FUNCTIONS</h3>

    <?php 

    date_default_timezone_set('America/Phoenix'); //For Date examples Below
    
    $string = "Hello World!";

    $number = -5.5;

    $array = ["bmw", "ferrari", "porsce"];

    $array1 = ["mercedes"];

    //print "line: " . __LINE__; 
    echo "<h4>--String Length</h4>";
    echo strlen($string);
    
    echo "<h4>--String Postion</h4>";
    echo strpos($string, "Wo");
    
    echo "<h4>--String Replace</h4>";
    echo str_replace("World", "Matt", $string);

    echo "<h4>--String to Lower</h4>";
    echo strtolower($string);
    echo "<h4>--String Replace</h4>";  

    echo "<h4>--String to Upper</h4>";
    echo strtoupper($string);
    

    echo "<h4>--Sub String</h4>";
    echo substr($string, 2, 2);
    

    echo "<br>";
    echo substr($string, 2, -2);
    

    echo "<h4>--Explode</h4>";
    print_r(explode(" ", $string)); //cant echo here because exploded portion held in an array / use print_r
    




    //Math
    echo "<br>";
    echo "<br>";
    echo "<h3 style='color: blue;'>Math</h3>";

    echo "<h4>--Absolute</h4>";
    echo abs($number);
    

    echo "<h4>--Round</h4>";
    echo round($number);
    

    echo "<h4>--Exponential Expression / Power of</h4>";
    echo pow(2, 3);
    

    echo "<h4>--Square Root</h4>";
    echo sqrt(16);
    

    echo "<h4>--Random Integer</h4>";
    echo rand(1, 100);
    

    //Arrays
    echo "<br>";
    echo "<br>";
    echo "<h3 style='color: blue;'>Arrays</h3>";

    echo "<h4>--Count</h4>";
    echo count($array); // very useful when working with a db
    

    echo "<h4>--Is Array</h4>";
    echo is_array($array); 
    

    
    echo "<h4>--Array Push</h4>";
    echo array_push($array, "acura");
    print_r($array); 
    

    
    echo "<h4>--Array Pop</h4>";
    echo array_pop($array);
    print_r($array); 
    

    echo "<h4>--Array Reverse</h4>";
    print_r(array_reverse($array));
    

    echo "<h4>--Array Merge</h4>";
    print_r(array_merge($array, $array1));
    

    //Date and time
    echo "<br>";
    echo "<br>";
    echo "<h3 style='color: blue;'>Date and Time</h3>";

    echo "<h4>--Date </h4>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    //echo date_default_timezone_get(); // shows what PHP thinks it is
    
    echo "<h4>--Time Since 1970-01-01 </h4>";
    echo time();

    echo "<h4>--Time as of noon 2026-09-08 </h4>";
    $date = "2026-09-08 12:00:00";
    echo strtotime($date);
    
    
    
    echo "<br>";
?>