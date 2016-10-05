<?php


class rectangulo
{
//atributos
private $_base;
private $_altura;

//metodos
public function __construct($base, $altura)
{
	$this->_base = $base;
	$this->_altura = $altura;
}
public function _toString()
{
	return "Rectangulo de $this->base x $this->altura";
}
public function perimetro()
{
	return 2 * ($this->_base + $this->_altura);
}

	public function superficie()
	{
	return 2 * ($this->_base + $this->_altura);
}

private function _setBase($base)
{
	$this->_base=$base;
	return $this;
}
}
