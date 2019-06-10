<?php /**
 *
 */
class PacienteControlador extends Controlador{

  function __construct()  {
    parent::__construct();
    echo "<h3>Hola Controlador</h3>";
  }

  public function AgregarOdontolodo()  {
    // code...
  }

  public function AgregarPaciente()  {
    $nombre = $_GET['nombre'];
    $cedula = $_GET['cedula'];
    $correo = $_GET['correo'];
    $telefono = $_GET['telefono'];
    $persona = $this->buscarPersona($cedula);
    if ( empty( $persona ) ) {
      $this->getCtrModel()->resgistrarPaciente($cedula, $nombre, $correo, $telefono);
    }else {
      echo "<H1> EL PACIENTE YA EXISTE </H1>";
    }
  }

  public function AgregarAuxiliar()  {
    // code...
  }

  public function AgregarCita()  {
    $fecha_Solicitud = date('Y-m-d');
    $cedula_p = $_GET['pac'];
    $id_consultorio = $_POST['id_consultorio'];
    $fecha_asiganda = $_POST['fecha_asignada'];
    $this->getCtrModel()->AgregarCita($fecha_Solicitud, $cedula_p, $id_consultorio, $fecha_asiganda);
    header('Location:  http://127.0.0.1/clinicaOdonto/');

  }

  public function buscarPersona($cedudla)  {
    return  $this->getCtrModel()->buscarPersona($cedula);
  }

  public function eliminarCita()  {
    $numero_cita = $_GET['numero_cita'];
    $this->getCtrModel()->eliminarCita($numero_cita);
    echo "<script>alert('CITA ELIMINADO ');</script>";
    header("Location:  http://127.0.0.1/clinicaOdonto/VISTAS/paciente");
  }

}
 ?>
