<h3>SCOPES</h3>

    <?php 
    $scopes = ["Global", "Local", "Class", "Static" ];
    $rand_keys = array_rand($scopes, 4);
    shuffle($rand_keys);
    ?>

    <p><b>Refresh to see a new Scope Type:</b> <?php echo $scopes[$rand_keys[0]] ?></p>