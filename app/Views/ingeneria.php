<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENATI</title>
</head>
<body>
    <h1>Estas en Ingeneria de Software</h1>
    <p>Programador : <?= $desarrollador ?> </p>
    <hr>
    <ul>
        <?php foreach($lenguajes as $lp): ?>
        <li><?= $lp ?></li>
        <?php endforeach;?>
    </ul>

</body>
</html> 