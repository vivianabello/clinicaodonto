<?php /**
 *
 */
class loginModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function login($user, $password)  { echo "<h1>ENTRE A LOGEAR PUTOS</h1>";
    if ($this->buscarPac($user)) { echo "<h1 style='background: blue;'>ENTRE 10</h1>";
      $sql = "SELECT * FROM paciente WHERE cedula = :cedula";
      $tipo = "paciente";
    }elseif ($this->buscarOdon($user)) {echo "<h1 style='background: blue;'>ENTRE 20</h1>";
      $sql = "SELECT * FROM odontologo WHERE cedula = :cedula";
      $tipo = "odontologo";
    }elseif ($this->buscarAdmin($user)) {echo "<h1 style='background: blue;'>ENTRE 30</h1>";
      $sql = "SELECT * FROM administrador WHERE cedula = :cedula";
      $tipo = "administrador";
    }//echo $sql;
    if ( isset($sql) ) {echo "<h1 style='background: blue;'>ENTRE 40</h1>";
      $con = $this->bd->conectar();
      $consulta = $con -> prepare($sql);
      $consulta -> execute( array(":cedula"=>$user) );
      foreach ($consulta as $paciente) {echo "<h1 style='background: blue;'>ENTRE 50</h1>"; echo "<h1>hola::  ".$paciente['password']."</h1>";
        if ( strcmp($paciente['password'], $password) == 0 ) {echo "<h1 style='background: blue;'>ENTRE 60</h1>";
          $idP = $paciente['id'];
          $sql = "SELECT * FROM persona WHERE cedula = :cedula";
          $consultar = $con -> prepare($sql);
          $consultar -> execute ( array(":cedula"=>$user) );
          foreach ($consultar as $persona) {echo "<h1 style='background: blue;'>ENTRE 70 </h1>";
            $personita = new Persona ();
            $personita -> crearT($persona['cedula'], $persona['nombre'],$persona['correo'], $persona['telefono'], $idP);
            echo "LOGIE HPS";
            $_SESSION['TIPO'] = $tipo;
            $_SESSION['USER']  = $personita;
            echo $_SESSION['USER']->getNombre();
            $con = $this->cerrarCon();
            return TRUE;
          }
        }
      }echo "NO LOGIE HPS";
      $con = $this->cerrarCon();
      return FALSE;
    }
  }

  public function buscarPac($cedula)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM paciente WHERE cedula = $cedula");
    $consultar -> execute();
    foreach ($consultar as $value) {
      $con = $this->cerrarCon();
      return TRUE;
    }
    $con = $this->cerrarCon();
    return false;
  }

  public function buscarOdon($cedula)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM odontologo WHERE cedula = $cedula");
    $consultar -> execute();
    foreach ($consultar as $value) {
      return TRUE;
      $con = $this->cerrarCon();
    }
    $con = $this->cerrarCon();
    return false;
  }

  public function buscarAdmin($cedula)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM administrador WHERE cedula = $cedula");
    $consultar -> execute();
    foreach ($consultar as $value) {
      $con = $this->cerrarCon();
      return TRUE;
    }
    $con = $this->cerrarCon();
    return false;
  }
}
 ?>
