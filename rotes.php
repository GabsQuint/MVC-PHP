<?php

include 'controllers/product.php';
include 'controllers/fornecedor.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':
        include 'views/main_page.php';
        break;

    case '/produto':
        ProductController::index();
        break;

    case '/produto/form':
        ProductController::form();
        break;

    case '/produto/form/save':
        ProductController::save();
        break;

    case '/produto/delete':
        ProductController::delete();
        break;

    case '/fornecedor':
        FornecedorController::index();
        break;
    
    case '/fornecedor/form':
        FornecedorController::form();
        break;
    
    case '/fornecedor/form/save':
        FornecedorController::save();
        break;
    
    case '/fornecedor/delete':
        FornecedorController::delete();
        break;
    

    default:
        echo "Erro 404";
        break;
}