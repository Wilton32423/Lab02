<?php

$nombre=$_POST['nombre'];
$dirección=$_POST['dirección'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];

$mensaje='';
if ($edad < 21) {
    $mensaje = 'Usted no puede consumir licor';
}
else {
    $mensaje = 'Usted ya puede consumir licor';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
    

<body>
<div class=" card mt-3">

<div class=" card-header">
    <div class=" card-title"><h1>Bienvenidos</h1>

    </div>
    <div class="card-body">
        <div class="card-text">
        <?php

        echo '<p>!Hola '.$nombre.'!</p>';

        echo '<p>Tu dirección es ' .$dirección.'</p>';

        echo '<p>Tienes '.$edad.' años y tu correo es '.$correo. '</p>';

        echo '<p>'.$mensaje. '</p>';

        ?>

        </div>


    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>