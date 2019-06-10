<?php /**
 *
 */
class Odontologo  {
 private $cedula;
 private $password;
 private $id;
  function __construct()  {
    
  }
  public function crear( $id, $cedula, $password)  {
    $this->cedula = $cedula;
    $this->password = $password;
    $this->id = $id;
  }

  public function getCedula()  {
    return $this->cedula;
  }

  public function getPassword()  {
    return $this->password;
  }

  public function getId()  {
    return $this->id;
  }
}
 ?>
