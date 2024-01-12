<?php

function conectar(){

   $dsn = "mysql:dbname=Biblioteca;host=localhost";
   $username = "root";
   $password = "";
    
   try {
       $pdo = new PDO($dsn, $username, $password);
     $pdo->exec("SET CHARACTER SET utf8");

   } catch (PDOException $e) {
       echo "Error: ".$e;
   }

    return $pdo;

}



?>  