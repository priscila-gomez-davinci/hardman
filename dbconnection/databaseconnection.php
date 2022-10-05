<?php

    function getConnection(){
        try{
            $conn = new PDO(
                'mysql:           
                host=localhost;
                dbname=hardman;
                charset=utf8', 
                'root',
                ''
        );
            }catch(PDOException $e){
            echo 'Falló la conexión: ' . $e -> getMessage();
            exit();
        }

        return $conn;
    }
