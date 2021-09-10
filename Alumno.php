<?php
class Alumno 
{
	protected $nombre;
    protected $apellido;
    protected $dni;
    protected $NotaFinal;
    

    public function __construct ($nombre, $apellido, $dni, $NotaFinal)
    {
    	$this->nombre = $nombre;
    	$this->apellido = $apellido;
    	$this->dni = $dni;
    	$this->NotaFinal = $NotaFinal;
    }
	public function getNombreApellido()
	{
		return $this->nombre. " " . $this->apellido; 
 	}
	public function getDNI()
	{
		return $this->dni;
	}
	
	public function __toString()
    {
        return  "Nombre: ".$this->nombre." ".$this->apellido." DNI :".$this->dni." Nota Final: ".$this->NotaFinal;     
    }
}

