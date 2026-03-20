<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Registro de nuevo Proveedor</h5>
        <form action="<?= base_url('proovedores/guardar') ?>" method="post" id="form-proovedores" autocomplete="off">
            <div class="form-group">
                <label>Razón Social</label>
                <input type="text" class="form-control" name="razonsocial" required>
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>
            <div class="form-group">
                <label>RUC</label>
                <input type="text" class="form-control" name="ruc" minlength="11" maxlength="11" required>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" minlength="9" maxlength="9" required>
            </div>
            <div class="form-group">
                <label>Representante</label>
                <input type="text" class="form-control" name="representante" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="<?= base_url('proovedores') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const formulario = document.querySelector("#form-proovedores");
        formulario.addEventListener("submit", (event) => {
            event.preventDefault();
            if (confirm("¿Registramos este proveedor?")) {
                formulario.submit();
            }
        });
    });
</script>
<?= $footer ?>