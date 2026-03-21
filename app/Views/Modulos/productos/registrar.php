<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Registro de nuevo Producto</h5>
        <form action="<?= base_url('productos/guardar') ?>" method="post" id="form-productos" autocomplete="off">
            <div class="form-group">
                <label>Tipo</label>
                <input type="text" class="form-control" name="tipo" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" class="form-control" name="stock" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="<?= base_url('productos') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const formulario = document.querySelector("#form-productos");
        formulario.addEventListener("submit", (event) => {
            event.preventDefault();
            if (confirm("¿Registramos este producto?")) {
                formulario.submit();
            }
        });
    });
</script>
<?= $footer ?>