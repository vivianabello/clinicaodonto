<?php
 class OdontologoControlador extends Controlador {
   function __construct()  {
     parent::__construct();
   }

    public function mostrarHistorial()    { //echo "entre------------------  .l.   ---------------------";
        $ccP = $_GET['ccP'];
        $miArray = unserialize($_GET['paci']);
        $this->getCtrVista()->paciente = $miArray;
        $this->getCtrVista()->historias = $this->getCtrModel()->historiaPaciente($ccP);
        $this->getCtrVista()->renderD("odontologo","atenderPaciente");
        //header("Location:  http://127.0.0.1/clinicaOdonto/VISTAS/atender");
    }

    public function nuevaHistoria()    {// echo "entr";
      
      $this->getCtrModel()->agregarHistoria($_POST['cita'], $_POST['historia']);
      if( $this->getCtrModel()->buscarHistoria($_POST['cita']) ){
        echo "<script> alert('Historia Registrada'); </script>";
        header("Location:  http://127.0.0.1/clinicaOdonto/ODONTOLOGO");
      }else{
        echo "<script> alert('Historia No Registrada'); </script>";
      }
    }
}


?>
