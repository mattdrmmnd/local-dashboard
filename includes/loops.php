<h3>Loops</h3>

<p><b>for loop.</b></p>
<?php
// Loop that depends on numbers

for ($i = 0; $i <= 10; $i++) {
    echo "This is iteration number " . $i . "<br>";
}

?>


<br>
<p><b>for loop with variable definition.</b></p>
<?php
// A variable can also be used

$loop_int = 5;

for ($i = 0; $i <= $loop_int; $i++) {
    echo "This is iteration number " . $i . "<br>";
}

?>

<br>
<p><b>while loop / Boolean.</b></p>
<?php
// 

$boolean = true;
while ($boolean) {
    echo $boolean;
    $boolean = false;
}

?>

<br>
<p><b>while loop</b></p>
<?php
// 

$loop = 5;
while ($loop < 10) {
    echo $loop . "<br>" ;
    $loop++;
}

?>

<br>
<p><b>do while loop</b></p>
<?php
// do statements always give a result 1 time at a minimum. 
$loop = 10;
do {
    echo $loop;
    $loop++;
} while ($loop < 10) // code now stops cause this is a false statement

?>


<br>
<p><b>for each loop / indexed array</b></p>
<?php
// Loop one time per data in this indexed array
// Good for grabbing data from the DB and outputting to website
$cars = array("BMW", "Ferrari", "Nissan Z");
foreach ($cars as $car) {
    echo "This is a " . $car . "<br>";
}
?>

<br>
<p><b>for each loop / associative array</b></p>
<?php
// This will output not only the color but the key as well.
$cars = array("BMW" => "Red", "Ferrari" => "Black", "Nissan Z" => "Silver"); 

foreach ($cars as $car => $color) {
    echo "This is a " . $car . ", that is the color of " . $color . "<br>";
}
?>

