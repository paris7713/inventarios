<?php
require_once ('Tools.php');
require_once ('../bdcontrol/IDataAccess.php');

class Empresa implements IDataAccess{

	private $idEmpresa;
	private $nombre;
	private $activo;

	public function __construct($arrempresa = null){
		if($arrempresa != null)
		{
			$this->setData($arrempresa);
		}
	}
	
	//Setters and Getters
	Public function setIdEmpresa($idEmpresa){
		$this->idEmpresa = $idEmpresa;
	}

	public function getIdEmpresa(){
		return $idEmpresa; 
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function &getNombre(){
		return $nombre;
	}

	public function setActivo($activo){
		$this->activo = $activo;
	}

	public function getActivo(){
		return $activo;
	}

	//implementacion de los metodos de IDataAcces
	public function getTitle(){
		return "Empresa";
	}

	public function getData()
	{
		$columName = array("idempresa", "nombre", "activo");
		$values = array($this->idEmpresa, $this->nombre, $this->activo);
    	return array($columName, $values);
	}

	public function setData($arrayData)
	{
		$this->idEmpresa = Tools::validate($arrayData['idempresa']);
		$this->nombre = Tools::validate($arrayData['nombre']);
		$this->activo = Tools::validate($arrayData['activo']);
	}
}

?>