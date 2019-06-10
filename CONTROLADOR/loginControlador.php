<?php /**
 *
 */
class loginControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

    public function login()  {// echo "<h1>CONTROLADOR LOGIN</h1>";
      $user = $_POST['user'];
      $password = $_POST['password'];
      $user = $this->getCtrModel()->login($user, $password);
      if ( $user ) {
        header("Location:  http://127.0.0.1/clinicaOdonto/vistas/".$_SESSION['TIPO']);
        // echo " -- ".$_SESSION['USER']->getCorreo();
        // echo "<h1>".$_SESSION['TIPO']."</h1>";
      }else{
        echo "errorcito";
        // header('Location:  http://127.0.0.1/clinicaOdonto/vistas/error');
      }

    }

    public function cerrar()    {
      session_unset();
      session_destroy();
      header("Location:  http://127.0.0.1/clinicaOdonto");
    }
}
 ?>
