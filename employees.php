<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <?php

      include "employees_query.php";
      
    ?>
    <title>Appletown</title>
</head>
<body>
    <div id="nav_placeholder"></div>
    <section id="employees" class="padded">
        <div class="container">
            <h1 id="employees_h1">Empleados</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($result_employees as $empleado):?>
                    <div class="col">
                        <div class="card">
                            <img src="imagenes/empleados/<?php echo $empleado["foto"]?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $empleado["nombres"]." ".$empleado["apellidos"]?></h5>
                                <p class="card-text"><?php echo $empleado["cargo"]?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </section>
    <div id="footer_placeholder"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/load.js" defer></script>
</body>
</html>