<?php
	include('Perro.php');
class Persona
{
	
	private $_nombre;
	private $_accion;

	public function __construct($nombre)
	{
		$this->_nombre=$nombre;
	}

	public function accion($accion)
	{
		$perro = new Perro('sacha');

		return $perro->accionPerro($accion,$this->_nombre);
	}

}