<?php
class DAuxiliar
{
    public $ci;
    public $carrera;
    public $codigo;
    public $estado;
    public $numform;
    public $registro;
    public $descripcion;
    public $tipo;

    //funcion set y get de ci
    public function get_ci()
    {
        return $this->ci;
    }
    public function set_ci($ci)
    {
        $this->ci = $ci;
    }
    //funcion set y get de carrera
    public function get_carrera()
    {
        return $this->carrera;
    }
    public function set_carrera($carrera)
    {
        $this->carrera = $carrera;
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

    //funcion set y get de estado
    public function get_estado()
    {
        return $this->estado;
    }
    public function set_estado($estado)
    {
        $this->estado = $estado;
    }
    //funcion set y get de numform
    public function get_numform()
    {
        return $this->numform;
    }
    public function set_numform($numform)
    {
        $this->numform = $numform;
    }
    //funcion set y get de registro
    public function get_registro()
    {
        return $this->registro;
    }
    public function set_registro($registro)
    {
        $this->registro = $registro;
    }

    //funcion set y get de descripcion
    public function get_descripcion()
    {
        return $this->descripcion;
    }
    public function set_descripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    //funcion set y get de tipo
    public function get_tipo()
    {
        return $this->tipo;
    }
    public function set_tipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
