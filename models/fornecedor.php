<?php

require_once 'repository/fornecedor.php';


class FornecedorModel {
    public $id_forn, $nm_forn, $cnpj, $UF;

    public $rows;

    public function save() {
        $repository = new FornecedorRepository();

        if(empty($this->id_forn)) {
            $repository->insert($this);
        } else {
            $repository->update($this);
    	}
    }

    public function getAll() {
        $repository = new FornecedorRepository();

        $this->rows = $repository->select();
    }

    public function getById(int $id) {
        $repository = new FornecedorRepository();

        $obj = $repository->selectByID($id);

        return ($obj) ? $obj : new FornecedorModel();
    }

    public function delete(int $id) {
        $repository = new FornecedorRepository();

        $repository->delete($id);
    }
}