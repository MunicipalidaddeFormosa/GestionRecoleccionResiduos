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