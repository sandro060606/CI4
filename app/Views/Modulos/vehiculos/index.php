<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Administrador de Vehiculos</h5>
        <!-- Boton Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-vehiculos">
            Nuevo Vehiculo
        </button>

        <table class="table table-sm mt-3">
            <thead>
                <tr>
                    <th class="">ID</th>
                    <th class="">Marca</th>
                    <th class="">Modelo</th>
                    <th class="">Año</th>
                    <th class="">Color</th>
                    <th class="">Precio</th>
                    <th class="">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui se Insertan -->

            </tbody>
        </table>
    </div>
</div>
<!-- Zona Modal -->
<div class="modal fade" id="modal-vehiculos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Complete el Formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formulario-vehiculos" autocomplete="off">
                    <div class="form-group">
                        <Label for="marcas"> Marca:</Label>
                        <select name="marcas" id="marcas" class="form-control" required>
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" required>
                    </div>
                    <div class="form-group">
                        <label for="anio">Año:</label>
                        <input type="text" class="form-control" id="anio" required minlength="4" maxlength="4">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" id="color" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="" class="form-control text-rigth" id="precio" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="formulario-vehiculos" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Zona Modal -->
<?= $footer ?>