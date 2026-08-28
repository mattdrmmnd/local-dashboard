<h3>USER-DEFINED FUNCTIONS</h3>

    <?php

    function sayHello(string $name) 
    {
        return "Hello " . $name . "!";  
    }

    $test = sayHello("123");
    echo $test;

    echo "<br>";      
    //01

    
////////////////////////////
    $tester = "Matthew";
    
    function calculator(int $num01, int $num02) 
    {
       
        global $tester;
        $result = $num01 + $num02;
        //return $result;
        return $tester; 
    }

    $test1 = calculator(2, 5);
    echo $test1;
    echo "<br>";
    ?>

<p>The sum is <?php echo $test1 ?>.</p>