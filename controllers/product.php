<?php

require_once 'models/product.php';

class ProductController {
    public static function index() {
        $model = new ProductModel();
        $model->getAll();
        
        include 'views/product/listProduct.php';
    }

    public static function form() {
        $model = new ProductModel();

        if(isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }

        include 'views/product/createProduct.php';
    }

    public static function save() {
        $model = new ProductModel();

        $model->id_prod = $_POST['id_prod'];
        $model->nm_prod = $_POST['nm_prod'];
        $model->price = str_replace(',', '.', $_POST['price']);
        $model->id_forn = $_POST['id_forn'];

        $model->save();

        header("Location: /produto");
    }

    public static function delete() {
        $model = new ProductModel();

        $model->delete((int) $_GET['id']);

        header("Location: /produto");
    }
}
?>
