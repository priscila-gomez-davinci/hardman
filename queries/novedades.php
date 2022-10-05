<?php

    function getNovedades(PDO $conn){
        $consulta = $conn -> prepare('SELECT marca, producto, descripcion, imagen from ingreso');
  
        $consulta -> execute();
        
        $productos = $consulta -> fetchAll();

        return $productos;
    }
