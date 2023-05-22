<?php

    include_once "connect.php";

    $shipping_query = "SELECT * FROM empresasenvios";

    $shsent = $pdo->prepare($shipping_query);
    $shsent->execute();
    $result_shipping = $shsent->fetchAll();

    $providers_query = "SELECT * FROM proveedores ORDER BY proveedores.nombreempresa";

    $psent = $pdo->prepare($providers_query);
    $psent->execute();
    $result_providers = $psent->fetchAll();

?>