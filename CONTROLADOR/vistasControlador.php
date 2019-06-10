<?php /**
 *
 */
class VistasControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function paciente()  {
    $this->getCtrVista()->consultorios = $this->getCtrModel()->consultorios();
    $this->getCtrVista()->citas = $this->getCtrModel()->citas();
    $this->getCtrVista()->atendidas = $this->getCtrModel()->citas_atendidas();
    $this->getCtrVista()->render("paciente");
  }

  public function inicio()  {
    $this->getCtrVista()->render("inicio");
  }

  public function administrador()  {
    $this->getCtrVista()->citas = $this->getCtrModel()->citas_atendidas();
    $this->getCtrVista()->pacientes = $this->getCtrModel()->pacientes();
    $this->getCtrVista()->consultorios = $this->getCtrModel()->consultorios();
    $this->getCtrVista()->odontologos = $this->getCtrModel()->odontologos();
    //$this->getCtrVista()->atendidas = $this->getCtrModel()->citas_atendidas();
    $this->getCtrVista()->render("administrador");
  }

  public function login()  {
    $this->getCtrVista()->render("login");
  }

  public function error()  {
    $this->getCtrVista()->render("error");
  }

  public function odontologo()  { "entre";
    $consultorios = $this->getCtrModel()->consultorios();
    $atendidas = $this->getCtrModel()->citas_atendidas();
   // $citas = $this->getCtrModel()->citas(); 
    $citasA = [];
    foreach ($consultorios as $consultorio) { 
      if ( strcmp($consultorio->getCedula_o(), $_SESSION['USER']->getId()) == 0 ) {//echo " **entre 2**" ;
          foreach ($atendidas as $ant) {
           
            if ($consultorio->getId() == $ant['id_consultorio']) {
              array_push($citasA, $ant);
              
            }
          }   
      } 
     // print_r($citasA);
      $this->getCtrVista()->citass = $citasA;
      $this->getCtrVista()->pacientes = $this->getCtrModel()->pacientes();
      $this->getCtrVista()->renderD("odontologo", "odontologo");
    }
  }

  public function atender()  {
    $u = $_GET['cita'];
    print_r($_GET['cita']);
    //$this->getCtrVista()->paciente = $u;
    //$this->getCtrVista()->renderD("odontologo","atenderPaciente");
  }



}
 ?>
