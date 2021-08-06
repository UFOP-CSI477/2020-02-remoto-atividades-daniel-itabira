<?php

    //config 
    $dbfile = "./db/database.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";

    $strConnection = "sqlite" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword);
    var_dump($connection);
    $estados = $connection->query("SELECT * FROM estados");
    
    var_dump($estados);