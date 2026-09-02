    <h3>Server paths & info</h3>

    <?php
    //---------------------------------
    /*echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";*/
    
    //Type  ?name=yourname in the URL to see the output of $_GET["name"]
    //Add additonal parameters to the URL like ?name=yourname&age=yourage to see the output of $_GET["age"]
    //echo $_GET["name"];

    ?>
    <p><b>Document Root:</b> <?php echo $_SERVER["DOCUMENT_ROOT"]; ?></p>
    <p><b>Document Index:</b> <?php echo $_SERVER["PHP_SELF"]; ?></p>
    <p><b>Server Name:</b> <?php echo $_SERVER["SERVER_NAME"]; ?></p>
    <p><b>PHP Version:</b> <?php echo phpversion(); ?></p><!--use phpinfo() for more info-->
    <p><b>Request Method:</b> <?php echo $_SERVER["REQUEST_METHOD"]; ?></p>