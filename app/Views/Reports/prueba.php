<?= $estilos ?>
<page backtop="10mm" backbottom="10mm"> <!-- Inicio de la Pagina -->
    <page_header>
        <div class="cabecera">Reportes de Trabajadores</div>
    </page_header>
    <page_footer>
        <div class="pie_pagina">Página: [[page_cu]]</div>
    </page_footer>

    <!-- Contenido -->
    <!-- Imagen de la Empresa -->
    <img src="<?= $logo ?>" alt="Logo">

    <!-- Tabla con Datos -->
    <table class="table">
        <thead>
            <tr>
                <th style="width: 10%">#</th>
                <th style="width: 20%">Apellidos</th>
                <th style="width: 20%">Nombres</th>
                <th style="width: 20%">Telefono</th>
                <th style="width: 10%">Genero</th>
                <th style="width: 20%">Sueldo</th>
            </tr>
        </thead>
        <tbody>
            <?php $j = 1; ?>
            <?php for($i = 1; $i <= 10; $i++): ?> 
                <?php foreach($personas as $persona): ?>
                <tr>
                    <td class="center"><?= $j ?></td>
                    <td><?= $persona['apellidos'] ?></td>
                    <td><?= $persona['nombres'] ?></td>
                    <td class="center"><?= $persona['telefono'] ?></td>
                    <td class="center"><?= $persona['genero'] ?></td>
                    <td class="center"><?= $persona['sueldo'] ?></td>
                </tr>
                <?php $j++ ?>
                <?php endforeach; ?>
            <?php endfor;?>
        </tbody>
    </table>
</page><!-- Fin de la Pagina -->

<!-- Otras Paginas -->
<!-- Se Hereda la Cabecera, pie a traves de pageset -->
<page pageset="old">
    <h1 style="text-align: center">Resumen</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50%">Indicador</th>
                <th style="width: 50%">Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Variables para Guardar Informacion de Metricas
                $totalSueldo = 0;
                $totalHombres = 0;
                $totalMujeres = 0;
                $totalTrabajadores = 0;
                
                for($i = 1; $i <= 10; $i++):
                    foreach($personas as $persona):
                        $totalSueldo += $persona['sueldo'];
                        if($persona['genero'] == 'M'){ $totalHombres++ ; } 
                        if($persona['genero'] == 'F'){ $totalMujeres++ ; } 
                        $totalTrabajadores++;
                    endforeach;
                endfor;

            ?>
            <tr>
                <td>Total</td>
                <td class="center">
                    <?= $totalTrabajadores ?>
                </td>
            </tr>
            <tr>
                <td>Hombres</td>
                <td class="center">
                    <?= $totalHombres ?>
                </td>
            </tr>
            <tr>
                <td>Mujeres</td>
                <td class="center">
                    <?= $totalMujeres ?>
                </td>
            </tr>
            <tr>
                <td>Promedio Sueldo</td>
                <td class="center">
                    <?= round($totalSueldo/$totalTrabajadores, 2) ?>
                </td>
            </tr>
        </tbody>
    </table>
</page>