<?php
class DAdministrativo
{
    public $ci;
    public $cargo;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    //funcion set y get de ci
    public function get_ci(){
       return $this->ci;
    }
    public function set_ci($ci){
       $this->ci = $ci;
    }
     
    //funcion set y get de cargo
    public function get_cargo(){
       return $this->cargo;
    }
    public function set_cargo($cargo){
       $this->cargo = $cargo;
    }
      
     
}
