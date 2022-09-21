<?= $cabecera ?>



<h1>formulario de crear</h1>
<div class="card-body">
    <h5 class="card-title">
        Ingresar datos del producto
    </h5>
    <p class="card-text">
    <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Nombre_producto">Nombre</label>
            <input type="text" id="Nombre_producto" value="<?= old('Nombre_producto') ?>" class="form-control" name="Nombre_producto">

            <label for="Categoria_producto">Categoria</label>
            <input type="text" id="Categoria_producto" value="<?= old('Categoria_producto') ?>" class="form-control" name="Categoria_producto">
            <label for="Precio">Precio</label>
            <input type="text" id="Precio" value="<?= old('Precio') ?>" class="form-control" name="Precio">


        </div>
        <button class="btn btn-success" type="submit">Guardar</button>

    </form>
    </p>
</div>

<?= $piepagina ?>