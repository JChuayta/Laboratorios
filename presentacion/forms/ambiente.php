<?php
include "../../contents/header.php";
include "../../contents/sidebar.php";
include "../../contents/navbar.php";
?>

<!--Contenido-->
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header  card-header-primary">
              <h3 class="title" data-color="purple"><i class="fa fa-asterisk" aria-hidden="true"></i> Ambiente</h3>
            </div>
            <div class="card-body table-responsive">
              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalRegistroAmbiente">Agregar Ambiente</a>
              <div id="tabla_ambiente">
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
  include "../../contents/footer.php";
  ?>

<script type="text/javascript" src="../scripts/listaAmbiente.js"></script>
  

  <div class="modal fade" id="ModalRegistroAmbiente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                <p><label for="Descripcion">Descripcion:</label></p>
                <textarea name="descripcion" cols="40" rows="8"></textarea>
        
                </div>
            
              <div class="form-group ">
                <label for="Tipo">Tipo:</label>
                <select name="Tipo" class="form-control" id="Tipo">
                  <option value="">: : : : Seleccione un Genero : : : :</option>
                  <option value="M">Tipo 1</option>
                  <option value="F">Tipo 2</option>
                </select>
              </div>
              <div class="form-group ">
                <label for="Capacidad">Capacidad:</label>
                <input name="Capacidad" type="number" class="form-control" id="Telefono"></select>
              </div>
              <div class="form-group ">
                <label for="Telefono">Ubicacion:</label>
                <input name="Telefono" type="number" class="form-control" id="Telefono"></select>
              </div>
            </div>
           </div>
          </div>
         </form>
     </div>
  </div>
</div>

