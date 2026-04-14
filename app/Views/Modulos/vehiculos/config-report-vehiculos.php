<?= $header ?>

<div class="row">
    <div class="col-md-12">
        <h5>Personaliza el Reporte de Ventas</h5>
        <hr>

        <form action="" id="form-report" autocomplete="off">
            <div class="form-group input-group">
                <select name="marcas" id="marcas" class="form-control" required>
                    <option value="">Seleccione</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Generar Reporte</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const listaMarcas = document.querySelector("#marcas");
        const formulario = document.querySelector("#form-report")
        async function mostrarReporte() {
            //Algoritmo
        }

        formulario.addEventListener("submit", function(event){
            event.preventDefault();
            mostrarReporte()
        })

        async function obtenerMarcas() {
            try {
                const response = await fetch(`<?= base_url('marcas/listar') ?>`)
                const data = await response.json()
                if (response.status != 200) { return; }
                if (!data) { return; }
                data.forEach(element => {
                    const tagOption = document.createElement("option")
                    tagOption.value = element.id
                    tagOption.innerText = element.marca
                    listaMarcas.appendChild(tagOption)
                })
            } catch (error) {
                console.error("No se pudo obtener las Marcas", error)
            }
        }

        obtenerMarcas()
    });
</script>

<?= $footer ?>