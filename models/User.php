
<?php

class User
{

    private $data;

    public function __construct($id, $nombre, $email, $contrasena, $is_admin)
    {
        $this->data = array(
            'id' => $id,
            'nombre' => $nombre,
            'email' => $email,
            'contrasena' => $contrasena,
            'is_admin' => $is_admin
        );
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        if( array_key_exists($name, $this->data) )
        {
            $this->data[$name] = $value;
        }
    }

    //Simula un login.
    public static function login($email, $contrasena)
    {
        
        $usuario = null;
        
        $usuarios = array(
            new self(1, 'Cornelio Del Rancho', 'cornelio@mail.com', 1234, true),
            new self(2, 'Tito Puente', 'tito@mail.com', 555, false)
        );

        $i = 0;

        while($i < count($usuarios) and is_null($usuario))
        {
            if($email == $usuarios[$i]->email and $contrasena == $usuarios[$i]->contrasena)
            {
                $usuario = $usuarios[$i];
            }
            $i++;
        }

        return $usuario;

    }

}