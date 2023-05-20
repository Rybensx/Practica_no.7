<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $alumno_id;
    public $primer_nombre;
    public $segundo_nombre;
    public $primer_apellido;
    public $segundo_apellido;
    public $alumno_nacimiento;
    public $alumno_tel;
    public $alumno_email;

    public function __construct($args = [] )
    {
        $this->alumno_id = $args['alumno_id'] ?? null;
        $this->primer_nombre = $args['primer_nombre'] ?? '';
        $this->segundo_nombre = $args['segundo_nombre'] ?? '';
        $this->primer_apellido = $args['primer_apellido'] ?? '';
        $this->segundo_apellido = $args['segundo_apellido'] ?? '';
        $this->alumno_nacimiento = $args['alumno_nacimiento'] ?? '';
        $this->alumno_tel = $args['alumno_tel'] ?? '';
        $this->alumno_email = $args['alumno_email'] ?? '';
    }



    
   // primera modificacion 

    public function guardar(){
        
        $sql = "INSERT INTO estudiantes(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, alumno_nacimiento, alumno_tel, alumno_email) 
        values('$this->primer_nombre','$this->segundo_nombre','$this->primer_apellido','$this->segundo_apellido','$this->alumno_nacimiento','$this->alumno_tel','$this->alumno_email')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
