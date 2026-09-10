<h3>SCOPES</h3>

    <?php 
    $test = "Matt";

    function myFunction($test) // Parameter Allows global variable to be used locally within a function
    {
        return $test; 
    }

    // Returns Global variable from within a function
    echo myFunction($test);
    echo "<br>";


    //////////////////

    $test = "Abraham";

    function myNewFunction()
    {
        // Set a global variable 
        global $test;

        return $test; 
    }

    // Returns Global variable from within a function
    echo myNewFunction();
    echo "<br>";


    //////////////////

    // This is a more rarer case of passing in a variable
    $tested = "Zen";

    function myNewerFunction()
    {
        // Use a Super GLobal, add tested as an array not a variable
        return $GLOBALS["tested"]; 
    }

    echo myNewerFunction();
    echo "<br>";

    //////////////////

    function staticFunction() 
    {
        // Declare a static variable
        //$staticVar = 0; //toggle to see output difference
        static $staticVar = 0;

        // Increment the static variable
        $staticVar++;

        return $staticVar;
    }

        // A static variable causes the function to not reset each time it is used
        echo staticFunction();
        echo "<br>";
        echo staticFunction();


    //////////////////

    $scopes = ["Global", "Local", "Class", "Static" ];
    $rand_keys = array_rand($scopes, 4);
    shuffle($rand_keys);
    ?>

    <p><b>Refresh to see a new Scope Type:</b> <?php echo $scopes[$rand_keys[0]] ?></p>