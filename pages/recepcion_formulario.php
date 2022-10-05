<?php
header('Content-Type: text/html; charset=utf-8');
require_once ('../functions/validaciones.php');

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$apellido= isset($_POST['apellido']) ? $_POST['apellido'] : null;
$email=isset($_POST['email']) ? $_POST['email'] : null;
$telefono=isset($_POST['telefono']) ? $_POST['telefono'] : null;
$radioOptions=isset($_POST['inlineRadioOptions']) ? $_POST['inlineRadioOptions'] : null;
$mensaje= isset($_POST['mensaje']) ? $_POST['mensaje'] : null;



if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $errores = array();
    
    //Valida que el campo nombre no esté vacío.
   if (!validaNombreApellido($nombre)) {
    $errores[] = 'El campo nombre es inválido.';
    }
    if (!validaNombreApellido($apellido)) {
        $errores[] = 'El campo apellido es inválido.';
    }
    //Valida que el campo email sea correcto.
    if (!validaEmail($email)) {
        $errores[] = 'El campo email es inválido.';
    }
    if (!validaTelefono($telefono)) {
        $errores[] = 'El campo teléfono es inválido.';
    }
    if (!validaRadio($radioOptions)) {
        $errores[] = 'No se seleccionó motivo de contacto';
    }
    if (!validaRequerido($mensaje)) {
        $errores[] = 'Es requerido agregar un mensaje.';
    }

    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if(!$errores){
        header('Location: validated_form.php');
        exit;
    }
    

    if(sizeof($errores) > 0)
        {
            // Mostrar los errores:
            for( $contador=0; $contador < count($errores); $contador++ )
                echo $errores[$contador]."<br/>";
        }
}  

?>