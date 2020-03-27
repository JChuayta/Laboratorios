<?php

class Conexion
{
    private $db_name;
    private $db_username;
    private $db_host;
    private $db_password;
    private $conexion;
    private $port;

    public function __construct()
    {
        $this->db_name = 'Laboratorios';
        $this->db_username = 'postgres';
        $this->db_host = '127.0.0.1';
        $this->db_password = 'tecnoweb';
        $this->port = '5454';
    }

    public function conectar()
    {
        $conn_string = "host=$this->db_host dbname=$this->db_name port=$this->port user=$this->db_username password=$this->db_password";

        $this->conexion = pg_connect($conn_string);

        //Si tenemos un posible error en la conexión lo mostramos
        if (!$this->conexion) {
            echo "Error: No se ha podido conectar a la base de datos\n";
        } else {
            // echo "Conexión exitosa\n";
        }
    }

    public function desconectar()
    {
        pg_close($this->conexion);
    }
    //// funcion para poder hacer una ejecucion que retorna el id insertado(true or false)
    function ejecutarConsulta($sql)
    {
        $con = $this->conexion;
        $query = pg_query($con, $sql);
        return $query;
    }
    //// funcion para obtener los datos de la consulta
    function ejecutarConsultaSimpleFila($sql)
    {
        $con = $this->conexion;
        $query = pg_query($con, $sql);
        $row = pg_fetch_assoc($query);
        return $row;
    }

    function ejecutarConsulta_retornarID($sql)
    {
        $con = $this->conexion;
        $query = pg_query($con, $sql);
        return $this->conexion->insert_id;
    }

    function limpiarCadena($str)
    {
        $con = $this->conexion;
        $str = pg_escape_string($con, trim($str));
        return htmlspecialchars($str);
    }
}
