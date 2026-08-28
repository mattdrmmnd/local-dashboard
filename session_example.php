<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions Example</title>
</head>
<body>

<?php
echo $_SESSION["username"];
?>

<br><br>
<a href="index.php">Dashboard</a>

</body>
</html>