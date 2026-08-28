<?php

//check if user entered by using the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; //No data sanitation required (->db), No data being outputted into browser ie: echo
    $pwd = $_POST["pwd"];
    $email = $_POST["email"]; 

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES 
        (:username, :pwd, :email);"; //Two semicolons, one for sql, one for php

        $stmt = $pdo->prepare($query);//Submit query to db so it can run into db

        //Password will be encrypted before being stored in the database, using the password_hash() function with the BCRYPT algorithm and a cost parameter of 12.
        $options = [
            'cost' => 12, // The cost parameter determines the computational cost of hashing. Higher values increase security but also increase processing time.
        ];

        $hashedPWD = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPWD);
        $stmt->bindParam(":email", $email);

        $stmt->execute(); // Gives data that the user submitted / signs user up
        
        //Close statement and connection to db
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php"); //send user home

        die(); //Can use exit() for scripts that have no connection inside of it
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php"); // Incase user tries to manually access this page
    
}