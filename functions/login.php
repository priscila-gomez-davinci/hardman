<?php

session_start();

require_once 'modelos/Usuario.php';

$error = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //$email = $_POST['email'];

    /*
    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    }else{
        $email = null;
    }*/

    //$email = ( isset($_POST['email']) ) ? $_POST['email'] : null;

    $email = $_POST['email'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;

    $usuario = User::login($email, $contrasena);

    if( $usuario ){
        
        $_SESSION['auth'] = array(
            'id' => $usuario->id,
            'nombre' => $usuario->nombre,
            'is_admin' => $usuario->is_admin
        );

        header('Location: index.php');

    }else{
        $error = 'El email o la contraseña son incorrectos';  
    }

}

/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;

    $usuario = Usuario::login($email, $contrasena);

    if($usuario){
        
        $_SESSION['auth'] = array(
            'id' => $usuario->id,
            'nombre' => $usuario->nombre,
            'is_admin' => $usuario->is_admin
        );

        header('Location: index.php');

    }else{
        $error = 'El email o la contraseña son incorrectos.';
    }

}
*/

require_once('pages/login.php');