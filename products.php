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

      include "products_query.php";
      
    ?>
    <title>Appletown</title>
</head>
<body>
    <div id="nav_placeholder"></div>
    <section>
      <div class="container-fluid padded">
        <div class="row">
          <div class="col-3">
            <h1 id="products_h1">Productos</h1>
          </div>
          <div class="col-9"></div>
        </div>
        <div class="row">
          <form id="product_filters" method="get" class="col-2">
            <h2>Categorías</h2>
            <ul class="list-group">
              <?php foreach($result_categories as $categoria):?>
                <li class="list-group-item">
                <input type ="radio" width="100%" height="auto" name="category" value="<?php echo $categoria["idcategoria"]?>">  
                <?php echo $categoria["categoria"]?>
                <span class="badge rounded-pill text-bg-success"><?php echo $categoria["cantidad"]?></span>                </li>
              <?php endforeach?>
            </ul>
            <div class="price-range">
            <h2>Precio:</h2>
              <div class="row" id="prices_limit">
                <input type="number" class="col-4" name="price_min_text" id="" step="0.01" min="<?php echo $result_lprice["precio"]?>" max="<?php echo $result_hprice["precio"]?>" value="<?php echo $result_lprice["precio"]?>">
                <input type="number" class="col-4" name="price_max_text" id="" step="0.01" min="<?php echo $result_lprice["precio"]?>" max="<?php echo $result_hprice["precio"]?>" value="<?php echo $result_hprice["precio"]?>">
              </div>
            </div>
            <input class="btn btn-primary filter_btn" type="submit" name="btnSub" value="Aplicar">
            <input class="btn btn-primary filter_btn" type="submit" name="btnDel" value="Reestablecer">
          </form>
          <div class="col-9 border-box" id="products_box">
            <h1 class="padded">Mostrando <?php echo $result_total["total"]?> productos</h1>
            <div class="row products_row">
              <?php foreach($result_products as $producto):?>
              <div class="col-3 product border-box">
                <img src="<?php echo $producto["imagenchica"];?>" width="100%" alt="">
                <h5><?php echo $producto["producto"];?></h5>
                <h6><?php echo $producto["categoria"];?></h6>
                <h6><?php echo "S/.".$producto["precio"];?></h6>
              </div>
              <?php endforeach?>   
            </div>
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