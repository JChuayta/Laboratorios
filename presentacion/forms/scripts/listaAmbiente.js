$(document).ready(function () {
   // auxiliares.style.display = 'none';
    //docentes.style.display = 'none';
    //administrativos.style.display = 'none';
    $("#ambiente").addClass("active");
    $('#tabla_ambiente').load("../ambiente/listaAmbiente.php #tablita");
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    })

});