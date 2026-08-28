<?php

$pwdSignup = "Drummo";

$options = [
    'cost' => 12, // The cost parameter determines the computational cost of hashing. Higher values increase security but also increase processing time.
];

$hashedPWD = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


$pwdLogin = "Drummo";
echo $pwdLogin;
echo "<br>";

if (password_verify($pwdLogin, $hashedPWD)) {
    echo "Password is valid: They are the same.";
} else {
    echo "Invalid password: They are not the same.";
}