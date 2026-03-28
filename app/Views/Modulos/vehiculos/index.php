<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Administrador de Vehiculos</h5>
        <!-- Boton Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-vehiculos">
            Nuevo Vehiculo
        </button>
        <!-- Tabla -->
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
            <tbody id="content-vehiculos">
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        //Referencias
        const formulario = document.getElementById('formulario-vehiculos');
        const tabla = document.getElementById('content-vehiculos')
        const listaMarcas = document.querySelector('#marcas')

        //Función estandar
        function notificar(mensaje = '') {
            Swal.fire({
                text: mensaje,
                icon: 'info',
                position: 'top-end',
                timer: 2500,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                background: '#ffeaa7'
            })
        }

        async function registrarVehiculo() {
            try {
                const vehiculo = {
                    idmarca: listaMarcas.value,
                    modelo: document.querySelector("#modelo").value,
                    anio: document.querySelector("#anio").value,
                    color: document.querySelector("#color").value,
                    precio: document.querySelector("#precio").value,
                }
                const response = await fetch(`<?= base_url('vehiculos/registrar') ?>`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'aplication/json' },
                    body: JSON.stringify(vehiculo)
                })
                const data = await response.json()
                notificar(data.message)
                //No funciono
                if (!data.message) { return; }
                //Todo bien
                console.log(data)
                //Cerrar Modal
                $('#modal-vehiculos').modal('hide')
                //formulario se reinicia
                formulario.reset()
                //Actualizar Tabla
                obtenerVehiculos()
            } catch (error) {
                console.error("No se logro Registrar;", error)
            }
        }

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

        async function obtenerVehiculos() {
            try {
                const response = await fetch(`<?= base_url('vehiculos/listar') ?>`)
                const data = await response.json()
                //si El Servidor no respondio Correctamente
                if (response.status != 200) { return; }
                //Si no encontramos datos
                if (!data) { return; }
                tabla.innerHTML = ``
                //Ok Proceder
                data.forEach(element => {
                    tabla.innerHTML += `
                    <tr>
                        <td>${element.id}</td>
                        <td>${element.marca}</td>
                        <td>${element.modelo}</td>
                        <td>${element.anio}</td>
                        <td>${element.color}</td>
                        <td>${element.precio}</td>
                        <td>
                            <a href='#' class='btn btn-sm btn-info '> Editar </a>
                            <a href='#' class='btn btn-sm btn-danger '> Eliminar </a>
                        </td>
                    <tr>
                    `
                });
            } catch (error) {
                console.error("Error al Obtener los datos", error)
            }
        }

        //Eventos
        formulario.addEventListener("submit", function (event) {
            event.preventDefault() //STOP

            if (!confirm("¿Registramos este Vehiculo?")) { return; }
            registrarVehiculo()
        })

        //Funciones AutoEjecucion
        obtenerVehiculos()
        obtenerMarcas()
    })
</script>
<?= $footer ?>