<?php 
require_once 'Alumno.php'; 
class AlumnoLibre extends Alumno
{

	public function __construct ($nombre, $apellido, $dni, $NotaFinal)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido; 
		$this->dni = $dni;
		$this->NotaFinal = $NotaFinal;
	}

	public function getNotaFinal()
	{
		return $this->NotaFinal;
	}
}
      
