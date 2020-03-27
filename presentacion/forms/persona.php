<?php
include "../contents/header.php";
include "../contents/sidebar.php";
include "../contents/navbar.php";
?>

<!--Contenido-->
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header  card-header-primary">
              <h3 class="title" data-color="purple"><i class="material-icons">account_balance</i> Persona</h3>
            </div>
            <div class="card-body table-responsive">
              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalRegistroPersona">Agregar Persona</a>
              <div id="tabla_persona">
                <!-- aqui se lista los datos  -->
              </div>
            </div>
            <div class="card-body table-responsive">
              <a class="btn btn-danger btn-sm" href="funciones/php/exportarpdfSedes.php">EXPORTAR PDF
              </a>
              <a class="btn btn-success btn-sm" href="funciones/php/exportarExcelSedes.php">EXPORTAR EXCEL
              </a>
              <a class="btn btn-primary btn-sm" href="funciones/php/exportarWordSedes.php">EXPORTAR WORD
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Fin-Contenido-->
  <?php
  include "../contents/footer.php";
  ?>
  <script type="text/javascript" src="scripts/usuario.js"></script>

  <div class="modal fade" id="ModalRegistroPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!-- Modal content-->
      <form name="formulario" id="formulario" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PERSONA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-content">
              <div class="form-group ">
                <label for="Ci">CI:</label>
                <input name="Ci" class="form-control" id="Ci"></select>
              </div>
              <div class="form-group ">
                <label for="Nombre">Nombre:</label>
                <input name="Nombre" class="form-control" id="Nombre"></select>
              </div>
              <div class="form-group ">
                <label for="Apellido">Apellido:</label>
                <input name="Apellido" class="form-control" id="Apellido"></select>
              </div>
              <div class="form-group ">
                <label for="Sexo">Sexo:</label>
                <select name="Sexo" class="form-control" id="Sexo">
                  <option value="">: : : : Seleccione un Genero : : : :</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
              </div>
              <div class="form-group ">
                <label for="Telefono">Telefono:</label>
                <input name="Telefono" type="number" class="form-control" id="Telefono"></select>
              </div>
              <div class="form-group ">
                <label for="Direccion">Direccion:</label>
                <input name="Direccion" type="text" class="form-control" id="Direccion">
              </div>
              <div class="form-group ">
                <label for="Email">Email:</label>
                <input name="Email" type="mail" class="form-control" id="Email">
              </div>
              <!-- AUMENTANDO LA HERNECIA DE LA CLASE PERSONA -->
              <div id="mainForm" name="mainForm" class="form-group">
                <label>
                  Auxiliar
                  <input type="radio" onclick="clickAuxiliar()" name="auxiliar" id="auxiliar" value="auxiliar" class="flat-red">
                </label>
                <label>
                  Docente
                  <input type="radio" id="docente" name="docente" onclick="clickDocente()" value="docente" class="flat-red">
                </label>
                <label>
                  Administrativos
                  <input type="radio" id="administrativo" name="administrativo" onclick="clickAdministrativo()" value="administrativo" class="flat-red">
                </label>
              </div>

              <div id="auxiliares">
                <div class="form-group ">
                  <label for="Carerra">Carerra:</label>
                  <select name="Carerra" class="form-control" id="Carerra">
                    <option value="Sistemas">Sistemas</option>
                    <option value="Redes">Redes</option>
                    <option value="Informatica">Informatica</option>
                  </select>
                </div>
                <div class="form-group ">
                  <label for="Codigo">Codigo:</label>
                  <input name="Codigo" class="form-control" id="Codigo">
                </div>
                <div class="form-group ">
                  <label for="NumFormulario">Numero de Formulario:</label>
                  <input name="NumFormulario" class="form-control" id="NumFormulario">
                </div>
                <div class="form-group ">
                  <label for="Registro">Registro:</label>
                  <input name="Registro" class="form-control" id="Registro">
                </div>
                <div class="form-group ">
                  <label for="Descripcion">Descripcion:</label>
                  <input name="Descripcion" class="form-control" id="Descripcion">
                </div>
                <div class="form-group ">
                  <label for="Tipo">Tipo:</label>
                  <select name="Tipo" class="form-control" id="Tipo">
                    <option value="Aux de Lab">Auxiliar de Laboratorio</option>
                    <option value="Aux de Catedra">Auxiliar de Catedra </option>
                  </select>
                </div>

              </div>
            </div>


            <div id="docentes">
              <div class="form-group ">
                <label for="CodigoDocente">Codigo:</label>
                <input name="CodigoDocente" class="form-control" id="CodigoDocente">
              </div>
              <div class="form-group ">
                <label for="Profesion">Profesion:</label>
                <input name="Profesion" class="form-control" id="Profesion">
              </div>
            </div>
            <div id="administrativos">
              <div class="form-group ">
                <label for="Cargo">Cargo:</label>
                <input name="Cargo" class="form-control" id="Cargo">
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
              <button class="btn btn-warning" data-dismiss="modal">CANCELAR</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>