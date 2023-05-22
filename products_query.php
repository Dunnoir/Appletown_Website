<?php

        include_once "connect.php";

        $products_query = "SELECT productos.nombre AS 'producto', productos.precio, 
        categorias.nombre AS 'categoria', productos.imagenchica
        FROM categorias INNER JOIN productos 
        ON productos.idcategoria = categorias.idcategoria";
        $categories_query = "SELECT categorias.nombre as 'categoria', categorias.idcategoria, COUNT(productos.idproducto) as 'cantidad' 
        from categorias INNER JOIN productos ON categorias.idcategoria = productos.idcategoria 
        GROUP BY productos.idcategoria ORDER BY productos.idcategoria ASC";
        $low_price_query = "SELECT productos.precio FROM `productos` ORDER BY productos.precio ASC LIMIT 1";
        $high_price_query = "SELECT productos.precio FROM `productos` ORDER BY productos.precio DESC LIMIT 1";
        $total_query = "SELECT COUNT(productos.idproducto) as 'total' FROM productos";

        $csent = $pdo->prepare($categories_query);
        $csent->execute();
        $result_categories = $csent->fetchAll();
  
        $lpri = $pdo->prepare($low_price_query);
        $lpri->execute();
        $result_lprice = $lpri->fetch();
  
        $hpri = $pdo->prepare($high_price_query);
        $hpri->execute();
        $result_hprice = $hpri->fetch();
        
        $cat_sel = $_GET["category"] ?? null;
        $pri_min = $_GET["price_min_text"] ?? null;
        $pri_max = $_GET["price_max_text"] ?? null;
        if (isset($_GET["btnDel"])){
          $products_query .= " ORDER BY productos.idproducto";
        }else if (isset($_GET["btnSub"])){
          if (isset($_GET["category"])){
            $products_query .= " WHERE productos.idcategoria = ".$cat_sel." AND productos.precio >= ".$pri_min." AND productos.precio <= ".$pri_max." ORDER BY productos.idproducto";
            $total_query .= " WHERE productos.idcategoria = ".$cat_sel." AND productos.precio >= ".$pri_min." AND productos.precio <= ".$pri_max." ORDER BY productos.idproducto";
          }else{
            $products_query .= " WHERE productos.precio >= ".$pri_min." AND productos.precio <= ".$pri_max." ORDER BY productos.idproducto";
            $total_query .= " WHERE productos.precio >= ".$pri_min." AND productos.precio <= ".$pri_max." ORDER BY productos.idproducto";
          }
        }else{
          $products_query .= " ORDER BY productos.idproducto";
        }
        $prosent = $pdo->prepare($products_query);
        $prosent->execute();
        $result_products = $prosent->fetchAll();
        
        $tsent = $pdo->prepare($total_query);
        $tsent->execute();
        $result_total = $tsent->fetch();
?>