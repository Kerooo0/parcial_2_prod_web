<?php namespace Models;

	class Pelicula{

		//cramos las variables para guardar los valores de la base de datos
		private $id;
		private $nombre;
		private $director;
		private $sinopsis;
		private $actor_principal;
		private $imagen;
		private $categoria_id;
		private $fecha;
		
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

		public function listar(){
			$sql = "SELECT t1.*, t2.nombre as nombre_categoria FROM peliculas t1 INNER JOIN categorias t2 ON t1.categoria_id = t2.id ORDER BY id DESC";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO peliculas (nombre, director, fecha, actor_principal, sinopsis, categoria_id, imagen)
					VALUES (null, '{$this->nombre}', '{$this->director}', '{$this->fecha}', '{$this->actor_principal}',
					'{$this->sinopsis}','{$this->categoria_id}','{$this->imagen}', NOW())";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM peliculas WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE peliculas SET nombre = '{$this->nombre}', director = '{$this->director}', fecha = '{$this->fecha}', actor_principal = '{$this->actor_principal}', sinopsis = '{$this->sinopsis}', categoria_id = '{$this->categoria_id}', imagen = '{$this->imagen}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
	

		public function view(){
			$sql = "SELECT t1.*, t2.nombre as nombre_categoria FROM peliculas t1 INNER JOIN categorias t2 
					ON t1.categoria_id = t2.id WHERE t1.id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>