<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h4>Admin de Productos</h4>
        <!-- Boton Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-productosx">
            Nuevo Producto
        </button>
        <table class="table table-sm mt-3">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody id="contenedor-productosx">
                <!-- Se Insertan los Vehiculos -->
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-productosx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Complete el Formulario:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" required>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<?= $footer ?>