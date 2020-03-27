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
if (isset($_GET["op"])) {
	switch ($_GET["op"]) {
		case 'guardaryeditar':
			if (empty($id)) {
				$rspta = $NegocioPersona->insertar($ci, $nombre, $apellido, $sexo, $telefono, $direccion, $email);
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
		<th>Email</th>
		<th>Tipo</th>
		<th><i class="material-icons">build</i></span></th>
	</tr>
	<?php
	$rspta = $NegocioPersona->listar();
	?>
</table>