<div class="row">
  <div class="col-md-4">
    <div class="list-group">
      <h3 class="list-group-item"><?php echo $_SESSION['USER']->getNombre();?></h3>
      <h3 class="list-group-item"><?php echo $_SESSION['USER']->getTelefono(); ?></h3>
      <h3 class="list-group-item"><?php echo $_SESSION['USER']->getCorreo(); ?></h3>
      <a href="<?php echo constant('URL');?>login/cerrar"><button type="button" class="btn btn-secondary">Cerrar
          Sesion</button></a>
    </div>
  </div>
  <div class="col-md-8">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Agendar cita
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <form method="post"
              action="<?php echo constant('URL');?>PACIENTE/AgregarCita?pac=<?php echo $_SESSION['USER']->getId();?>">
              <ul>
                <li>
                  <select class="form-control form-control-sm" name="id_consultorio">
                    <?php foreach ($this->consultorios as $consultorio) { ?>
                    <option value="<?php echo $consultorio->getId()?>">
                      <?php echo $consultorio->getNombre()." -- ". $consultorio->getCedula_o();?></option>
                    <?php } ?>
                  </select>
                </li>
                <li>
                  <input type="date" name="fecha_asignada" required>
                </li>
                <li>
                  <input type="submit" name="btn-agendar" value="Agendar">
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Listar Citas
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Paciente</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Fecha</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php print_r($this->atendidas); foreach($this->atendidas as $cita){?>
                <tr>
                  <th scope="row"><?php echo $cita['numero_cita'];?></th>
                  <td><?php echo $cita['cedula_p'];?></td>
                  <td><?php echo $cita['fecha_solicitud'];?></td>
                  <td>@<?php echo $cita['fecha_asignada'];?></td>
                  <td>@<?php echo $cita['id_consultorio'];?></td>
                  <td> <a
                      href="<?php echo constant('URL');?>paciente/eliminarcita?numero_cita=<?php echo $cita['numero_cita']; ?>"><button
                        type="button" class="btn btn-danger">EleminarC</button></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
            you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>

  </div>
</div>