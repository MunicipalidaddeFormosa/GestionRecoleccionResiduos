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
          <td><?php echo date("d-m-Y"); ?></td>
        </tr>
      </tbody>
    </table>
    <!-- /.tabla de descargas -->
  </div>
  <!-- /.card-body -->
</div>

<!-- Modal Alta de Descarga-->
<?php include_once('descargasModales.php') ?>