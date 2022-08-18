<?php 








$conexion = mysqli_connect("localhost","id18654355_proyecto_10","wN4E{6GT}Bl>mllZ","id18654355_hidenkitkens");




class Apptiva{
	private $host ="localhost";
	private $usuario ="id18654355_proyecto_10";
	private $clave ="wN4E{6GT}Bl>mllZ";
	private $db ="id18654355_hidenkitkens";
	public $conexion;
	public function __construct(){
		$this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db)
		or die(mysql_error());
		$this->conexion->set_charset("utf8");
	}


	//buscar el login
	public function buscar($tabla, $condicion){
		$resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
		if($resultado)
			return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
        
		
	}
}
 ?>
