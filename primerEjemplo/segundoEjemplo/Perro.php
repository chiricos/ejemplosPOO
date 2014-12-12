<?php

class Perro{
	private $_nombre;

	public function __construct($nombre)
	{
		$this->_nombre=$nombre;
	}

	public function accionPerro($x,$nombre)
	{
		if($x=="tocar"){
			return $nombre." esta tocando a ".$this->_nombre;
		}
		if($x=="comer"){
			return $nombre." esta dando de comer a ".$this->_nombre;
		}
		if ($x=="popo"){
			return $this->_nombre." esta haciendo popo";
		}
	}


}