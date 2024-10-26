<?php $categorias = $peliculas->listarCategorias(); ?>
<div class="box-principal">
<h3 class="titulo">Editar Pelicula<hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar pelicula <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <form class="form-horizontal" action="<?php echo URL; ?>peliculas/editar/<?php echo $datos['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nombre" class="control-label">Nombre de la pelicula</label>
                    <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
                </div>
                <div class="form-group">
                  <label for="director" class="control-label">Director</label>
                    <input class="form-control" value="<?php echo $datos['director']; ?>" name="director" type="text" required>
                </div>
                <div class="form-group">
                  <label for="fecha" class="control-label">Fecha</label>
                    <input class="form-control" value="<?php echo $datos['fecha']; ?>" name="fecha" type="date" required>
                </div>
                <div class="form-group">
                  <label for="actor_principal" class="control-label">Actor Principal</label>
                    <input class="form-control" value="<?php echo $datos['actor_principal']; ?>" name="actor_principal" type="text" required>
                </div>
                <div class="form-group">
                  <label for="sinopsis" class="control-label">Sinopsis</label>
                    <textarea class="form-control" name="sinopsis" required><?php echo $datos['sinopsis']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="categoria_id" class="control-label">Categoria</label>
                    <select class="form-control" name="categoria_id" required>
                      <?php while($row = mysqli_fetch_array($categorias)){ ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $datos['categoria_id']) echo 'selected'; ?>><?php echo $row['nombre']; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="imagen" class="control-label">Imagen</label>
                    <input class="form-control" name="imagen" type="file">
                </div>
                <input value="<?php echo $datos['id']; ?>" name="id" type="hidden">
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Editar</button>
                    <button type="reset" class="btn btn-warning">Borrar</button>
                </div>
            </form>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
</div>