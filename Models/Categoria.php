<?php namespace Models;
	
	class Categoria{
		
		//Creamos las variables para la TABLA de la base de datos
		private $id;
		private $nombre;
		
		//creamos una variable para la conexión
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}
		//------------------------------
		
		//Listamos lo que tiene la base de datos
		public function listar(){
			$sql = "SELECT * FROM categorias";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		//Inserta un registro
		public function add(){
			$sql = "INSERT INTO categorias (nombre) VALUES ('{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		//Elimina un registro
		public function delete(){
			$sql = "DELETE FROM categorias WHERE id = '{$this->id}'";
			$this->con->consultaRetorno($sql);
		}

		//Modifica un registro
		public function edit(){
			$sql = "UPDATE categorias SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		//Devuelve los datos del registro
		public function view(){
			$sql = "SELECT * FROM categorias WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}



	}

?>