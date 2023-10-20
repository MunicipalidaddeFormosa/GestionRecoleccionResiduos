<h1 class="text-uppercase mt-5 mb-5 text-center">Listado de descargas</h1>
<ul class="nav nav-tabs mb-5">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">DESCARGAS DIARIAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">DESCARGAS FINALIZADAS</a>
  </li>
</ul>
<div class="text-end mb-2">
  <!-- Button modal -->
  <button type="button" class="btn btn-outline-primary align-self-lg-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Agregar Descarga
    <i class="fa-sharp fa-solid fa-truck-field"></i>
  </button>
  <!-- /.Button modal -->
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Litado de descargas en proceso, por turno.</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <!-- tabla de descargas -->
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Interno</th>
          <th>Acción</th>
          <th>Dominio</th>
          <th>Chofer</th>
          <th>Zona/Sector</th>
          <th>Turno</th>
          <th>Estado</th>
          <th>Ing SP</th>
          <th>Egr SP</th>
          <th>Ing VM</th>
          <th>Egr VM</th>
          <th>Cooperativa</th>
          <th>Grupo</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>125</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>AB123CD</td>
          <td>JUAN PEREZ</td>
          <td> ZONA 1</td>
          <td>MAÑANA</td>
          <td><span class="badge text-bg-secondary">EN ESPERA</span></td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>          
          <td>FORTALECER</td>
          <td>GRUPO 1</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>
        <tr>
          <td>126</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>EF456GH</td>
          <td>ESTELA RODRIGUEZ</td>
          <td> ZONA 2</td>
          <td>MAÑANA</td>
          <td><span class="badge text-bg-warning">EN PREPARACION</span></td>
          <td>06:05 hs.</td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>          
          <td>EMPRENDER</td>
          <td>Grupo 2</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>       
        <tr>
          <td>127</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>XZ798RT</td>
          <td>PALACIOS MAURO</td>
          <td> ZONA 3</td>
          <td>MAÑANA</td>
          <td><span class="badge text-bg-success">EN RECOLECCIÓN</span></td>
          <td>05:55 hr.</td>
          <td>06:15 hr.</td>
          <td><i class="fa-regular fa-clock"></i></td>
          <td><i class="fa-regular fa-clock"></i></td>          
          <td>VILLA HERMOSA</td>
          <td>Grupo 3</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>       
        <tr>
          <td>128</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>IJ234KL</td>
          <td>ENRIQUE PINTOS</td>
          <td> ZONA 4</td>
          <td>MAÑANA</td>
          <td><span class="badge text-bg-info">EN DESCARGA</span></td>
          <td>06:00 hr.</td>
          <td>06:15 hr.</i></td>
          <td>11:15 hr.</td>
          <td><i class="fa-regular fa-clock"></i></td>          
          <td>VILLA DEL ROSARIO</td>
          <td>Grupo 4</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>               
        <tr>
          <td>129</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>MN567ÑO</td>
          <td>LUCIANA RECALDE</td>
          <td> ZONA 5</td>
          <td>TARDE</td>
          <td><span class="badge text-bg-primary">RETORNO</span></td>
          <td>13:00 hr.</td>
          <td>13:15 hr.</td>
          <td>18:00 hr.</td>
          <td>18:30 hr.</td>          
          <td>EL LITORAL</td>
          <td>Grupo 5</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>       
        <tr>
          <td>130</td>
          <td><button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-gear"></i></button></td>
          <td>PQ890RS</td>
          <td>EUSEBIO PANIAGUA</td>
          <td> ZONA 6</td>
          <td>NOCHE</td>
          <td><span class="badge text-bg-danger">FINALIZADO</span></td>
          <td>20:00 hr.</td>
          <td>20:10 hr.</td>
          <td>23:00 hr.</td>
          <td>00:01 hr.</td>          
          <td>SOL FORMOSEÑO</td>
          <td>Grupo 6</td>
          <td><?php echo date("d-m-Y"); ?> </td>
        </tr>       
      </tbody>
    </table>
    <!-- /.tabla de descargas -->
  </div>
  <!-- /.card-body -->
</div>

<!-- Modal Alta de Descarga-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header bs-info-bg-subtle">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">FORMULARIO DE ALTA DE DESCARGA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Seleccionar</option>
              <option value="1">AB123DC</option>
              <option value="2">EF567GH</option>
              <option value="3">IJ891KL</option>
            </select>
            <label for="floatingSelect">DOMINIO</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInputDisabled" value="DESCARGA 1" disabled>
            <label for="floatingInputDisabled">DESCARGA</label>
          </div>
          <div class="form-floating mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Seleccionar</option>
              <option value="1">JUAN PEREZ - 38567123</option>
              <option value="2">RICARDO MONTES - 40654987</option>
              <option value="3">ENRIQUE ALONSO - 38577190</option>
            </select>
            <label for="floatingSelect">CHOFER</label>
          </div>
          <div class="form-floating mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Seleccionar</option>
              <option value="1">FORTALECER</option>
              <option value="2">EMPRENDER</option>
              <option value="3">VILLA HERMOSA</option>
            </select>
            <label for="floatingSelect">COOPERATIVA</label>
          </div>
          <div class="form-floating mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Seleccionar</option>
              <option value="1">GRUPO 1</option>
              <option value="2">GRUPO 2</option>
              <option value="3">GRUPO 3</option>
            </select>
            <label for="floatingSelect">GRUPOS</label>
          </div>
          <div class="form-floating mb-3 col-lg-6 col-md-6 col-sm-12 float-left">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Seleccionar</option>
              <option value="1">ZONA 1</option>
              <option value="2">ZONA 2</option>
              <option value="3">ZONA 3</option>
            </select>
            <label for="floatingSelect">ZONAS</label>
          </div>
          <div class="form-floating col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg- col-md-10 col-sm-10 text-center float-left">
              <h5>LISTA DE PERSONAL DE COOPERATIVA</h5>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-end  float-left">
              <button type="button" class="btn btn-outline-primary" title="Administrar"><i class="fa-solid fa-plus"></i></button>
            </div>
          </div>
          <div class="table">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre y Apellido</th>
                  <th>DNI</th>
                  <th>Asistencia</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ACOSTA ESTHER</td>
                  <td>25123456</td>
                  <td><input type="checkbox" name="asistencia" id="asistencia"></td>
                </tr> 
                <tr>
                  <td>GONZALEZ ANALIA</td>
                  <td>35125678</td>
                  <td><input type="checkbox" name="asistencia" id="asistencia"></td>
                </tr>
                <tr>
                  <td>RAMIREZ ESTEBAN</td>
                  <td>17456742</td>
                  <td><input type="checkbox" name="asistencia" id="asistencia"></td>
                </tr>       
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-8 col-xs-10 float-left">
              <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>Seleccionar</option>
                  <option value="1">JUAN PEREZ - 38567123</option>
                  <option value="2">RICARDO MONTES - 40654987</option>
                  <option value="3">ENRIQUE ALONSO - 38577190</option>
                </select>
                <label for="floatingSelect">COOPERATIVISTA SUPLENTE</label>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 float-left">
              <button type="button" class="btn btn-lg btn-outline-success" title="Administrar"><i class="fa-solid fa-check"></i></button>
            </div>
          </div>
          
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>
