<?php 
class Cita{
    
    private $numero_cita;
    private $fecha_solicitud;
    private $cedula_p;
    private $id_consultorio;
    private $fecha_asignada;

    function __construct(){

    }
    
    public function crear($fecha_solicitud, $cedula_p, $id_consultorio, $fecha_asignada, $numero_cita)    {
        $this->fecha_solicitud = $fecha_solicitud;
        $this->cedula_p = $cedula_p;
        $this->id_consultorio = $id_consultorio;
        $this->fecha_asignada = $fecha_asignada;   
        $this->numero_cita = $numero_cita; 
    }

    public function getFecha_solicitud()    {
        return $this->fecha_solicitud;
    }

    public function getCedula_p()    {
        return $this->cedula_p;
    }

    public function getId_consultorio()    {
        return $this->id_consultorio;
    }

    public function getFecha_asignada()    {
        return $this->fecha_asignada;
    }

    public function getNumero_cita()    {
        return $this->numero_cita;
    }
}



?>