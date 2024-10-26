<div class="box-principal">
<h3 class="titulo">Pelicula <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Datos de la Pelicula<?php echo $datos['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>Views/_template/imagenes/avatars/<?php echo $datos['imagen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Director: </b><?php echo $datos['director']; ?>
            </li>
            <li class="list-group-item">
              <b>Sinopsis: </b><?php echo $datos['sinopsis']; ?>
            </li>
            <li class="list-group-item">
              <b>Actor Principal: </b><?php echo $datos['actor_principal']; ?>
            </li>
            <li class="list-group-item">
              <b>Categoria: </b><?php echo $datos['nombre_categoria']; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de registro: </b><?php echo $datos['fecha']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>