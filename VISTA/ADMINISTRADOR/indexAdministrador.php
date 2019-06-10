<!-- MODAL DE CREAR PACIENTE -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Estas Agregando un Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo constant('URL');?>ADMINISTRADOR/resgistrarPaciente" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cedula</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Cedula" name="cedula">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Nombre" name="nombre">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="correo">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Telefono" name="telefono">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
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
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Pacientes
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($this->pacientes as $paciente){?>
                                            <tr>
                                                <th scope="row"><?php echo $paciente->getId();?></th>
                                                <td><?php echo $paciente->getNombre();?></td>
                                                <td><?php echo $paciente->getTelefono();?></td>
                                                <td>@<?php echo $paciente->getCorreo();?></td>
                                                <!-- <td> <button type="button" class="btn btn-danger">Eleminar</button></td> -->
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <!-- <a href="<?php echo constant('URL');?>ODONTOLOGO/resgistrarPaciente"> -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                            data-target="#exampleModalCenter">Agregar Paciente</button>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Citas
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Fecha Solicitud</th>
                                    <th scope="col">Fecha Asignada</th>
                                    <th scope="col">Consultorio</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  foreach($this->citas as $cita){?>
                                <tr>
                                    <th scope="row"><?php echo $cita['numero_cita'];?></th>
                                    <td><?php echo $cita['cedula_p'];?></td>
                                    <td><?php echo $cita['fecha_solicitud'];?></td>
                                    <td>@<?php echo $cita['fecha_asignada'];?></td>
                                    <td>@<?php echo $cita['id_consultorio'];?></td>
                                    <td> <a href="<?php echo constant('URL');?>administrador/eliminarcita?numero_cita=<?php echo $cita['numero_cita']; ?>"><button type="button" class="btn btn-danger">EleminarC</button></a></td>
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
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Consultorios
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Odontologo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($this->consultorios as $consultorio){?>
                                            <tr>
                                                <th scope="row"><?php echo $consultorio->getId();?></th>
                                                <td><?php echo $consultorio->getNombre();?></td>
                                                <td><?php echo $consultorio->getTelefono();?></td>
                                                <td>@<?php echo $consultorio->getCorreo();?></td>
                                                <td><?php
                                                    foreach ($this->odontologos as $odonto) {
                                                       if( strcmp($consultorio->getCedula_o(), $odonto->getId()) == 0 ){
                                                            echo $odonto->getNombre();
                                                            return;
                                                       }
                                                    }
                                                    ?></td>
                                                <td> <button type="button" class="btn btn-danger">Eleminar</button></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <!-- <a href="<?php echo constant('URL');?>ODONTOLOGO/resgistrarPaciente"> -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                            data-target="#exampleModalCenter">Agregar Consultorio</button>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
