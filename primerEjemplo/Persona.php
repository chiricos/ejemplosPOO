<?php

class Persona
{
	private $_nombre;
	private $_apellido;
	private $_fechaNacimiento;

	public function __construct($fechaNacimiento)
	{
		$this->_fechaNacimiento =$fechaNacimiento;
	}

	public function decirEdad()
	{
		$diaActual =date("j");
		$mesActual =date("n");
		$añoActual =date("Y");
		/*calculo la fecha a partir de $_fecha nacimiento*/
		list($dia,$mes,$año)=explode("/", $this->_fechaNacimiento);

		if(($mes==$mesActual)&&($dia > $diaActual))
		{
			$añoActual=$añoActual-1;
		}

		if($mes >$mesActual){
			$añoActual=$añoActual-1;
		}
		$edad =$añoActual-$año;

		return $edad;
	}
}