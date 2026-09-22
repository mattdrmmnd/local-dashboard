<?php
// Fore demonstration purposes only. This version of Hashing provide a deeper understanding of what Hashing is.
// Refer to hashpwd.inc.php for pratical method of hashing.

//General hashing of sensitive data with salt and pepper, not for password hashing.
//Used for hashing sensitive data like social security numbers, credit card numbers, Name etc.

/*--These lines represent a database--*/
$sensitiveData = "Dmm";
$salt = bin2hex(random_bytes(16)); // Generate a random salt
$pepper = "ASecretPepperString"; // Keyword used to join $salt and make Hash more secure

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;
echo "<br>";



/*--New data submission and hash verification--*/

// Hashing the new data to compare with what is stored in the database
// (Password field) Change Dmm stiring and an error messge will echo
$sensitiveData = "Dmm";

// Create a Hash that will be compared to the stored Hash
$storedSalt = "$salt";
$storedHash = "$hash";
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

//if (hash_equals($storedHash, $verificationHash)) { ---- This is a more secure way to compare hashes, but for demonstration purposes, we will use a simple comparison.

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