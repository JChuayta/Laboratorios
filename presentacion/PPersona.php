<?php
include_once("../negocio/NPersona.php");
$NegocioPersona = new NPersona();

$ci = isset($_REQUEST["ci"]) ? $_REQUEST["ci"] : "";
$nombre = isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"] : "";
$apellido = isset($_REQUEST["apellido"]) ? $_REQUEST["apellido"] : "";
$sexo = isset($_REQUEST["sexo"]) ? $_REQUEST["sexo"] : "";
$telefono = isset($_REQUEST["telefono"]) ? $_REQUEST["telefono"] : "";
$direccion = isset($_REQUEST["direccion"]) ? $_REQUEST["direccion"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";

$profesion = isset($_REQUEST['profesion']) ? $_REQUEST['profesion'] : '';
$codigodocente = isset($_REQUEST['codigodocente']) ? $_REQUEST['codigodocente'] : '';

$carrera = isset($_REQUEST['carrera']) ? $_REQUEST['carrera'] : '';
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : '';
$numformulario = isset($_REQUEST['numformulario']) ? $_REQUEST['numformulario'] : '';
$registro = isset($_REQUEST['registro']) ? $_REQUEST['registro'] : '';
$descripcion = isset($_REQUEST['descripcion']) ? $_REQUEST['descripcion'] : '';
$tipo = isset($_REQUEST['tipo']) ? $_REQUEST['tipo'] : '';

$cargo = isset($_REQUEST['cargo']) ? $_REQUEST['cargo'] : '';

$tipoPersona = isset($_REQUEST['tipoPersona']) ? $_REQUEST['tipoPersona'] : '';

if (isset($_GET["op"])) {
	switch ($_GET["op"]) {
		case 'guardaryeditar':
			if (empty($id)) {
				$rspta = $NegocioPersona->insertar($ci, $nombre, $apellido, $sexo, $telefono, $direccion, $email, $profesion, $codigodocente, $carrera, $codigo, $numform, $registro, $descripcion, $tipo, $cargo, $tipoPersona);
				echo $rspta ? "Persona registrado" : "Persona no se pudo registrar";
			} else {
			}
			break;
	}
}
?>

<table class='table' id="tablita">
	<tr>
		<th>#</th>
		<th>CI</th>
		<th>Nombre</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Tipo</th>
		<th><i class="material-icons">build</i></span></th>
	</tr>
	<?php
	$rspta = $NegocioPersona->listar();
	?>
</table>