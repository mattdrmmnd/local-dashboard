<?php
declare(strict_types=1);

//check if user entered by using the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usersearch = $_POST["usersearch"]; //No data sanitation required (->db), No data being outputted into browser ie: echo


    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;"; //Two semicolons, one for sql, one for php

        $stmt = $pdo->prepare($query);//Submit query to db so it can run into db

        $stmt->bindParam(":usersearch", $usersearch);

        $stmt->execute(); // Gives data that the user submitted / signs user up
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); //assigns column name to result

        //Close statement and connection to db
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php"); // Incase user tries to manually access this page
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <br><br>
    <a href="index.php">Dashboard</a>


    <section>
        <h3>Search results:</h3>

        <?php

        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no results!</p>";
            echo "<div>";
        } 
        else {
            //var_dump($results); shows multidimensional array in print_r format
            foreach ($results as $row) {
                echo "<div>";
                //sanitize for cross-site scripting from output results
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
                echo "<div>";
            }
        }

        ?>
    </section>
    <a href="includes/crud.php">
        <button>
        New Query
        </button>
    </a>
    
</body>
</html>