<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Lista de Productos</h5>
        <a href="<?= base_url('productos/registrar') ?>" class="btn btn-sm btn-primary">Registrar</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Comandos</th>
            </tr>
        </thead>
        <tbody id="content-table">
            <?php foreach ($productos as $p): ?>
                <tr>
                    <td>
                        <?= $p['id'] ?>
                    </td>
                    <td>
                        <?= $p['tipo'] ?>
                    </td>
                    <td>
                        <?= $p['descripcion'] ?>
                    </td>
                    <td>S/.
                        <?= number_format($p['precio'], 2) ?>
                    </td>
                    <td>
                        <?= $p['stock'] ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger btn-eliminar" data-idproducto="<?= $p['id'] ?>"
                            data-descripcion="<?= $p['descripcion'] ?>">Eliminar</a>
                        <a href="<?= base_url('productos/buscar/' . $p['id']) ?>" class="btn btn-sm btn-info">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const dataTable = document.querySelector("#content-table");
        dataTable.addEventListener("click", function (event) {
            if (event.target.classList.contains('btn-eliminar')) {
                const idProducto = event.target.getAttribute("data-idproducto");
                if (confirm("¿Deseas eliminar el registro?")) {
                    window.location.href = "<?= base_url('productos/eliminar/') ?>" + idProducto;
                }
            }
        });
    });
</script>
<?= $footer ?>