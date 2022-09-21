<?= $cabecera ?>
<a href="<?= base_url('crear') ?>" class="btn btn-success">Crear un Producto nuevo</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($productos as $producto) : ?>


            <tr>
                <td><?= $producto['id']; ?></td>
                <td><?= $producto['Nombre_producto']; ?></td>
                <td><?= $producto['Categoria_producto']; ?></td>
                <td><?= $producto['Precio']; ?></td>
                <td>
                    <a href="<?= base_url('editar/' . $producto['id']); ?>" class="btn btn-info" type="button">Editar</button>
                        <a href="<?= base_url('borrar/' . $producto['id']); ?>" class="btn btn-danger" type="button">Eliminar</button>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
    <?= $piepagina ?>