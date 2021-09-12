<?php 
require_once 'Alumno.php';
require_once 'verDatos.php';
class AlumnoPresencial extends Alumno
{
	protected $inasistencias;
    protected $Notas;
    const PORCENTAJEASISTENCIA = 75;
    protected static $DIASHABILES;

	public function __construct ($nombre, $apellido, $dni, $inasistencias, $Notas)
    {
    	$this->nombre = $nombre;
    	$this->apellido = $apellido;
    	$this->dni = $dni;
    	$this->Notas = $Notas;
        $this->inasistencias = $inasistencias;
    }
    
    public static function setDiasHabiles($dias)
    {
        self::$DIASHABILES = $dias;
    }
    
    public function CalcularPorcentajeAsistencias()
    {
        $resultado = ((self::$DIASHABILES - $this->inasistencias) * 100) / self::$DIASHABILES;
        return $resultado;        
    }      
    public function ControlarNotas()
    {
        foreach ($this->Notas as $valor)
            {
                if($valor < 4) 
                {
                    return false; 
                } 
            }
                    return true;
    }
    
    public function CalcularNota()
    {
        if ($this->CalcularPorcentajeAsistencias() < self::PORCENTAJEASISTENCIA
            || $this->ControlarNotas() == false) 
        { 
            return 1;   
        }  
        else
        {
            $x=0;
            foreach($this->Notas as $valor)
            {
                $x = $x + $valor;
            } 
        return $x / count($this->Notas);
        }
    }
    public function getNotas()
        {
            return $this->CalcularNota();
        }
}
