<?php
    include_once('habitacion.php');


    $habitacion = new Habitacion();
    print_r($habitacion->getAll());