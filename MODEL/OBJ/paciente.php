<?php /**
 *
 */
class Paciente {

  private $id;
  private $cedula;
  private $password;

  function __construct($cedula,$id, $password)  {
    $this->id = $id;
    $this->cedula = $cedula;
    $this->password = $password;
  }

  public function getId()  {
    return $this->id;
  }

  public function getNombre()  {
    return $this->nombre;
  }

  public function getPassword()  {
    return $this->password;
  }
}
 ?>
