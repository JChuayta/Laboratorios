$(document).ready(function () {
    auxiliares.style.display = 'none';
    docentes.style.display = 'none';
    administrativos.style.display = 'none';
    $("#user").addClass("active");
    $('#tabla_persona').load("../persona.php #tablita");
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    })

});

function guardaryeditar(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    //  $("#btnGuardar").prop("disabled", true);
    var Ci = $("#Ci").val();
    var Nombre = $("#Nombre").val();
    var Apellido = $("#Apellido").val();
    var Sexo = $("#Sexo").val();
    var Telefono = $("#Telefono").val();
    var Direccion = $("#Direccion").val();
    var Email = $("#Email").val();
    var TipoPersona;
    // docente
    var Profesion = $("#Profesion").val();
    var CodigoDocente = $("#CodigoDocente").val();

    // Administrativo 
    var Cargo = $("#Cargo").val();

    // auxiliar
    var Carrera = $("#Carrera").val();
    var Codigo = $("#Codigo").val();
    var NumFormulario = $("#NumFormulario").val();
    var Registro = $("#Registro").val();
    var Descripcion = $("#Descripcion").val();
    var Tipo = $("#Tipo").val();

    var checket = document.getElementById('docente');
    var checket1 = document.getElementById('auxiliar');
    var checket2 = document.getElementById('administrativo');
    var url = "";
    if (checket) {          // docente
        url = "&profesion=" + Profesion + "&codigodocente=" + CodigoDocente;
        TipoPersona = "docente";
    } else if (checket1) {  // auxiliar
        url = "&carrera=" + Carrera + "&codigo=" + Codigo + "&numformulario=" + NumFormulario + "&registro=" + Registro + "&descripcion=" + Descripcion + "&tipo=" + Tipo;
        TipoPersona = "auxiliar";
    } else {                // administrativo 
        url = "&cargo=" + Cargo;
        TipoPersona = "administativo";
    }
    $.ajax({
        url: "../PPersona.php?op=guardaryeditar&ci=" + Ci + "&nombre=" + Nombre + "&apellido=" + Apellido + "&sexo=" + Sexo + "&telefono=" + Telefono + "&direccion=" + Direccion + "&email=" + Email + url + "&tipopersona=" + TipoPersona,
        type: "POST",
        contentType: false,
        processData: false,
    }).done(function () {
        $('#ModalRegistroPersona').modal('hide');
        swal(
            "Activado!",
            "La Persona ha sido Registrado con éxito.",
            "success"
        );
        $('#tabla_persona').load("../persona.php #tablita"); //Recargamos la Tabla(Para que se muestren los Nuevos Resultados)
    }).fail(function () {
        swal(
            "Activado!",
            "El registro ha sido activado con éxito.",
            "error"
        );
    });
    limpiar();
}
//Función limpiar
function limpiar() {
    $("#Ci").val("");
    $("#Nombre").val("");
    $("#Apellido").val("");
    $("#Sexo").val("");
    $("#Telefono").val("");
    $("#Direccion").val("");
    $("#Email").val("");
}
function clickAuxiliar() {
    document.getElementById("docente").checked = false;
    document.getElementById("administrativo").checked = false;

    divAuxiliar = document.getElementById('auxiliar');
    if (divAuxiliar.checked) {

        auxiliares.style.display = '';
        docentes.style.display = 'none';
        administrativos.style.display = 'none';
    }
}
function clickDocente() {
    document.getElementById("auxiliar").checked = false;
    document.getElementById("administrativo").checked = false;

    divDocentes = document.getElementById('docente');
    if (divDocentes.checked) {

        docentes.style.display = '';
        auxiliares.style.display = 'none';
        administrativos.style.display = 'none';
    }
}
function clickAdministrativo() {
    document.getElementById("auxiliar").checked = false;
    document.getElementById("docente").checked = false;

    divAdministrativos = document.getElementById('administrativo');
    if (divAdministrativos.checked) {

        administrativos.style.display = '';
        auxiliares.style.display = 'none';
        docentes.style.display = 'none';
    }
}