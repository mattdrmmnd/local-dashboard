<?php

//check if user entered by using the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; //No data sanitation required (->db), No data being outputted into browser ie: echo
    $pwd = $_POST["pwd"];
    $email = $_POST["email"]; 

    try {
        require_once "dbh.inc.php";
        /** @var PDO $pdo */ // A docblock hint tells the linter "trust me, this variable is a PDO object here." The Intelephense warning will disappear and your code behavior stays exactly the same.

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;"; //Two semicolons, one for sql, one for php

        $stmt = $pdo->prepare($query);//Submit query to db so it can run into db

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
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