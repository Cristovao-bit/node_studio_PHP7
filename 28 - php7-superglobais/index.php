<?php

//SUPERGLOBAIS
/*
 * $GLOBALS
 * $_SERVER
 * $_POST
 * $_GET
 * $_REQUEST
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 * 
 */

//$GLOBALS É UM ARRAY
$X = 10;
$Y = 15;

function soma() {
    echo $GLOBALS['X'] + $GLOBALS['Y']; 
}

soma();
echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";