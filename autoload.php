<?php

spl_autoload_register(function ($nome_da_classe) {
    $classe_controller = 'controllers/' . $nome_da_classe . '.php';
    $classe_model = 'models/' . $nome_da_classe . '.php';
    $classe_repository = 'repository/' . $nome_da_classe . '.php';

    if(file_exists($classe_controller)){
        include $classe_controller;
    } elseif(file_exists($classe_model)) {
        include $classe_model;
    } elseif(file_exists($classe_repository)) {
        include $classe_repository;
    }

});