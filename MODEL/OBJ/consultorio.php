<?php /**
 *
 */
class Consultorio {
  private $id;
  private $nombre;
  private $direccion;
  private $correo;
  private $telefono;
  private $cedula_o;
  function __construct($id, $nombre, $direccion, $correo, $telefono, $cedula_o)  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->direccion = $direccion;
    $this->correo = $correo;
    $this->telefono = $telefono;
    $this->cedula_o = $cedula_o;
  }

  public function getId()  {
    return $this->id;
  }

  public function getNombre()  {
    return $this->nombre;
  }

  public function getDireccion()  {
    return $this->direccion;
  }

  public function getCorreo()  {
    return $this->correo;
  }

  public function getTelefono()  {
    return $this->telefono;
  }

  public function getCedula_o()  {
    return $this->cedula_o;
  }

}
 ?>
