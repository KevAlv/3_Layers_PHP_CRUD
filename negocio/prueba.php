<?php
    include_once('NCategoria.php');


    $categoria = new NCategoria();
    $categoria->eliminar(2);
    $categoria->eliminar(3);
    $categoria->eliminar(4);
    $categoria->eliminar(5);
    
    print_r($categoria->getAll());


    
