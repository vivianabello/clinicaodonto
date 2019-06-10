<?php /**
 *
 */
class erroresControlador extends Controlador{

  function __construct()  {
    parent::__construct();
    echo "<h3>ERROR 404, PAGINA NO ENCONTRADA</h3>";
    // echo $this->msj ;
  }

  public function mensaje($msj)  {
    echo "<h3>$msj</h3>";
  }
}
 ?>
