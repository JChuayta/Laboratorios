<?php
require_once("../dato/DPersona.php");

class NPersona
{

    public $DPersona;

    public function __construct()
    {
        $this->DPersona = new DPersona();
    }

    public function insertar($ci, $nombre, $apellido, $sexo, $telefono, $direccion, $email)
    {
        $this->DPersona->set_ci($ci);
        $this->DPersona->set_nombre($nombre);
        $this->DPersona->set_apellido($apellido);
        $this->DPersona->set_sexo($sexo);
        $this->DPersona->set_telefono($telefono);
        $this->DPersona->set_direccion($direccion);
        $this->DPersona->set_email($email);
        return $this->DPersona->insertar();
    }
    public function listar()
    {
        $rspta = $this->DPersona->listar();  ////arreglo con datos de las personas
        $num = 1;
        if ($rspta) {
            while ($data = pg_fetch_object($rspta)) {


                echo "<tr>";
                echo "<td>$num</td>
                  <td>$data->ci</td>
                  <td>$data->nombre</td>
                  <td>$data->telefono</td>
                  <td>$data->direccion</td>
                  <td>$data->email</td>
                  <td>A</td>";
                echo "<td>";
                echo "<a href='funciones/php/editar.php?idInstructor=" . $data->ci . "' class='btn btn-warning btn-sm''><i class='material-icons'>create</i></a> ";
                echo "<a class='btn btn-danger btn-sm' href='funciones/php/eliminar.php?idInstructor=" . $data->ci . "'><i class='material-icons'>delete</i></a>";
                echo "</td>";
                echo "</tr>";
                $num++;
            }
        }
    }
}
