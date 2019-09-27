<?php
    define('HOST','localhost');
    define('USER','toor');
    define('PASS','#Key123K');
    define('BASE','dti');

    $conecta = new PDO('mysql:host=' . HOST . ';dbname=' . BASE . ';' , USER, PASS);
?>
