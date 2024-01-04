<?php

require_once 'repository/product.php';


class ProductModel {
    public $id_prod, $nm_prod, $price, $id_forn;

    public $rows;

    public function save() {
        $repository = new ProductRepository();

        if(empty($this->id_prod)) {
            $repository->insert($this);
        } else {
            $repository->update($this);
    	}
    }

    public function getAll() {
        $repository = new ProductRepository();

        $this->rows = $repository->select();
    }

    public function getById(int $id) {
        $repository = new ProductRepository();

        $obj = $repository->selectByID($id);

        return ($obj) ? $obj : new ProductModel();
    }

    public function delete(int $id) {
        $repository = new ProductRepository();

        $repository->delete($id);
    }
}