<?php

    include_once "connect.php";

    $employees_query = "SELECT * FROM empleados";

    $esent = $pdo->prepare($employees_query);
    $esent->execute();
    $result_employees = $esent->fetchAll();

?>