<?php
require_once("../dato/DPersona.php");

class NPersona
{

    public $DPersona;
    public $DAuxiliar;
    public $DDocente;
    public $DAdministrativo;

    public function __construct()
    {
        $this->DPersona = new DPersona();
        $this->DAuxiliar = new DAuxiliar();
        $this->DDocente = new DDocente();
        $this->DAdministrativo = new DAdministrativo();
    }

    public function insertar($ci, $nombre, $apellido, $sexo, $telefono, $direccion, $email, $profesion, $codigodocente, $carrera, $codigo, $numform, $registro, $descripcion, $tipo, $cargo, $tipoPersona)
    {
        $this->DPersona->set_ci($ci);
        $this->DPersona->set_nombre($nombre);
        $this->DPersona->set_apellido($apellido);
        $this->DPersona->set_sexo($sexo);
        $this->DPersona->set_telefono($telefono);
        $this->DPersona->set_direccion($direccion);
        $this->DPersona->set_email($email);
        $this->DPersona->insertar();

        if ($tipoPersona == "auxiliar") {
            $this->DAuxiliar->set_ci($ci);
            $this->DAuxiliar->set_carrera($carrera);
            $this->DAuxiliar->set_codigo($codigo);
            $this->DAuxiliar->set_numform($numform);
            $this->DAuxiliar->set_registro($registro);
            $this->DAuxiliar->set_descripcion($descripcion);
            $this->DAuxiliar->set_tipo($tipo);
            $this->DAuxiliar->insertar();
        }
        if ($tipoPersona == "docente") {
            $this->DDocente->set_ci($ci);
            $this->DDocente->set_codigo($codigodocente);
            $this->DDocente->set_profesion($profesion);
            $this->DDocente->insertar();
        }
        if ($tipoPersona == "administrativo") {
            $this->DAdministrativo->set_ci($ci);
            $this->DAdministrativo->set_cargo($cargo);
            $this->DAdministrativo->insertar();
        }
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
