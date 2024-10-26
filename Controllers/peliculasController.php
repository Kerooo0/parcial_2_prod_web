<?php namespace Controllers;

use Models\Pelicula as Pelicula;
use Models\Categoria as Categoria;

class peliculasController {
    private $pelicula;
    private $categoria;

    public function __construct(){
        $this->pelicula = new Pelicula();
        $this->categoria = new Categoria();
    }

    public function index(){
        $datos = $this->pelicula->listar();
        return $datos;
    }

    public function agregar(){
        if(!$_POST){
            $categorias = $this->categoria->listar();
            return $categorias;
        }else{
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "avatars" . DS . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->pelicula->set("imagen", $nombre);
            }
            $this->pelicula->set("nombre", $_POST['nombre']);
            $this->pelicula->set("director", $_POST['director']);
            $this->pelicula->set("fecha", $_POST['fecha']);
            $this->pelicula->set("actor_principal", $_POST['actor_principal']);
            $this->pelicula->set("sinopsis", $_POST['sinopsis']);
            $this->pelicula->set("categoria_id", $_POST['categoria_id']);
            $this->pelicula->add();
            header("Location: " . URL . "peliculas");
        }
    }

    public function editar($id){
        if(!$_POST){
            $this->pelicula->set("id", $id);
            $datos = $this->pelicula->view();
            $categorias = $this->categoria->listar();
            return array("datos" => $datos, "categorias" => $categorias);
        }else{
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "avatars" . DS . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->pelicula->set("imagen", $nombre);
            }
            $this->pelicula->set("id", $_POST['id']);
            $this->pelicula->set("nombre", $_POST['nombre']);
            $this->pelicula->set("director", $_POST['director']);
            $this->pelicula->set("fecha", $_POST['fecha']);
            $this->pelicula->set("actor_principal", $_POST['actor_principal']);
            $this->pelicula->set("sinopsis", $_POST['sinopsis']);
            $this->pelicula->set("categoria_id", $_POST['categoria_id']);
            $this->pelicula->edit();
            header("Location: " . URL . "peliculas");
        }
    }

    public function listarCategorias(){
        $datos = $this->categoria->listar();
        return $datos;
    }

    public function ver($id){
        $this->pelicula->set("id", $id);
        $datos = $this->pelicula->view();
        return $datos;
    }

    public function eliminar($id){
        $this->pelicula->set("id", $id);
        $this->pelicula->delete();
        header("Location: " . URL . "peliculas");
    }
}

	$peliculas = new peliculasController();

?>