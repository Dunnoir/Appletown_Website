<?php
    header('Access-Control-Allow-Origin: *');
    
    $link = "mysql:host=localhost;dbname=id20791880_empresa";
    $user = "id20791880_appletown";
    $pass = "@PPLEDb1";

    try{
        $pdo = new PDO($link, $user, $pass);
    }catch (PDOException $e){
        print "Error". $e -> getMessage()."<br>";
    };
?>