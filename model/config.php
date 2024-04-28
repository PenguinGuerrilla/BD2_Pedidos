<?php

    define('host','127.0.0.1');
    define('user','root');
    define('pass','');
    define('base','loja_bd');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new MySQLi(host,user,pass,base);
