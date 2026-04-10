<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
</head>

<body>

    <style>
        /* Solo Funciona px en HTML2PDF */
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th{
            background-color: #2c2c2c;
            color: #FFF;
            padding: 8px;
            text-align: center;
        }

        td{
            border: 1px solid gray;
            padding: 6px;
        }

        tr:nth-child(even){
            background-color: #b1b1b1;
        }

    </style>

    <h1>Reporte General de Vehiculos</h1>
    <table>
        <thead>
            <tr>
                <th style="width: 10%">#</th>
                <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 20%">Año</th>
                <th style="width: 15%">Color</th>
                <th style="width: 15%">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($vehiculos as $vehiculo): ?>
                <tr>
                    <td><?= esc($vehiculo['id']) ?></td>
                    <td><?= esc($vehiculo['marca']) ?></td>
                    <td><?= esc($vehiculo['modelo']) ?></td>
                    <td><?= esc($vehiculo['anio']) ?></td>
                    <td><?= esc($vehiculo['color']) ?></td>
                    <td><?= esc($vehiculo['precio']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>