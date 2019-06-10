<!DOCTYPE html>
<html lang="en">

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <h2>Info del <?php echo $_SESSION['TIPO']; ?>: </h2>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getNombre();?></h3>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getTelefono();?></h3>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getCorreo();?></h3>
            <a href="<?php echo constant('URL');?>login/cerrar"><button type="button" class="btn btn-secondary">Cerrar
                    Sesion</button></a>
        </div>
    </div>
    <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                    <!-- <th scope="col"></th> -->
                </tr>
            </thead>
            <tbody>
                <?php  foreach($this->citass as $cita){ 
                  $date1 = new DateTime( date("Y-m-d") );
                  $date2 = new DateTime( $cita['fecha_asignada'] );                   
                  if ( $date1 <= $date2 ) {        
                  ?>
                <tr>
                    <th scope="row"><?php echo $cita['numero_cita'];?></th>
                    <td><?php
                            foreach ($this->pacientes as $paciente) { ;
                                if ( strcmp($paciente->getId(), $cita['cedula_p']) == 0 ) {                                  
                                    $this->pac = $paciente->getNombre();
                                    echo $this->pac;
                                }
                             }
                     ?></td>
                    <td>@<?php echo $cita['fecha_asignada'];?></td>
                    <td> <a href="<?php echo constant('URL');?>odontologo/mostrarHistorial?ccP=<?php $array = array( 'paciente'=>$this->pac, 'cita'=>$cita['numero_cita'] );  echo $cita['cedula_p']."&&paci=". urlencode(serialize($array));?>"><button type="button" class="btn btn-danger" >Atendida</button></a></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable2">Nueva Historia</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</html>
