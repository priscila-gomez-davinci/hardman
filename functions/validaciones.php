<?php 
 function validaRequerido($valor){
    if(trim($valor) == ''){
       return false;
    }else{
       return true;
    }
 }


 function validaNombreApellido($campo){
    if(trim($campo) == ''){
        return false;
     }else{
        if ((!preg_match ("/^[a-zA-z]*$/", $campo))) {  
            return false;  
        } else {  
            return true; 
        } 
     }
 }


 function validaTelefono($phone){
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
        } else {
       return false;
    }
}
 
 function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
       return false;
    }else{
       return true;
    }
 }

 function validaRadio($valor){
    if(!isset($valor)){ 
        return false; 
    } else{
        return true;
    }
 }
?>