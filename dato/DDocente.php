<?php
class DDocente
{
   public $ci;
   public $codigo;
   public $profesion;
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
   //funcion set y get de codigo
   public function get_codigo()
   {
      return $this->codigo;
   }
   public function set_codigo($codigo)
   {
      $this->codigo = $codigo;
   }
   //funcion set y get de profesion
   public function get_profesion()
   {
      return $this->profesion;
   }
   public function set_profesion($profesion)
   {
      $this->profesion = $profesion;
   }
   public function insertar()
   {
      $this->con->conectar();
      return $this->con->ejecutarConsulta("insert into docente(ci,codigo,profesion) values($this->ci,'$this->codigo','$this->profesion')");
   }
}
