<h3>ARRAYS</h3>
    <?php 
    $fruits = [
        "Apple", 
        "Banana", 
        "Cherry",
    ];

    /*$fruits[1] = "Orange";*/ // Adds Orange to position 3 if empty or replaces if integer <2 is given

    /*array_splice($fruits, 0, 1); // Removes position 1 "Apple" making position 2 the current 1 

    echo $fruits[1];*/
    

    echo "<br>";
    echo "<br>";
    
    /*!*/echo "<p><b>Splice Mango into position 2</b></p>";
    array_splice($fruits, 2, 0, "Mango"); // starts at position 2 "Cherry" making Mango the current 2 
    //echo $fruits[1];
    print_r($fruits);

    echo "<br>";
    echo "<br>";
    /*!*/echo "<p><b>array_push</b></p>"; 
    array_push($fruits, "Mangu"); // Adds Mangu to end of array. Only works for indexed arrays
    print_r($fruits);

    ?>

    <?php
    echo "<br>";
    echo "<br>";
    /*!*/echo "<p><b>Associative Array</b></p>"; 
    //Associative Array assigns a string as a key instead of numbers
    $tasks = [
        "laundry" => "Daniel",
        "trash" => "Frida",
        "vacuum" => "Basse",
        "dishes" => "Bella" 
    ];
    echo "<br>";
    echo $tasks["laundry"];

    echo "<br>";
    echo "<br>";
    echo "<p>Print Example -------- </p>"; 
    print_r($tasks); //for developers

    echo "<br>";
    echo "<br>";
    /*!*/echo "<p>Data Count for tasks array -------- </p>"; 
    echo count($tasks); //good for seeing how much data is returned from database

    echo "<br>";
    echo "<br>";
    /*!*/echo "<p>Sorts tasks array Alphabetically / returns true -------- </p>"; 
    echo sort($tasks); //Sorts array alphabetically. This is known as an indexed array
    print_r($tasks);

    echo "<br>";
    echo "<br>";
    /*!*/echo "<p>Adds Dusting task to end of array-------- </p>"; 
    $tasks["dusting"] = "Tala"; //Adds Dusting task to end of array. works for associative arrays
    print_r($tasks);

    ?>

    <?php
    echo "<br>";
    echo "<br>";
    /*!*/echo "<p>Multi-Dim Array -------- </p>"; 

    $food = [
        array("burgers", "fries"),
        "salad",
        "tofo"
    ];
    
    echo $food[0][1];
    ?>