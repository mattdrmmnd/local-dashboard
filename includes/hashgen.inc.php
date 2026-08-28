<?php
//General hashing of sensitive data with salt and pepper, not for password hashing.
//Used for hashing sensitive data like social security numbers, credit card numbers, Name etc.
$sensitiveData = "Dmm";
$salt = bin2hex(random_bytes(16)); // Generate a random salt
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;
echo "<br>";



/*--DATABASE--*/

//Hashing the new data to compare with what is stored in the database
$sensitiveData = "Dmm";

$storedSalt = "$salt";
$storedHash = "$hash";
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

//if (hash_equals($storedHash, $verificationHash)) { ---- This is a more secure way to compare hashes, but for demonstration purposes, we will use a simple comparison.

//With the current if with === an attacker can measure tiny differences in how long the comparison takes to slowly guess the correct hash character by character.

if ($storedHash === $verificationHash) {
    echo "---------------------------------";
    echo "<br>The data is the same as what is stored in the database.";
    echo "<br>";
    echo "<br>$storedHash";
    echo "<br>";
    echo "<br>$verificationHash";
} else {
    echo "<br>The data is different from what is stored in the database.";
    
}