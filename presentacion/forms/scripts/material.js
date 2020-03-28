$(document).ready(function () {
    // auxiliares.style.display = 'none';
     //docentes.style.display = 'none';
     //administrativos.style.display = 'none';
     $("#material").addClass("active");
     $('#tabla_material').load("../material/listaMaterial.php #tablita");
     $("#formulario").on("submit", function (e) {
         guardaryeditar(e);
     })
 
 });