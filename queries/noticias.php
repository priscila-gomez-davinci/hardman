<?php

    function getNoticias(PDO $conn){
        $consulta = $conn -> prepare('SELECT * from noticia');

        $consulta -> execute();

        $noticias = $consulta -> fetchAll();

        return $noticias;
    }
