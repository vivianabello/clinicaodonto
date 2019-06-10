<?php

class administradorControlador extends Controlador{

  function __construct(){
    parent::__construct();
    echo "<h3>Hola Controlador de administrador</h3>";
  }

  public function eliminarCita()  {
    $numero_cita = $_GET['numero_cita'];
    $this->getCtrModel()->eliminarCita($numero_cita);
    echo "<script>alert('CITA ELIMINADO ');</script>";
    header("Location:  http://127.0.0.1/clinicaOdonto/VISTAS/administrador");
  }

  public function resgistrarPaciente()  {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $this->getCtrModel()->resgistrarPaciente($cedula, $nombre, $correo, $telefono, $password);
    header("Location:  http://127.0.0.1/clinicaOdonto/VISTAS/administrador");
  }

}

 ?>
