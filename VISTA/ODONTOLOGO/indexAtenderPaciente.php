<!DOCTYPE html>
<html lang="en">
<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <h2>Info del <?php echo $_SESSION['TIPO']; ?>: </h2>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getNombre();?></h3>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getTelefono();?></h3>
            <h3 class="list-group-item"><?php echo $_SESSION['USER']->getCorreo();?></h3>
        </div>
    </div>
    <div class="col-md-8">
        <DIV class="row">
            <H3 class="col-5"> Paciente: <?php echo $this->paciente['paciente'];?></H3>
            <button type="button" class="btn btn-primary col-3" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Nueva Historia</button>
        </DIV>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Fecha </th>
                    <th scope="col">Historia</th>
                </tr>
            </thead>
            <tbody>
                <?php $b = true; foreach($this->historias as $historia){?>
                <tr>
                    <th scope="row"><?php echo $historia['fecha_asignada'];?></th>
                    <th scope="row"><?php echo $historia['descripcion'];?></th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Historia Dental Nueva </h5>
                <h4 class="modal-tittle"> Paciente: <?php echo $this->paciente['paciente']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo constant('URL');?>ODONTOLOGO/nuevaHistoria">
                    <div class="form-group">
                        <input class="form-control" id="message-text" value="<?php echo $this->paciente['cita']; ?>"
                            readonly="readonly" name="cita">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Procedimiento(s):</label>
                        <textarea class="form-control" id="message-text" name="historia"></textarea>
                    </div>
                    <input type="submit" value="Submit">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
            </div>
        </div>
    </div>
</div>


</html>