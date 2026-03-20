<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Actualizando datos del Proveedor</h5>
        <form action="<?= base_url('proovedores/actualizar') ?>" method="post" autocomplete="off">
            <input type="hidden" name="idproovedor" value="<?= $registro['id'] ?>">
            <div class="form-group">
                <label>Razón Social</label>
                <input type="text" class="form-control" name="razonsocial" value="<?= $registro['razonsocial'] ?>"
                    required>
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" value="<?= $registro['direccion'] ?>" required>
            </div>
            <div class="form-group">
                <label>RUC</label>
                <input type="text" class="form-control" name="ruc" value="<?= $registro['ruc'] ?>" minlength="11"
                    maxlength="11" required>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" value="<?= $registro['telefono'] ?>"
                    minlength="9" maxlength="9" required>
            </div>
            <div class="form-group">
                <label>Representante</label>
                <input type="text" class="form-control" name="representante" value="<?= $registro['representante'] ?>"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('proovedores') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
<?= $footer ?>