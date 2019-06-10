<?php /**
 *
 */
class VistasModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function consultorios()  {
    $con = $this->bd->conectar();
    $consultorios = [];
    $sql = "SELECT * FROM colsultorio";
    $cosnultar = $con -> prepare($sql);
    $cosnultar -> execute();
    foreach ($cosnultar as $consultorio) {
      $consul = new Consultorio($consultorio['id'], $consultorio['nombre'], $consultorio['direccion'], $consultorio['correo'], $consultorio['telefono'], $consultorio['cedula_o']);
      array_push($consultorios, $consul);
    }
    $con = $this->cerrarCon();
    return $consultorios;
  }

public function pacientes(){
    $con = $this->bd->conectar();
    $pacientes = [];
    $sql = "SELECT * FROM paciente";
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ( $consultar as $paciente){
        $sqll = "SELECT * FROM persona";
        $consultarr = $con -> prepare($sqll);
        $consultarr -> execute();
        foreach ($consultarr as $persona) {
          if ( strcmp($persona['cedula'], $paciente['cedula']) == 0 ) {
            $pacient = new Persona();
            $pacient->crearT($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono'], $paciente['id'] );
            array_push($pacientes, $pacient);
          }
        }
    }
    // print_r($pacientes);
    $con = $this->cerrarCon();
    return $pacientes;
}

public function buscarPa($cedula){
  $con = $this->bd->conectar();
  $consulta = $con->prepare("SELECT * FROM paciente WHERE cedula = :cedula");
  $consulta -> execute( array(":cedula"=>$cedula) );
  foreach ($consulta as $pac) {
    $con = $this->cerrarCon();
    return true;
  }
  $con = $this->cerrarCon();
  return false;
}

public function citas(){
  $con = $this->bd->conectar();
  $sql = "SELECT * FROM cita";
  $citas = [];
  $consultar = $con -> prepare($sql);
  $consultar -> execute();
  foreach ($consultar as $cita){
    $cit = new Cita();
    $cit->crear($cita['fecha_solicitud'], $cita['cedula_p'], $cita['id_consultorio'], $cita['fecha_asignada'], $cita['numero_cita']);
    array_push($citas, $cit);
  }
  $con = $this->cerrarCon();
  return $citas;  
}

public function atendidas(){
  $con = $this->bd->conectar();
  $atendidas = [];
  $sql = "SELECT * FROM atencion_cita";
  $consultar = $con -> prepare($sql);
  $consultar -> execute();
  $cont = 0;
  foreach ($consultar as $atendida) {
    array_push($atendidas, $atendida);
  }  
  $con = $this->cerrarCon();
  return $atendidas;
}

public function citas_atendidas(){
  $sql = "SELECT * FROM cita c WHERE c.numero_cita NOT IN ( (SELECT c.numero_cita FROM cita c INNER JOIN atencion_cita atc ON c.numero_cita = atc.numero_cita)  )";  
  $con = $this->bd->conectar();
  $consultar = $con -> prepare($sql);
  $consultar -> execute();
  $array = [];
  $i = 0;
  foreach ($consultar as $cons) {//echo $i; 
   // print_r($cons);
    array_push($array, $cons);
    //$i ++;   
    
  }
 //print_r($array);
  return $array;
}

public function odontologos(){
  $sql = "SELECT * FROM odontologo";
  $odontologos = [];
  $con = $this->bd->conectar();
  $consultar = $con -> prepare($sql);
  $consultar -> execute();
  foreach ($consultar as $value) {
    $sqll = "SELECT * FROM persona";
    $consultarr = $con ->  prepare($sqll);
    $consultarr -> execute();
    foreach ($consultarr as $persona) {
      if ( strcmp($persona['cedula'], $value['cedula']) == 0 ) {
        $odontolog = new Persona();
        $odontolog->crearT($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono'], $value['id'] );
        array_push($odontologos, $odontolog);
      }
    }
  }
  $con = $this->cerrarCon();
  return $odontologos;
}

public function personas(){
    $con = $this->bd->conectar();
    $personas = [];
    $sql = "SELECT * FROM persona";
    $cosnultar = $con -> prepare($sql);
    $cosnultar -> execute();
    foreach ($cosnultar as $persona) {
      $consul = new Persona();
      $consul->crear($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono']);
      array_push($personas, $consul);
    }
    $con = $this->cerrarCon();
    return $consultorios;
}
public function eliminarCita($numero_cita){
    $numero_cita = $_GET['cita'];
  $sql = "DELETE FROM cita WHERE numero_cita = :cita";
  $con = $this->bd->conectar();
  $consultar = $con -> prepare($sql);
  $consultar -> execute( array(":cita"=>$numero_cita) );
}


}
 ?>