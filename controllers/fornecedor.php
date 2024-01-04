<?php

require_once 'models/fornecedor.php';

class FornecedorController {
    public static function index() {
        $model = new FornecedorModel();
        $model->getAll();
        
        include 'views/fornecedor/listFornec.php';
    }

    public static function form() {
        $model = new FornecedorModel();

        if(isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }

        include 'views/fornecedor/createFornec.php';
    }

    public static function save() {
        $model = new FornecedorModel();

        $model->id_forn = $_POST['id_forn'];
        $model->nm_forn = $_POST['nm_forn'];
        $model->cnpj = $_POST['cnpj'];
        $model->UF = $_POST['UF'];

        $model->save();

        header("Location: /fornecedor");
    }

    public static function delete() {
        $model = new FornecedorModel();

        $model->delete((int) $_GET['id']);

        header("Location: /fornecedor");
    }
}
?>
