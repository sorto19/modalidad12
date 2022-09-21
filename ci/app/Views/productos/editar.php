<?= $cabecera ?>


<h1>formulario de editar</h1>
<div class="card-body">
    <h5 class="card-title">
        editar datos del producto
    </h5>
    <p class="card-text">
    <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <div class="form-group">
            <label for="Nombre_producto">Nombre</label>
            <input type="text" value="<?= $producto['Nombre_producto'] ?>" id="Nombre_producto" class="form-control" name="Nombre_producto">

            <label for="Categoria_producto">Categoria</label>
            <input type="text" id="Categoria_producto" value="<?= $producto['Categoria_producto'] ?>" class="form-control" name="Categoria_producto">
            <label for="Precio">Precio</label>
            <input type="text" id="Precio" value="<?= $producto['Precio'] ?>" class="form-control" name="Precio">


        </div>
        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="<?= base_url('listar'); ?>" clases="btn btn-info">Cancelar</a>
    </form>
    </p>
</div>
<?= $piepagina ?>