<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Actualizando datos del Producto</h5>
        <form action="<?= base_url('productos/actualizar') ?>" method="post" autocomplete="off">
            <input type="hidden" name="idproducto" value="<?= $registro['id'] ?>">
            <div class="form-group">
                <label>Tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?= $registro['tipo'] ?>" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $registro['descripcion'] ?>"
                    required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" value="<?= $registro['precio'] ?>"
                    required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" class="form-control" name="stock" value="<?= $registro['stock'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('productos') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
<?= $footer ?>