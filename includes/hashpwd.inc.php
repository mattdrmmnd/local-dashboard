<?php

// A more simplified version than hashgen.inc.php with passowrd_hash usage

// Password entered into a Sign up field
$pwdSignup = "Drummo";


// Hash the new password
$options = [
    'cost' => 12, // The cost parameter determines the computational cost of hashing. Higher values increase security but also increase processing time.
];

// the "Database"
// PASSWORD_BCRYPT updates automatically for security
// $options has to be set to an array to work with password_hash
$hashedPWD = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

// Password entered into a Login field
$pwdLogin = "Drummo";
echo $pwdLogin;
echo "<br>";

if (password_verify($pwdLogin, $hashedPWD)) {
    echo "Password is valid: They are the same.";
} else {
    echo "Invalid password: They are not the same.";
}