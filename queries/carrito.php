<?php

    function getCarrito(PDO $conn){
        $consulta = $conn -> prepare('SELECT * from carrito');

        $consulta -> execute();

        $carrito = $consulta -> fetchAll();

        return $carrito;
    }
