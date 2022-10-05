<?php

function countProductos(PDO $conn)
{
    $consulta = $conn->prepare('SELECT COUNT(1) from producto');

    $consulta->execute();

    $cantProductos = $consulta->fetchColumn();

    return $cantProductos;
}

function getProductos(PDO $conn, int $current_page, int $quantity_per_page)
{

    $beginning = ($current_page - 1) * $quantity_per_page;

    $consulta = $conn->prepare('SELECT nombre, descripcion, precio, imagen 
                                        from producto
                                        LIMIT :beginning, :quantity_per_page;');

    $consulta->bindValue(':beginning', $beginning, PDO::PARAM_INT);
    $consulta->bindValue(':quantity_per_page', $quantity_per_page, PDO::PARAM_INT);
    $consulta->execute();

    $productos = $consulta->fetchAll();

    return $productos;
}
