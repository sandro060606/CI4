<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Lista de Proveedores</h5>
        <a href="<?= base_url('proovedores/registrar') ?>" class="btn btn-sm btn-primary">Registrar</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Razón Social</th>
                <th>Dirección</th>
                <th>RUC</th>
                <th>Teléfono</th>
                <th>Representante</th>
                <th>Comandos</th>
            </tr>
        </thead>
        <tbody id="content-table">
            <?php foreach ($proovedores as $p): ?>
                <tr>
                    <td>
                        <?= $p['id'] ?>
                    </td>
                    <td>
                        <?= $p['razonsocial'] ?>
                    </td>
                    <td>
                        <?= $p['direccion'] ?>
                    </td>
                    <td>
                        <?= $p['ruc'] ?>
                    </td>
                    <td>
                        <?= $p['telefono'] ?>
                    </td>
                    <td>
                        <?= $p['representante'] ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger btn-eliminar" data-idproovedor="<?= $p['id'] ?>"
                            data-razonsocial="<?= $p['razonsocial'] ?>">Eliminar</a>
                        <a href="<?= base_url('proovedores/buscar/' . $p['id']) ?>" class="btn btn-sm btn-info">Editar</a>
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
                const idProovedor = event.target.getAttribute("data-idproovedor");
                if (confirm("¿Deseas eliminar el registro?")) {
                    window.location.href = "<?= base_url('proovedores/eliminar/') ?>" + idProovedor;
                }
            }
        });
    });
</script>
<?= $footer ?>