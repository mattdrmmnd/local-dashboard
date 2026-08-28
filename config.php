<?php

//Goes to php.ini file stored in xampp folder
ini_set('session.use_only_cookies', 1);

// makes certain id's created by our server are used only
//Also makes id more complex and harder to guess
ini_set('session.use_strict_mode', 1); 

//sets our params
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',

    //if you're running plain http://localhost without SSL configured, secure => true means the browser will refuse to send the session cookie at all, and your sessions will silently break (you'll get a new session ID on every request). This is a common "why do my sessions keep resetting" bug on local dev. You'd want secure => false for local HTTP testing, and only true once you're on HTTPS (like in production).
    'secure' => false,
    
    //stops JavaScript (document.cookie) from reading the session cookie, which helps mitigate XSS-based session theft   
    'httponly' => true
]);

session_start();
//Checks to see if a session has been created called last_regeneration
if (!isset($_SESSION['last_regeneration'])) {
    //Makes our current session id a better version
    //If id is hacked a new one would be generated periodically for security
    session_regenerate_id(true);
    //session_create_id() is another method that can be used for other reasons like login
    //creates session variable and sets it to the current time
    $_SESSION['last_regeneration'] = time();
} else {
    //seconds times minutes = 30 mins
    //Session id will now update after 30 mins
    $interval = 60 * 30;

    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }


}

