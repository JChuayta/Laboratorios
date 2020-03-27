<?php
include_once("Conexion.php");
class DPersona
{
    public $ci;
    public $nombre;
    public $apellido;
    public $sexo;
    public $telefono;
    public $direccion;
    public $email;
    public $con;


    public function __construct()
    {
        $this->con = new Conexion();
    }

    //funcion set y get de ci
    public function get_ci()
    {
        return $this->ci;
    }
    public function set_ci($ci)
    {
        $this->ci = $ci;
    }

    //funcion set y get de nombre
    public function get_nombre()
    {
        return $this->nombre;
    }
    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    //funcion set y get de apellido
    public function get_apellido()
    {
        return $this->apellido;
    }
    public function set_apellido($apellido)
    {
        $this->apellido = $apellido;
    }

    //funcion set y get de sexo
    public function get_sexo()
    {
        return $this->sexo;
    }
    public function set_sexo($sexo)
    {
        $this->sexo = $sexo;
    }

    //funcion set y get de telefono
    public function get_telefono()
    {
        return $this->telefono;
    }
    public function set_telefono($telefono)
    {
        $this->telefono = $telefono;
    }

    //funcion set y get de direccion
    public function get_direccion()
    {
        return $this->direccion;
    }
    public function set_direccion($direccion)
    {
        $this->direccion = $direccion;
    }

    //funcion set y get de email
    public function get_email()
    {
        return $this->email;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }

    public function insertar()
    {
        $this->con->conectar();
        return $this->con->ejecutarConsulta("insert into persona(ci,nombre,apellido,sexo,telefono,direccion,email) values($this->ci,'$this->nombre','$this->apellido','$this->sexo',$this->telefono,'$this->direccion','$this->email')");
    }
     // me retorna un arreglo con todos las persona de la base de datos
    public function listar()
    {
        $this->con->conectar();
        return $this->con->ejecutarConsulta("select* from persona");
    }
}
