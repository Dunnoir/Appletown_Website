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

      include "shippings_providers_query.php";
      
    ?>
    <title>Appletown</title>
</head>
<body>
    <div id="nav_placeholder"></div>
    <section id="shipping" class="padded">
        <div class="container">
            <h1 id="shipping_h1">Empresas de envío</h1>
            <table class="table">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                </tr>
                <?php foreach($result_shipping as $empresaenvio):?>
                    <tr>
                        <td><?php echo $empresaenvio["idempresaenvio"]?></td>
                        <td><?php echo $empresaenvio["nombre"]?></td>
                        <td><?php echo $empresaenvio["telefono"]?></td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
    <section id="providers" class="padded">
        <div class="container">
            <h1 id="providers_h1">Proovedores</h1>
            <table class="table">
                <tr>
                    <th>Empresa</th>
                    <th>Contacto</th>
                    <th>Cargo</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>País</th>
                </tr>
                <?php foreach($result_providers as $proovedor):?>
                    <tr>
                        <td><?php echo $proovedor["nombreempresa"]?></td>
                        <td><?php echo $proovedor["nombrecontacto"]?></td>
                        <td><?php echo $proovedor["cargocontacto"]?></td>
                        <td><?php echo $proovedor["direccion"]?></td>
                        <td><?php echo $proovedor["ciudad"]?></td>
                        <td><?php echo $proovedor["pais"]?></td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </section>
    <div id="footer_placeholder"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/load.js" defer></script>
</body>
</html>