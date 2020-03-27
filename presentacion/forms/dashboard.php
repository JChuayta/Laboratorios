
<!--Contenido-->

<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header  card-header-primary" >
              <h3 class="title" data-color="purple"><i class="material-icons">account_balance</i> FACULTAD</h3>
            </div>
            <div class="card-body table-responsive">
              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalRegistroSede">Agregar Facultad</a>
              <div id="tabla_sede">
                <table class='table'>
                  <tr>
                    <th>#</th>
                    <th>Regional</th>
                    <th>Centro</th>
                    <th>Director</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th><i class="material-icons">build</i></span></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Saul Rosas</td>
                    <td>FICCT</td>
                    <td>Modulo universitario</td>
                    <td>3465211</td>
                    <td><a href='funciones/php/editar.php?idSede=1' class='btn btn-warning btn-sm''><i class=' material-icons'>create</i></a> <a class='btn btn-danger btn-sm' href='funciones/php/eliminar.php?idSede=1'><i class='material-icons'>delete</i></a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Saul Rosas</td>
                    <td>FICCT</td>
                    <td>Modulo universitario</td>
                    <td>3465211</td>
                    <td><a href='funciones/php/editar.php?idSede=1' class='btn btn-warning btn-sm''><i class=' material-icons'>create</i></a> <a class='btn btn-danger btn-sm' href='funciones/php/eliminar.php?idSede=1'><i class='material-icons'>delete</i></a></td>
                  </tr>
                </table>
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

  