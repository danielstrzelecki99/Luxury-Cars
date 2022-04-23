<?php
    include_once '../Classes/Baza.php';
    $db = new Baza("localhost", "root", "", "LuxuryCars");
    $value = filter_input(INPUT_POST, "id");

    $order = $db->showOrders("SELECT * FROM `orders` WHERE id = '$value'",['car', 'engine', 'type', 'color', 'equipment', 'payment_method']);
    $order = $order[0];
    echo(json_encode($order));
?>