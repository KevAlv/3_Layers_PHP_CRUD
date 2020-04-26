<?php
    include_once('Dcategoria.php');


    $categoria = new DCategoria();
    $categoria->set('id',4);
    $categoria->delete();
    print_r($categoria->getAll());